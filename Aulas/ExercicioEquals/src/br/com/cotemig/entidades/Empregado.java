/**
 * 
 */
package br.com.cotemig.entidades;

/**
 * @author tavares
 */
public class Empregado {
	String nome;
	float salario;
	String matricula;
	Departamento departamento;

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Empregado other = (Empregado) obj;
		if (matricula == null) {
			if (other.matricula != null)
				return false;
		} else if (!matricula.equals(other.matricula))
			return false;
		if (nome == null) {
			if (other.nome != null)
				return false;
		} else if (!nome.equals(other.nome))
			return false;
		if (Float.floatToIntBits(salario) != Float.floatToIntBits(other.salario))
			return false;
		return true;
	}
	
	
}
