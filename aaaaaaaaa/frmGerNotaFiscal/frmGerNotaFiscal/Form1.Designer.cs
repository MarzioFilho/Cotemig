namespace frmGerNotaFiscal
{
    partial class frmGerNotaFiscal
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmGerNotaFiscal));
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel3 = new System.Windows.Forms.Panel();
            this.dgvCarrinho = new System.Windows.Forms.DataGridView();
            this.txtQuantidade = new System.Windows.Forms.MaskedTextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.button2 = new System.Windows.Forms.Button();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.button1 = new System.Windows.Forms.Button();
            this.txtNomeProduto = new System.Windows.Forms.TextBox();
            this.btnCalcular = new System.Windows.Forms.Button();
            this.txtValorUnitario = new System.Windows.Forms.MaskedTextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.Produto = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.valorunitario = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.quantidade = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.panel1.SuspendLayout();
            this.panel3.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvCarrinho)).BeginInit();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.SystemColors.Control;
            this.panel1.Controls.Add(this.panel3);
            this.panel1.Controls.Add(this.txtQuantidade);
            this.panel1.Controls.Add(this.label4);
            this.panel1.Controls.Add(this.button2);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.button1);
            this.panel1.Controls.Add(this.txtNomeProduto);
            this.panel1.Controls.Add(this.btnCalcular);
            this.panel1.Controls.Add(this.txtValorUnitario);
            this.panel1.ForeColor = System.Drawing.SystemColors.ControlText;
            this.panel1.Location = new System.Drawing.Point(16, 27);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(618, 274);
            this.panel1.TabIndex = 0;
            // 
            // panel3
            // 
            this.panel3.Controls.Add(this.dgvCarrinho);
            this.panel3.Location = new System.Drawing.Point(231, 39);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(375, 135);
            this.panel3.TabIndex = 8;
            // 
            // dgvCarrinho
            // 
            this.dgvCarrinho.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvCarrinho.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.Produto,
            this.valorunitario,
            this.quantidade});
            this.dgvCarrinho.Dock = System.Windows.Forms.DockStyle.Fill;
            this.dgvCarrinho.Location = new System.Drawing.Point(0, 0);
            this.dgvCarrinho.Name = "dgvCarrinho";
            this.dgvCarrinho.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.Single;
            this.dgvCarrinho.RowHeadersVisible = false;
            this.dgvCarrinho.RowHeadersWidthSizeMode = System.Windows.Forms.DataGridViewRowHeadersWidthSizeMode.DisableResizing;
            this.dgvCarrinho.Size = new System.Drawing.Size(375, 135);
            this.dgvCarrinho.TabIndex = 0;
            // 
            // txtQuantidade
            // 
            this.txtQuantidade.Location = new System.Drawing.Point(18, 152);
            this.txtQuantidade.Mask = "00";
            this.txtQuantidade.Name = "txtQuantidade";
            this.txtQuantidade.Size = new System.Drawing.Size(192, 22);
            this.txtQuantidade.TabIndex = 2;
            this.txtQuantidade.ValidatingType = typeof(int);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(15, 132);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(88, 17);
            this.label4.TabIndex = 6;
            this.label4.Text = "Quantidade";
            // 
            // button2
            // 
            this.button2.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.button2.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("button2.BackgroundImage")));
            this.button2.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button2.ForeColor = System.Drawing.Color.Transparent;
            this.button2.Location = new System.Drawing.Point(585, 3);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(30, 30);
            this.button2.TabIndex = 5;
            this.button2.UseVisualStyleBackColor = false;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(15, 75);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(120, 17);
            this.label3.TabIndex = 4;
            this.label3.Text = "Valor unitário";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(15, 19);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(128, 17);
            this.label2.TabIndex = 3;
            this.label2.Text = "Nome do produto";
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button1.Font = new System.Drawing.Font("Courier New", 18F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.ForeColor = System.Drawing.SystemColors.Control;
            this.button1.Location = new System.Drawing.Point(3, 201);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(610, 33);
            this.button1.TabIndex = 3;
            this.button1.Text = "Adicionar!";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // txtNomeProduto
            // 
            this.txtNomeProduto.Location = new System.Drawing.Point(18, 39);
            this.txtNomeProduto.Name = "txtNomeProduto";
            this.txtNomeProduto.Size = new System.Drawing.Size(192, 22);
            this.txtNomeProduto.TabIndex = 0;
            // 
            // btnCalcular
            // 
            this.btnCalcular.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.btnCalcular.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnCalcular.Font = new System.Drawing.Font("Courier New", 18F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCalcular.ForeColor = System.Drawing.SystemColors.Control;
            this.btnCalcular.Location = new System.Drawing.Point(3, 236);
            this.btnCalcular.Name = "btnCalcular";
            this.btnCalcular.Size = new System.Drawing.Size(610, 32);
            this.btnCalcular.TabIndex = 4;
            this.btnCalcular.Text = "Gerar Nota";
            this.btnCalcular.UseVisualStyleBackColor = false;
            this.btnCalcular.Click += new System.EventHandler(this.btnCalcular_Click);
            // 
            // txtValorUnitario
            // 
            this.txtValorUnitario.Location = new System.Drawing.Point(18, 95);
            this.txtValorUnitario.Mask = "00,00";
            this.txtValorUnitario.Name = "txtValorUnitario";
            this.txtValorUnitario.Size = new System.Drawing.Size(192, 22);
            this.txtValorUnitario.TabIndex = 1;
            this.txtValorUnitario.ValidatingType = typeof(int);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(13, 7);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(616, 17);
            this.label1.TabIndex = 2;
            this.label1.Text = "Informe os preços e unidades dos produtos para gerar nota fiscal, por favor!";
            // 
            // Produto
            // 
            this.Produto.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.Fill;
            this.Produto.HeaderText = "Produto";
            this.Produto.Name = "Produto";
            // 
            // valorunitario
            // 
            dataGridViewCellStyle2.Format = "N2";
            dataGridViewCellStyle2.NullValue = null;
            this.valorunitario.DefaultCellStyle = dataGridViewCellStyle2;
            this.valorunitario.HeaderText = "Valor Unitário";
            this.valorunitario.Name = "valorunitario";
            // 
            // quantidade
            // 
            this.quantidade.HeaderText = "Quantidade";
            this.quantidade.Name = "quantidade";
            // 
            // frmGerNotaFiscal
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 17F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.WindowFrame;
            this.ClientSize = new System.Drawing.Size(650, 317);
            this.ControlBox = false;
            this.Controls.Add(this.label1);
            this.Controls.Add(this.panel1);
            this.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Font = new System.Drawing.Font("Courier New", 9.75F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ForeColor = System.Drawing.SystemColors.Control;
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "frmGerNotaFiscal";
            this.Text = "Form1";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.panel3.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.dgvCarrinho)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.MaskedTextBox txtValorUnitario;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox txtNomeProduto;
        private System.Windows.Forms.Button btnCalcular;
    private System.Windows.Forms.Button button2;
    private System.Windows.Forms.Label label3;
    private System.Windows.Forms.Label label2;
    private System.Windows.Forms.Panel panel3;
    private System.Windows.Forms.MaskedTextBox txtQuantidade;
    private System.Windows.Forms.Label label4;
        private System.Windows.Forms.DataGridView dgvCarrinho;
        private System.Windows.Forms.DataGridViewTextBoxColumn Produto;
        private System.Windows.Forms.DataGridViewTextBoxColumn valorunitario;
        private System.Windows.Forms.DataGridViewTextBoxColumn quantidade;
    }
}

