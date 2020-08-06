namespace frmGerNotaFiscal
{
    partial class Form2
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form2));
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            this.txtNome = new System.Windows.Forms.TextBox();
            this.mtxData = new System.Windows.Forms.MaskedTextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.panel1 = new System.Windows.Forms.Panel();
            this.button1 = new System.Windows.Forms.Button();
            this.label3 = new System.Windows.Forms.Label();
            this.dgvNotaFiscal = new System.Windows.Forms.DataGridView();
            this.button2 = new System.Windows.Forms.Button();
            this.Cliente = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Produto = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.ValorUnitario = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Quantidade = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Total = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvNotaFiscal)).BeginInit();
            this.SuspendLayout();
            // 
            // txtNome
            // 
            this.txtNome.Location = new System.Drawing.Point(16, 67);
            this.txtNome.Margin = new System.Windows.Forms.Padding(4);
            this.txtNome.Name = "txtNome";
            this.txtNome.Size = new System.Drawing.Size(381, 22);
            this.txtNome.TabIndex = 1;
            // 
            // mtxData
            // 
            this.mtxData.Location = new System.Drawing.Point(481, 67);
            this.mtxData.Margin = new System.Windows.Forms.Padding(4);
            this.mtxData.Mask = "00/00/0000";
            this.mtxData.Name = "mtxData";
            this.mtxData.Size = new System.Drawing.Size(153, 22);
            this.mtxData.TabIndex = 2;
            this.mtxData.ValidatingType = typeof(System.DateTime);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.ForeColor = System.Drawing.SystemColors.Control;
            this.label1.Location = new System.Drawing.Point(13, 47);
            this.label1.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(136, 16);
            this.label1.TabIndex = 3;
            this.label1.Text = "Nome do Cliente:";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.ForeColor = System.Drawing.SystemColors.Control;
            this.label2.Location = new System.Drawing.Point(478, 47);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(160, 16);
            this.label2.TabIndex = 4;
            this.label2.Text = "Data de nascimento:";
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.button2);
            this.panel1.Controls.Add(this.button1);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.mtxData);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.txtNome);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel1.Location = new System.Drawing.Point(0, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(647, 162);
            this.panel1.TabIndex = 5;
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.SystemColors.Control;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button1.ForeColor = System.Drawing.SystemColors.WindowFrame;
            this.button1.Location = new System.Drawing.Point(204, 133);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(267, 23);
            this.button1.TabIndex = 6;
            this.button1.Text = "GERAR NOTA FISCAL";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Courier New", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.SystemColors.Control;
            this.label3.Location = new System.Drawing.Point(135, 9);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(374, 23);
            this.label3.TabIndex = 5;
            this.label3.Text = "CADASTRO DE DADOS DO CLIENTE";
            // 
            // dgvNotaFiscal
            // 
            this.dgvNotaFiscal.BackgroundColor = System.Drawing.SystemColors.Control;
            this.dgvNotaFiscal.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvNotaFiscal.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.Cliente,
            this.Produto,
            this.ValorUnitario,
            this.Quantidade,
            this.Total});
            this.dgvNotaFiscal.Dock = System.Windows.Forms.DockStyle.Fill;
            this.dgvNotaFiscal.Location = new System.Drawing.Point(0, 162);
            this.dgvNotaFiscal.Name = "dgvNotaFiscal";
            this.dgvNotaFiscal.RowHeadersVisible = false;
            this.dgvNotaFiscal.Size = new System.Drawing.Size(647, 357);
            this.dgvNotaFiscal.TabIndex = 6;
            // 
            // button2
            // 
            this.button2.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.button2.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("button2.BackgroundImage")));
            this.button2.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button2.ForeColor = System.Drawing.Color.Transparent;
            this.button2.Location = new System.Drawing.Point(614, 3);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(30, 30);
            this.button2.TabIndex = 7;
            this.button2.UseVisualStyleBackColor = false;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // Cliente
            // 
            this.Cliente.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.Fill;
            this.Cliente.HeaderText = "Cliente";
            this.Cliente.Name = "Cliente";
            // 
            // Produto
            // 
            this.Produto.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.Fill;
            this.Produto.HeaderText = "Produto";
            this.Produto.Name = "Produto";
            // 
            // ValorUnitario
            // 
            dataGridViewCellStyle1.Format = "N2";
            dataGridViewCellStyle1.NullValue = null;
            this.ValorUnitario.DefaultCellStyle = dataGridViewCellStyle1;
            this.ValorUnitario.HeaderText = "Valor Unitário";
            this.ValorUnitario.Name = "ValorUnitario";
            this.ValorUnitario.Width = 90;
            // 
            // Quantidade
            // 
            this.Quantidade.HeaderText = "Quantidade";
            this.Quantidade.Name = "Quantidade";
            this.Quantidade.Width = 90;
            // 
            // Total
            // 
            dataGridViewCellStyle2.Format = "N2";
            dataGridViewCellStyle2.NullValue = null;
            this.Total.DefaultCellStyle = dataGridViewCellStyle2;
            this.Total.HeaderText = "Total";
            this.Total.Name = "Total";
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.ClientSize = new System.Drawing.Size(647, 519);
            this.ControlBox = false;
            this.Controls.Add(this.dgvNotaFiscal);
            this.Controls.Add(this.panel1);
            this.Font = new System.Drawing.Font("Courier New", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Margin = new System.Windows.Forms.Padding(4);
            this.Name = "Form2";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvNotaFiscal)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.TextBox txtNome;
        private System.Windows.Forms.MaskedTextBox mtxData;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.DataGridView dgvNotaFiscal;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.DataGridViewTextBoxColumn Cliente;
        private System.Windows.Forms.DataGridViewTextBoxColumn Produto;
        private System.Windows.Forms.DataGridViewTextBoxColumn ValorUnitario;
        private System.Windows.Forms.DataGridViewTextBoxColumn Quantidade;
        private System.Windows.Forms.DataGridViewTextBoxColumn Total;
    }
}