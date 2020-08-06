<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Filmes.aspx.cs" Inherits="ElaboracaoExercicios.WebForm2" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <% 
        Response.Write("<p style='text-align:left; padding-top:5px; color:#ff0000;'>Olá " + Request.QueryString["nome_usuario"] + " <a href='login.aspx?logout=true'>(sair)</a></p>");
    %>
    <form id="form1" runat="server">
        <div>

            <asp:Label ID="Label1" runat="server" Text="ID:"></asp:Label>
            <br />
            <asp:TextBox ID="txtID" runat="server" Enabled="False"></asp:TextBox>
            <br />
            <asp:Label ID="Label2" runat="server" Text="Nome do filme:"></asp:Label>
            <br />
            <asp:TextBox ID="txtNomeFilme" runat="server" Width="356px"></asp:TextBox>
            <br />
            <asp:Label ID="Label3" runat="server" Text="Gênero:"></asp:Label>
            <br />
            <asp:DropDownList ID="drpGenero" runat="server" Width="165px">
            </asp:DropDownList>
            <br />
            <br />
            <asp:Label ID="Label4" runat="server" Text="Classificação Etária:"></asp:Label>
            <br />
            <asp:RadioButton ID="rdb10" runat="server" Text="10" GroupName="grpClassificacao" />
            &nbsp;<asp:RadioButton ID="rdb12" runat="server" Text="12" GroupName="grpClassificacao" />
            &nbsp;<asp:RadioButton ID="rdb14" runat="server" Text="14" GroupName="grpClassificacao" />
            &nbsp;<asp:RadioButton ID="rdb16" runat="server" Text="16" GroupName="grpClassificacao" />
            <asp:RadioButton ID="rdb18" runat="server" Text="18" GroupName="grpClassificacao" />
            &nbsp;<asp:RadioButton ID="rdbER" runat="server" Text="ER" GroupName="grpClassificacao" />
            &nbsp;<asp:RadioButton ID="rdbL" runat="server" Text="L" GroupName="grpClassificacao" />
            <br />
            <br />
            <asp:Label ID="Label5" runat="server" Text="Sinopse:"></asp:Label>
            <br />
            <asp:TextBox ID="txtSinopse" runat="server" Height="68px" TextMode="MultiLine" Width="309px"></asp:TextBox>
            <br />
            <br />
            <asp:Label ID="Label6" runat="server" Text="Data de Lançamento:"></asp:Label>
            <br />
            <asp:TextBox ID="txtDtLancamento" runat="server"  Width="147px"></asp:TextBox>
            &nbsp;
        <br />
            <br />
            <asp:Button ID="btnAdicionar" runat="server" BackColor="#CCFFFF" OnClick="btnAdicionar_Click" Text="Adicionar à lista:" Width="155px" />
            &nbsp;<asp:Button ID="btnDescartar" runat="server" OnClick="btnDescartar_Click" Text="Descartar" Width="147px" />
            <asp:Button ID="btnSalvar" runat="server" OnClick="btnSalvar_Click" Text="Salvar" Width="129px" />
&nbsp;<br />
            <br />
            <br />
            <asp:GridView ID="gridFilmes" runat="server" OnSelectedIndexChanged="gridFilmes_SelectedIndexChanged" Width="636px">
                <Columns>
                    <asp:CommandField ButtonType="Button" EditText="Editar" InsertText="Editar" SelectText="Editar" ShowSelectButton="True" />
                </Columns>
            </asp:GridView>
            <br />
            <br />
            <asp:Panel ID="pnlResultados" runat="server" BorderStyle="Groove" Width="634px">
                <asp:Label ID="Label7" runat="server" Text="Lista de Filmes:"></asp:Label>
                <br />
                <asp:ListBox ID="lstFilmes" runat="server" Width="303px"></asp:ListBox>
                <br />
                <br />
                <asp:Label ID="Label8" runat="server" Text="Quantidade de filmes proibidos para menores: "></asp:Label>
                <asp:Label ID="lblQtProibidos" runat="server" Text="0"></asp:Label>
            </asp:Panel>
            <br />

        </div>
    </form>
</body>
</html>

