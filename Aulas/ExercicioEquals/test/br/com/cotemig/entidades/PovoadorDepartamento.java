/**
 * 
 */
package br.com.cotemig.entidades;

import java.util.Random;

/**
 * @author tavares
 */
public class PovoadorDepartamento {
	static int cont = 0;
	
	static Departamento povoarDepartamento(int numEmp) {
		Random r = new Random();
		Departamento d = new Departamento();
		
		d.nome = "Nome do departamento " + cont;
		d.custoFixo = 1000 + r.nextFloat() * 1000;
		Empregado[] emps = new Empregado[numEmp];
		
		for (int i=0; i<numEmp; i++) {
			emps[i] = PovoadorEmpregado.povoarEmpregado(d);
		}
		d.empregados = emps;
		
		return d;
	}
}
