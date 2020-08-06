namespace veiculos_3_camadas
{
    partial class frmRelatorio
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.btnRelatorioGerar = new System.Windows.Forms.Button();
            this.lblTotal = new System.Windows.Forms.Label();
            this.dtgRelatorio = new System.Windows.Forms.DataGridView();
            this.dataInicial = new System.Windows.Forms.DateTimePicker();
            this.dataFinal = new System.Windows.Forms.DateTimePicker();
            ((System.ComponentModel.ISupportInitialize)(this.dtgRelatorio)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(26, 20);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(21, 13);
            this.label1.TabIndex = 0;
            this.label1.Text = "De";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(242, 20);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(23, 13);
            this.label2.TabIndex = 1;
            this.label2.Text = "Até";
            // 
            // btnRelatorioGerar
            // 
            this.btnRelatorioGerar.Location = new System.Drawing.Point(469, 12);
            this.btnRelatorioGerar.Name = "btnRelatorioGerar";
            this.btnRelatorioGerar.Size = new System.Drawing.Size(200, 26);
            this.btnRelatorioGerar.TabIndex = 2;
            this.btnRelatorioGerar.Text = "Gerar Relatório";
            this.btnRelatorioGerar.UseVisualStyleBackColor = true;
            this.btnRelatorioGerar.Click += new System.EventHandler(this.btnRelatorioGerar_Click);
            // 
            // lblTotal
            // 
            this.lblTotal.AutoSize = true;
            this.lblTotal.Font = new System.Drawing.Font("Microsoft Sans Serif", 26.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblTotal.Location = new System.Drawing.Point(12, 309);
            this.lblTotal.Name = "lblTotal";
            this.lblTotal.Size = new System.Drawing.Size(267, 39);
            this.lblTotal.TabIndex = 3;
            this.lblTotal.Text = "Total de Vendas";
            // 
            // dtgRelatorio
            // 
            this.dtgRelatorio.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dtgRelatorio.Location = new System.Drawing.Point(12, 44);
            this.dtgRelatorio.Name = "dtgRelatorio";
            this.dtgRelatorio.Size = new System.Drawing.Size(657, 247);
            this.dtgRelatorio.TabIndex = 4;
            // 
            // dataInicial
            // 
            this.dataInicial.Location = new System.Drawing.Point(53, 15);
            this.dataInicial.Name = "dataInicial";
            this.dataInicial.Size = new System.Drawing.Size(152, 20);
            this.dataInicial.TabIndex = 5;
            // 
            // dataFinal
            // 
            this.dataFinal.Location = new System.Drawing.Point(271, 15);
            this.dataFinal.Name = "dataFinal";
            this.dataFinal.Size = new System.Drawing.Size(155, 20);
            this.dataFinal.TabIndex = 6;
            // 
            // frmRelatorio
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(681, 357);
            this.Controls.Add(this.dataFinal);
            this.Controls.Add(this.dataInicial);
            this.Controls.Add(this.dtgRelatorio);
            this.Controls.Add(this.lblTotal);
            this.Controls.Add(this.btnRelatorioGerar);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Name = "frmRelatorio";
            this.Text = "FORMULÁRIO DE RELATÓRIO";
            ((System.ComponentModel.ISupportInitialize)(this.dtgRelatorio)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Button btnRelatorioGerar;
        private System.Windows.Forms.Label lblTotal;
        private System.Windows.Forms.DataGridView dtgRelatorio;
        private System.Windows.Forms.DateTimePicker dataInicial;
        private System.Windows.Forms.DateTimePicker dataFinal;
    }
}