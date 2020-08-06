/**
 * 
 */
package br.com.cotemig.entidades;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertTrue;

import org.junit.Test;

/**
 * @author tavares
 *
 */
public class TesteDepartamento {

	/**
	 * {@inheritDoc}
	 */
	@Test
	public void testarCalcularCustoDoDepartamento() {
		//setup
		Departamento departamento =				
				PovoadorDepartamento.povoarDepartamento(3);
		departamento.custoFixo = 5000;
		for (Empregado emp:departamento.empregados) {
			emp.salario = 2000;
		}
		
		// execução
		float custo = departamento.calcularCustoDoDepartamento();
		
		//assert
		assertEquals(11000, custo, 0);
	}
	
	/**
	 * {@inheritDoc}
	 */
	@Test
	public void testarEquals() {
		//setup
		Departamento departamento1 =				
				PovoadorDepartamento.povoarDepartamento(3);
		departamento1.custoFixo = 1000f;
		
		Departamento departamento2 =				
				PovoadorDepartamento.povoarDepartamento(3);
		departamento2.custoFixo = 1000f;
		
		
		
		//assert
		assertEquals(departamento1, departamento2);
	}
}
