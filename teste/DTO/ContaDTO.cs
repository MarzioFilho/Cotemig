using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO
{
    public class ContaDTO
    {
        public int IdConta { get; set; }
        public string NomeTitular { get; set; }
        public string Cpf { get; set; }
        public int IdTipoConta { get; set; }
        public string Agencia { get; set; }
        public string NumeroConta { get; set; }
        public DateTime DtAbertura { get; set; } 
    }
}
