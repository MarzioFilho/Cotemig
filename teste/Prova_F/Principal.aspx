<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Principal.aspx.cs" Inherits="Prova_F.Principal" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link href="StyleSheet1.css" rel="stylesheet" />
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <br />
            <h1>3ª Prova Trimestral POO - tipo F</h1>
            <br />
            <asp:Button ID="btnTipoConta" CssClass="button2" runat="server" Text="Tipos de Contas" Height="37px" Width="132px" OnClick="btnTipoConta_Click" />
            <br />
            <br />
            <asp:Button ID="btnConta" runat="server" CssClass="button3" Text="Contas" Width="133px" Height="39px" OnClick="btnConta_Click" />
            <br />
        </div>
    </form>
</body>
</html>
