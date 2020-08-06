using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace exercicio_avaliativo
{
    class produto
    {

        private int codigo;

        public int Codigo
        {
            get { return codigo; }
            set 
            {
                if(value >= 0)
                {
                    codigo = value;
                }
                else 
                {
                    throw new Exception("Codigo inválido.");
                }
            }
        }
        private string descricao;

        public string Descricao
        {
            get { return descricao; }
            set 
            {
                if (value != "")
                {
                    descricao = value;
                }
                else
                {
                    throw new Exception("Descrição inválida.");
                }
            }
        }
        private int quantidade;

        public int Quantidade
        {
            get { return quantidade; }
            set 
            {
                if (value >= 0)
                {
                    quantidade = value;
                }
                else
                {
                    throw new Exception("Quantidade inválida.");
                }
            }
        }

        private string tipo;

        public string Tipo
        {
            get { return tipo; }
            set 
            {
                if (value != "")
                {
                    tipo = value;
                }
                else
                {
                    throw new Exception("Tipo inválido.");
                }
            }
        }

        private string tamanho;

        public string Tamanho
        {
            get { return tamanho; }
            set 
            {
                if(value !="")
                {
                    tamanho = value;
                }
                else
                {
                    throw new Exception("Tamanho inválido.");
                }
            }
        }

        
    }
}
