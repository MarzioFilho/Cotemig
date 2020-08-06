using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Revisão_Métodos
{
    class operacao
    {

        operacao op = new operacao();

        private int num1;

        public int Num1
        {
            get { return num1; }
            set { num1 = value; }
        }
        private int num2;

        public int Num2
        {
            get { return num2; }
            set { num2 = value; }
        }
        private int num3;

        public int Num3
        {
            get { return num3; }
            set { num3 = value; }
        }
        private int num4;

        public int Num4
        {
            get { return num4; }
            set { num4 = value; }
        }
        private int num5;

        public int Num5
        {
            get { return num5; }
            set { num5 = value; }
        }

        public int soma()
        {
            int somaN;

            somaN = num1 + num2 + num3 + num4 + num5;
            return somaN;
        }
        public double media()
        {
            double mediaN = (double)soma()/5;
            return mediaN;
        }

        public int maior()
        {
            int maiorN = Math.Max(num1, num2);
            int maiorN2 = Math.Max(maiorN, num3);
            int maiorN3 = Math.Max(maiorN2, num4);
            int maiorN4 = Math.Max(maiorN3, num5);
            return maiorN4;
        }

        public int menor()
        {
            int menorN = Math.Min(num1, num2);
            int menorN2 = Math.Min(menorN, num3);
            int menorN3 = Math.Min(menorN2, num4);
            int menorN4 = Math.Min(menorN3, num5);
            return menorN4;
        }

        public double potencia()
        {
            double potenciaN = Math.Pow(num2, num3);
            return potenciaN;
        }
    }
}
