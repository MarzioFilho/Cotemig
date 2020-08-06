using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace veiculos_3_camadas
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void btnAcessorios_Click(object sender, EventArgs e)
        {
            frmAcessorios telaacessorios = new frmAcessorios();
            telaacessorios.ShowDialog();
        }

        private void btnVeiculos_Click(object sender, EventArgs e)
        {
            frmPrincipal telaveiculos = new frmPrincipal();
            telaveiculos.ShowDialog();
        }

        private void btnClientes_Click(object sender, EventArgs e)
        {
            frmClientes telaclientes = new frmClientes();
            telaclientes.ShowDialog();
        }
    }
}
