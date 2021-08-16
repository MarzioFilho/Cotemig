<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="ProvaConta.aspx.cs" Inherits="Prova_F.ProvaConta" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link href="StyleSheet1.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h1>3ª Prova Trimestral de POO - F</h1>
            <asp:Label ID="lblIdConta" runat="server" CssClass="span" Text="ID da conta: " />
            <asp:TextBox ID="txtIdConta" runat="server" CssClass="textbox1" placeHolder="ID Conta: " />
            <br />
            <br />
            <asp:Label ID="lblNomeTitular" runat="server" CssClass="span" Text="Nome do Titular: " />
            <asp:TextBox ID="txtNome" runat="server" CssClass="textbox2" placeHolder="Nome do Titular" Width="293px" />
            <br />
            <br />
            <asp:Label ID="lblCPF" runat="server" CssClass="span" Text="CPF do Titular: " />
            <asp:TextBox ID="txtCPF" runat="server" CssClass="textbox1" placeHolder="CPF" />
            <br />
            <br />
            <asp:Label ID="lblTipoConta" runat="server" CssClass="span" Text="Tipo da conta: " />
            <asp:DropDownList ID="drpTipoConta" runat="server" CssClass="dropdownlist"></asp:DropDownList>
            <br />
            <br />
            <asp:Label ID="lblAgencia" runat="server" CssClass="span" Text="Número da Agência: " />
            <asp:TextBox ID="txtAgencia" runat="server" CssClass="textbox1" placeHolder="Agência" />
            <br />
            <br />
            <asp:Label ID="lblNumeroConta" runat="server" CssClass="span" Text="Número da Conta: " />
            <asp:TextBox ID="txtNConta" runat="server" CssClass="textbox1" placeHolder="Nº Conta" />
            <br />
            <br />
            <asp:Label ID="lblDtAbertura" runat="server" CssClass="span" Text="Data de abertura da conta: " />
            <asp:TextBox ID="txtDtAbertura" runat="server" CssClass="textbox1" placeHolder="Data de Abertura" />
            <br />
            <br />
            <asp:Button ID="btnGravar" runat="server" Text="Gravar" CssClass="button1" OnClick="btnGravar_Click" />
            &nbsp;<asp:Button ID="btnExcluir" runat="server" Text="Excluir" CssClass="button2" OnClick="btnExcluir_Click" />
            &nbsp;<asp:Button ID="btnLimpar" runat="server" Text="Limpar" CssClass="button3" OnClick="btnLimpar_Click" />

            <asp:GridView ID="gridConta" runat="server" OnSelectedIndexChanged="gridAlunos_SelectedIndexChanged" Width="398px">
                <Columns>
                    <asp:CommandField ButtonType="Button" SelectText="Editar" ShowSelectButton="True" />
                </Columns>
            </asp:GridView>
            <br />

        </div>
    </form>
</body>
</html>
