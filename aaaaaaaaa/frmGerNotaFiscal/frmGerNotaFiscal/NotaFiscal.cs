using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace frmGerNotaFiscal
{
    public class NotaFiscal
    {

        //public NotaFiscal(string Produto, double ValorUnitario, int Quantidade)
        //{
        //    Produto objProduto = new Produto();
        //    ItemDaNotaFiscal objItemDaNotaFiscal = new ItemDaNotaFiscal();

        //    objProduto.Nome = Produto;
        //    objItemDaNotaFiscal.ValorUnitario = ValorUnitario;
        //    objItemDaNotaFiscal.quantidade = Quantidade;
        //}
            public List<Produto> lstProdutos = new List<Produto>();
            public List<ItemDaNotaFiscal> lstItemDaNotaFiscal = new List<ItemDaNotaFiscal>();
            public List<Cliente> lstCliente = new List<Cliente>();

            public double Total = 0;
            public DateTime DataEmissao;
            public void CalcularValorTotal()
            {
                for (int i = 0; i < lstItemDaNotaFiscal.Count; i++)
                {
                    if (lstItemDaNotaFiscal[i].quantidade > 1)
                    {
                        Total = lstItemDaNotaFiscal[i].ValorUnitario * lstItemDaNotaFiscal[i].quantidade;
                    }
                    else
                    {
                        Total += lstItemDaNotaFiscal[i].ValorUnitario;
                    }
                }
            }
    }
}
