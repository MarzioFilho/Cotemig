/**
 * 
 */
package br.com.cotemig.entidades;

import java.util.Arrays;

/**
 * @author tavares
 */
public class Departamento {
	String nome;
	float custoFixo;
	Empregado[] empregados;
	
	float calcularCustoDoDepartamento() {
		float custo = custoFixo;
		
		for(int i=0; i<empregados.length; i++){
			custo = custo + empregados[i].salario;
		}
		
		return custo;
	}

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + Float.floatToIntBits(custoFixo);
		result = prime * result + Arrays.hashCode(empregados);
		result = prime * result + ((nome == null) ? 0 : nome.hashCode());
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Departamento other = (Departamento) obj;
		if (Float.floatToIntBits(custoFixo) != Float.floatToIntBits(other.custoFixo))
			return false;
		if (!Arrays.equals(empregados, other.empregados))
			return false;
		if (nome == null) {
			if (other.nome != null)
				return false;
		} else if (!nome.equals(other.nome))
			return false;
		return true;
	}
}
