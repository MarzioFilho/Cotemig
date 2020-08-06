using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Revisão_Métodos
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        operacao obj = new operacao();

        private void btnPronto_Click(object sender, EventArgs e)
        {
            int a = int.Parse(txtN1.Text);
            obj.Num1 = a;

            int b = int.Parse(txtN2.Text);
            obj.Num2 = b;

            int c = int.Parse(txtN3.Text);
            obj.Num3 = c;

            int d = int.Parse(txtN4.Text);
            obj.Num4 = d;

            int f = int.Parse(txtN5.Text);
            obj.Num5 = f;

            txtR1.Text = obj.soma().ToString();

            txtR2.Text = obj.media().ToString();

            txtR3.Text = obj.maior().ToString();

            txtR4.Text = obj.menor().ToString();

            txtR5.Text = obj.potencia().ToString();
        }

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            txtN1.Clear();
            txtN2.Clear();
            txtN3.Clear();
            txtN4.Clear();
            txtN5.Clear();

            txtR1.Clear();
            txtR2.Clear();
            txtR3.Clear();
            txtR4.Clear();
            txtR5.Clear();
        }
        




           
        
      
    }
}
