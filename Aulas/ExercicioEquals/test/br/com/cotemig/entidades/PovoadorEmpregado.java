/**
 * 
 */
package br.com.cotemig.entidades;

import java.util.Random;

/**
 * @author dirceu
 *
 */
public class PovoadorEmpregado {
	static int cont = 0;
	
	static Empregado povoarEmpregado(Departamento d) {
		Random r = new Random();
		Empregado emp = new Empregado();
		
		emp.nome = "Nome do empregado " + cont;
		//Gerar números entre 1000 e 2000
		emp.salario = 1000 + r.nextFloat() * 1000;
		emp.matricula = "Emp"+cont;
		
		emp.departamento = d;
		
		cont++;
		
		return emp;
	}
}
