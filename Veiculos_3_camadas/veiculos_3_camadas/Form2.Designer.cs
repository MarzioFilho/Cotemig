namespace veiculos_3_camadas
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
            this.btnSair = new System.Windows.Forms.Button();
            this.btnAcessorios = new System.Windows.Forms.Button();
            this.btnVeiculos = new System.Windows.Forms.Button();
            this.btnRelatorio = new System.Windows.Forms.Button();
            this.btnClientes = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // btnSair
            // 
            this.btnSair.Location = new System.Drawing.Point(12, 151);
            this.btnSair.Name = "btnSair";
            this.btnSair.Size = new System.Drawing.Size(373, 59);
            this.btnSair.TabIndex = 5;
            this.btnSair.Text = "SAIR";
            this.btnSair.UseVisualStyleBackColor = true;
            this.btnSair.Click += new System.EventHandler(this.btnSair_Click);
            // 
            // btnAcessorios
            // 
            this.btnAcessorios.Location = new System.Drawing.Point(202, 12);
            this.btnAcessorios.Name = "btnAcessorios";
            this.btnAcessorios.Size = new System.Drawing.Size(183, 64);
            this.btnAcessorios.TabIndex = 4;
            this.btnAcessorios.Text = "ACESSÓRIOS";
            this.btnAcessorios.UseVisualStyleBackColor = true;
            this.btnAcessorios.Click += new System.EventHandler(this.btnAcessorios_Click);
            // 
            // btnVeiculos
            // 
            this.btnVeiculos.Location = new System.Drawing.Point(12, 12);
            this.btnVeiculos.Name = "btnVeiculos";
            this.btnVeiculos.Size = new System.Drawing.Size(183, 63);
            this.btnVeiculos.TabIndex = 3;
            this.btnVeiculos.Text = "VEÍCULOS";
            this.btnVeiculos.UseVisualStyleBackColor = true;
            this.btnVeiculos.Click += new System.EventHandler(this.btnVeiculos_Click);
            // 
            // btnRelatorio
            // 
            this.btnRelatorio.Location = new System.Drawing.Point(12, 81);
            this.btnRelatorio.Name = "btnRelatorio";
            this.btnRelatorio.Size = new System.Drawing.Size(183, 64);
            this.btnRelatorio.TabIndex = 6;
            this.btnRelatorio.Text = "RELATORIO";
            this.btnRelatorio.UseVisualStyleBackColor = true;
            // 
            // btnClientes
            // 
            this.btnClientes.Location = new System.Drawing.Point(202, 82);
            this.btnClientes.Name = "btnClientes";
            this.btnClientes.Size = new System.Drawing.Size(183, 63);
            this.btnClientes.TabIndex = 7;
            this.btnClientes.Text = "CLIENTES";
            this.btnClientes.UseVisualStyleBackColor = true;
            this.btnClientes.Click += new System.EventHandler(this.btnClientes_Click);
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(397, 222);
            this.Controls.Add(this.btnClientes);
            this.Controls.Add(this.btnRelatorio);
            this.Controls.Add(this.btnSair);
            this.Controls.Add(this.btnAcessorios);
            this.Controls.Add(this.btnVeiculos);
            this.Name = "Form2";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Form2";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button btnSair;
        private System.Windows.Forms.Button btnAcessorios;
        private System.Windows.Forms.Button btnVeiculos;
        private System.Windows.Forms.Button btnRelatorio;
        private System.Windows.Forms.Button btnClientes;
    }
}