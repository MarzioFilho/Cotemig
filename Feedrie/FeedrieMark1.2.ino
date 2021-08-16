int situacao = 0; // Variável para controlar o início do processo
int quantidade = 0;

/* ----| INÍCIO ETHERNET |---- */

#include <SPI.h>
#include <Ethernet.h>


byte mac[] = { 0x10, 0xC3, 0x7B, 0xC2, 0x2C, 0xC6 };  // Endereço físico da shield

IPAddress ip(192,168,0,20);          // Endereço IP estático
IPAddress gateway(192,168,0,1);      // Gateway
IPAddress subnet(255, 255, 255, 0);  // Máscara de rede
EthernetClient client;               // Objeto do client

/* ----| FIM ETHERNET |---- */

//_____________________________________________________________________________________________

/* ----| INÍCIO SERVO |---- */

#include <Servo.h> 

Servo myServo;

int ServoPort = 6; // Porta do servo

/* ----| FIM SERVO |---- */

//_____________________________________________________________________________________________

/* ----| INÍCIO BALANÇA |---- */

#include "HX711.h"

// HX711.DOUT  - porta A2
// HX711.PD_SCK - porta A3

HX711 scale(A2, A3);

/* ----| FIM BALANÇA |---- */

//_____________________________________________________________________________________________

void setup()
{
  Serial.begin(9600);

  /*--------------| INÍCIO ETHERNET SETUP |--------------*/

  while (!Serial){} // Espera a porta serial ser conectada
  
  Ethernet.begin(mac, ip, gateway, subnet); //Inicializa a shield

  ConnectAndRead(); // Método de conexão

  /*--------------| FIM ETHERNET SETUP |--------------*/
  
//_____________________________________________________________________________________________

  /*--------------| INÍCIO SERVO SETUP |--------------*/
  
  myServo.attach(ServoPort);
  myServo.write(0);    // Garante que o servo está na posição 0 (válvula da ração fechada)

  /*--------------| FIM SERVO SETUP |--------------*/
  
//_____________________________________________________________________________________________

  /*--------------| INÍCIO BALANÇA SETUP |--------------*/
  
  Serial.println("Feedrie - Balança");
  
  scale.set_scale(-114.f); // Fator de calibração
  scale.tare(); // Reseta a balança para 0

  Serial.println("Regulando a balança:");

  Serial.print("Leitura vazia: \t\t");
  Serial.println(scale.read()); // Imprime uma leitura vazia do ADC
  
  Serial.print("Leitura média: \t\t");
  Serial.println(scale.read_average(20)); // Imprime um média de 20 leituras do ADC

  Serial.print("get_value: \t\t");
  Serial.println(scale.get_value(5)); // Imprime uma média de 5 leituras do ADC, subtraido o peso da tara ( configurado com o método tare() )

  Serial.print("get_units: \t\t");
  Serial.println(scale.get_units(5), 1); // Imprime uma média de 5 leituras do ADC, subtraido o peso da tara, dividida pelo
                                         // parâmetro fator de calibração ( configurado com o método set_scale() )

  Serial.println("Leituras:");

  /*--------------| FIM BALANÇA SETUP |--------------*/
}

void ConnectAndRead()
{
  delay(5000);
  Serial.println("connecting...");
  
  if (client.connect(ip, 80)) // Conecta ao roteador pela porta 80 com o IP configurado anteriormente
  {
    Serial.println("connected");
    // Faz um request do HTTP:
    client.println("GET /index.php HTTP/1.1");        // Arquivo .php que contém a quantidade enviada pelo usuário
    client.println("Host: 192.168.0.14/Feedrie/FeedrieMark1.2/");  // Local onde está armazenada a página (esse IP é do meu computador conectádo à minha rede pessoal, e futuramente
                                                            // será substituído pelo DNS do site hospedado do feedrie)

    client.println("Connection: close");
    client.println();
  } 
  else
  {
    Serial.println("connection failed");
  }
  
}

void loop()
{ 
  /*--------------| INÍCIO ETHERNET LOOP |--------------*/

  while(client.connected()) // Enquanto estiver conectado
  {
    if (client.available()) // se disponível
    {
      int quantidade = client.read(); // Atribue à uma variável o valor armazenado na sessão referente à quantidade escolhida pelo usuário
    }
  }

  if(!client.connected()) // Caso seja desconectado
  {
    client.stop();    // Desabilita o client
    ConnectAndRead(); // Reinicia a conexão
  }
    
  /*--------------| FIM EHTERNET LOOP |--------------*/
    
//_____________________________________________________________________________________________

  if(quantidade != 0) // Se a quantidade for diferente de 0, é fato que o usuário pressionou o botão "Executar Refeição" na página web
  {
    situacao = 1; // Variável para inicar o processo
  }

  if(situacao == 1)
  {   
    myServo.write(68); // Aciona o servo (abre a válvula de ração)
  
    /*--------------| INÍCIO BALANÇA LOOP |--------------*/
  
    float limite = quantidade;                    // Atribuie à uma variável, a quantidade recebida anteriormente
    float margemUp = limite + (limite * 0.04);    // Margem de erro de 4% a mais
    float margemDown = limite - (limite * 0.04);  // Margem de erro de 4% a menos
  
    double valorAve = scale.get_units(10); // Atribue à uma variável um método para realizar uma média de 10 leituras
  
    Serial.print("Leitura:\t");
    Serial.print(scale.get_units(), 1); // Imprime uma leitura
    Serial.print("\t| Média:\t");
    Serial.println(valorAve, 1); // Imprime uma média de 10 leituras
  
    if(valorAve > margemDown && valorAve < margemUp) // Se a média for maior que a margem de erro inferior e menor que a margem de erro superior, o valor desejado foi atingido
    {
      scale.power_down();          // Desliga o ADC
  
      Serial.print("\n---------------------------\n");
      Serial.print("\nValor atingido: ");
      Serial.print(limite);
      Serial.print("g com 4% de margem de erro");
      Serial.end();

      situacao = 2;

      myServo.write(0);
    }

    if(situacao == 2)
    {
      if (client.connect(ip,80))
      {
        client.println("POST /quantidade2.php HTTP/1.1"); 
        client.println("Host: 192.168.0.14/Feedrie/FeedrieMark1.2");
        client.println("Content-Type: application/x-www-form-urlencoded");
        
        client.print("<?php");
        client.print("session_start();");
        client.print("$_SESSION['situacao']= 2;");
        client.print("?>");
      }
    }
     
    /*--------------| FIM BALANÇA LOOP |--------------*/
  }
  
//_____________________________________________________________________________________________

}
