using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using BLL;
using DTO;

namespace Sistema
{
    public partial class Página_Principal : System.Web.UI.Page
    {
        DTO.DTO objDTO = new DTO.DTO();
        BLL.BLL objBLL = new BLL.BLL();

        protected void Page_Load(object sender, EventArgs e)
        {

        }
    }
}