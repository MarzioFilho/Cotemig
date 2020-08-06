<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Login.aspx.cs" Inherits="ElaboracaoExercicios.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>

            <asp:Label ID="Label1" runat="server" Text="Usuário:"></asp:Label>
            <br />
            <asp:TextBox ID="txtUsuario" runat="server"></asp:TextBox>
            <br />
            <asp:Label ID="Label2" runat="server" Text="Senha:"></asp:Label>
            <br />
            <asp:TextBox ID="txtSenha" runat="server" TextMode="Password"></asp:TextBox>
            <br />
            <br />
            <asp:Button ID="btnEntrar" runat="server" Text="Entrar" Width="128px" OnClick="btnEntrar_Click" />
        </div>
    </form>
</body>
</html>
