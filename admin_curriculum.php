<button class="btn btn-default" style="float: right; width: 70px;" ><a href="admin_index.php">HOME</a></button>
<style type="text/css">
	


/*td
{
 FONT-FAMILY: Arial; 
 FONT-SIZE: 10pt; 
 
}*/

/*br.page */
.page 
{ 
	page-break-before: always; 
}


/* report */
.report_body
{
    /*FONT-SIZE: 8pt;*/
    COLOR: black;
    FONT-FAMILY: Arial,Tahoma,'Luxi Sans',Helvetica;
    FONT-STYLE: normal;
    VERTICAL-ALIGN: top
/*
    TEXT-TRANSFORM:capitalize; 
	MARGIN-LEFT: 4px;
	MARGIN-RIGHT: 5px;
	MARGIN-TOP: 5px; 
	MARGIN-BOTTOM: 5px
*/	
}

.company_name
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 14pt;
    COLOR: black;
    FONT-FAMILY: Arial,Tahoma,'Luxi Sans',Helvetica;
    FONT-STYLE: normal;
    TEXT-ALIGN: center;
    VERTICAL-ALIGN: top;
    TEXT-TRANSFORM: uppercase;
    LINE-HEIGHT: 1px
}

.company_address
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 11pt;
    COLOR: black;
    FONT-FAMILY: Arial,Tahoma,'Luxi Sans',Helvetica;
    FONT-STYLE: normal;
    TEXT-ALIGN: center;
    VERTICAL-ALIGN: top;
    LINE-HEIGHT: 1px
}

.report_name
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 12pt;
    COLOR: black;
    FONT-FAMILY: Arial,Tahoma,'Luxi Sans',Helvetica;
    FONT-STYLE: normal;
    TEXT-ALIGN: center;
    VERTICAL-ALIGN: top;
    LINE-HEIGHT: 1px
}

.subtitle
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 9pt;
    COLOR: black;
    FONT-FAMILY: Arial,Tahoma,'Luxi Sans',Helvetica;
    FONT-STYLE: normal;
    TEXT-ALIGN: center;
    VERTICAL-ALIGN: top;
    LINE-HEIGHT: 1px
}

/* Style for data grid */
.report_table
{
	BORDER-COLLAPSE: collapse;
	BORDER-COLOR: #111111;
    FONT-SIZE: 9pt;
    COLOR: black;
    FONT-FAMILY: Arial,Tahoma,'Luxi Sans',Helvetica;
}

.report_td
{
	TEXT-ALIGN: center;
    FONT-WEIGHT: bold;
    FONT-SIZE: 9pt;
	FONT-FAMILY: Arial,Tahoma,'Luxi Sans',Helvetica;
    COLOR: black;
    BORDER: thin dashed;
}	

.report_td_amount
{
    TEXT-ALIGN: right;
}	

/* =================== Added new styles ========================= */
/*	ADDED BY: Petronilo O. Montejo Jr.,  October 4, 2005
	DESCRIPTION: 
	These are the default style used in displaying reports
*/
/*  	STYLES

	.col_hdr_nbl		 Header column No border bold 	left align
	.col_hdr_bl		 Header column with border bold 	left align
	.col_hdr_l		 Header column with border 	left align
	.col_hdr_nl		 Header column No border 		left align
	.col_hdr_lrl		 Header column left right border 	left align
	.col_hdr_tbl		 Header column top bottom border left align
	.col_hdr_bottoml	 Header column bottom border 	left align
	.col_hdr_topl		 Header column top border 		left align
	.col_hdr_rlbl		 Header column right left botom border left align


*/
/*===========================================================================================================================================*/
/*	HEADER   =============================================================================================================================*/
/*===========================================================================================================================================*/

	/*=====================================*/
	/*@@@@@Left Align Column Header		*/
	/*=====================================*/
	.col_hdr_nbl
	{	FONT-WEIGHT: bold;FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;		}
	.col_hdr_bl
	{	FONT-WEIGHT: bold;FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid; BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid    	}
	.col_hdr_l
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;  TEXT-ALIGN: left;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid;BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid    		}
	.col_hdr_nl
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;	}
	.col_hdr_lrl
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_hdr_tbl
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid	}
	.col_hdr_bottoml
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-BOTTOM: thin solid	}
	.col_hdr_topl
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-TOP: thin solid	}
	.col_hdr_rlbl
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-RIGHT: thin solid;BORDER-LEFT: thin solid; BORDER-BOTTOM: thin solid	}
	

	/*=====================================*/
	/*@@@@@Center Align Column Header	*/
	/*=====================================*/
	.col_hdr_nbc
	{	FONT-WEIGHT: bold;FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;		}
	.col_hdr_bc
	{	FONT-WEIGHT: bold;FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid; BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid    	}
	.col_hdr_c
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;  TEXT-ALIGN: center;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid;BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid    		}
	.col_hdr_nc
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;	}
	.col_hdr_lrc
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_hdr_tbc
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid	}
	.col_hdr_bottomc
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-BOTTOM: thin solid	}
	.col_hdr_topc
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-TOP: thin solid	}
	.col_hdr_rlbc
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-RIGHT: thin solid;BORDER-LEFT: thin solid; BORDER-BOTTOM: thin solid	}

	/*=====================================*/
	/*@@@@@Right Align Column Header	*/
	/*=====================================*/
	.col_hdr_nbr
	{	FONT-WEIGHT: bold;FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;		}
	.col_hdr_br
	{	FONT-WEIGHT: bold;FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid; BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid    	}
	.col_hdr_r
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;  TEXT-ALIGN: right;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid;BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid    		}
	.col_hdr_nr
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;	}
	.col_hdr_lrr
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_hdr_tbr
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid	}
	.col_hdr_bottomr
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-BOTTOM: thin solid	}
	.col_hdr_topr
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-TOP: thin solid		}	
	.col_hdr_rlbr
	{	FONT-SIZE: 8pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-RIGHT: thin solid;BORDER-LEFT: thin solid; BORDER-BOTTOM: thin solid	}


/*===========================================================================================================================================*/
/*	DETAILS   =============================================================================================================================*/
/*===========================================================================================================================================*/
	/*=====================================*/
	/*@@@@@Left Align Column Details		*/
	/*=====================================*/
	.col_detl_nbl
	{	FONT-WEIGHT: bold;FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;		}
	.col_detl_bl
	{	FONT-WEIGHT: bold;FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-TOP: thin solid;BORDER-BOTTOM: thin solid; BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_detl_l
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-TOP: thin solid;BORDER-BOTTOM: thin solid; BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_detl_nl
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;		}
	.col_detl_lrl
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_detl_tbl
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid	}
	.col_detl_bottoml
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-BOTTOM: thin solid	}
	.col_detl_topl
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-TOP: thin solid	}
	.col_detl_rlbl
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: left;BORDER-RIGHT: thin solid;BORDER-LEFT: thin solid; BORDER-BOTTOM: thin solid	}

	/*=====================================*/
	/*@@@@@Right Align Column Details			*/
	/*=====================================*/
	.col_detl_nbr
	{	FONT-WEIGHT: bold;FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;		}
	.col_detl_br
	{	FONT-WEIGHT: bold;FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-TOP: thin solid;BORDER-BOTTOM: thin solid; BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_detl_r
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-TOP: thin solid;BORDER-BOTTOM: thin solid; BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_detl_nr
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;		}
	.col_detl_lrr
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_detl_tbr
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid	}
	.col_detl_bottomr
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-BOTTOM: thin solid	}
	.col_detl_topr
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-TOP: thin solid	}
	.col_detl_rlbr
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: right;BORDER-RIGHT: thin solid;BORDER-LEFT: thin solid; BORDER-BOTTOM: thin solid	}

	/*=====================================*/
	/*@@@@@Center Align Column Details		*/
	/*=====================================*/
	.col_detl_nbc
	{	FONT-WEIGHT: bold;FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;		}
	.col_detl_bc
	{	FONT-WEIGHT: bold;FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-TOP: thin solid;BORDER-BOTTOM: thin solid; BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid	}
	.col_detl_c
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-TOP: thin solid;BORDER-BOTTOM: thin solid; BORDER-LEFT: thin solid; BORDER-RIGHT: thin solid	}
	.col_detl_nc
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;		}
	.col_detl_lrc
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-RIGHT: thin solid; BORDER-LEFT: thin solid	}
	.col_detl_tbc
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-TOP: thin solid; BORDER-BOTTOM: thin solid	}
	.col_detl_bottomc
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-BOTTOM: thin solid	}
	.col_detl_topc
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-TOP: thin solid	}
	.col_detl_rlbc
	{	FONT-SIZE: 7pt;COLOR: black;FONT-FAMILY: Arial;FONT-STYLE: normal;TEXT-ALIGN: center;BORDER-RIGHT: thin solid;BORDER-LEFT: thin solid; BORDER-BOTTOM: thin solid	}

	
/* =================== new styles End Here========================= */


</style>



<html><link rel="stylesheet" href="../report.css" type="text/css"><body  class="report_body"><h2 align="center">
	<span class="report_name" 		style="FONT-SIZE: 10pt;FONT-FAMILY: Times New Roman;"></span></h2><br><table align="center" width="780" border="0" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><H1 align="CENTER"><span class="subtitle" style<="FONT-SIZE: 10pt;FONT-FAMILY: Times New Roman;">CURRICULUM</span></H1><H1 align="CENTER"><span class="subtitle" style

		<="FONT-SIZE: 10pt;FONT-FAMILY: Times New Roman;">Bachelor of Science in Computer Engineering (BS COE_URD_N 2009)</span></H1></td></tr></table><br><br>




<table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111">
		<tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;First Year , 1st Semester</td></tr>

<tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>
<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ MATH 112/URD_ MATH 112&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Plane & Spherical Trigonometry&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CHEM 1 LAB/CHEM 1 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;General Chemistry 1, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CHEM 1 LEC/CHEM 1 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;General Chemistry 1, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_DRAW 1 LAB/DRAW 101/URD_DRAW 1 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Engineering Drawing 1 Lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ENGL 111/ENGL 101&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Study and Thinking Skills&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 111/MATH 111&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;College Algebra&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 111&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_NSTP 1/NSTP 101&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;CWTS/ROTC/LTS1&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;0.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PE 1/PE 101&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Physical Fitness&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PIL 111/PIL 111&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Komunikasyon sa Akademikong Pilipino&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_SOC SCI 1/SOCSCI 1/URD_SOC SCI 1&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Politics and Governance w/ Philippine Constitution&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>
</table><br><br>



<table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;First Year , 2nd Semester
</td>
<tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>


<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ MATH 121/MATH 121&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Advance Algebra&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>


</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 121/CPE 121&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Hardware Fundamentals&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>


</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ENGL 122/ENG 122&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Writing in the Displine&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ENGL 111&nbsp;</td>


</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_HUM 121/HUM 1&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Art Appreciation and Aesthetics&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>


</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 122/MATH 122&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Analytic Geometry&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;4.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ MATH 112,URD_MATH 111&nbsp;</td>


</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 123/MATH 123&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Solid Mensuration&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ MATH 112,URD_MATH 111&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_NSTP 2/NSTP 2 URD&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;ROTC 2/CWTS/LTS 2&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;0.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_NSTP 1&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PE 2/PE 102 URD&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Rhythmic Activities&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PIL 122/URD_FIL 102&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Pagbasa at Pagsulat Tungo sa Pananaliksik&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PIL 111&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_SOCSCI 2/SOC.SCI.2/URD_SOCSCI 2&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Industrial Psychology&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Second Year , 1st Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_COMP 1 LAB/COMP 1&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Fundamentals and Programming lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ENGL 211/ENG. 211&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Technical Communication&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>
<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ENGL 122&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_HUM 211&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Logic&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 211/MATH 211&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Differential Calculus&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;5.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ MATH 121,URD_MATH 122,URD_MATH 123&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PE 3/URD_PE 3&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Individual/Dual Sports and Games&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>


</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PHYS 211LAB/PHYS 211L&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;College Physics 1, Lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PHYS 211LEC/PHYS 211&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;College Physics 1, Lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ MATH 112,URD_MATH 111&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_SOC SCI 3/SOC SCI 3&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Society and Culture with Family Planning&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_SOC SCI 4/SOC. SCI. 4&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Life, Works and Writings of Rizal&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Second Year , 2nd Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221 LEC/CPE 221LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Data Structures and Algorithm Analysis, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 121&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221LAB/CPE 221LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Data Structures and Algorithm Analysis, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 121&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_HUM 223/HUM 3&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Social Philosophy&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 221/URD_MATH 221&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Integral Calculus&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;5.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 211&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PE 4/URD_PE 4&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Team Sports&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PHYS 221LAB/PHYS 221LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;College Physics 2, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PHYS 211LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PHYS 221LEC/PHYS 221LEC/URD_PHYS 221LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;College Physics 2, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_PHYS 211LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_SOCSCI 104/SOC SCI 5&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Basic Economics w/ Land Reform&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr><
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_STAT 1/STAT 1/URD_STAT 1&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Probability & Statistics&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ MATH 112,URD_ MATH 121&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Third Year , 1st Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_COMP 2 LAB/URD_COMP 2 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Aided Drafting, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_COMP 2 LEC/URD_COMP 2 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Aided Drafting&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LAB/URD_CPE 311 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Systems Org. w/ Assembly Language, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LEC/URD_CPE 311 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Systems Org. w/ Assembly Language, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 312/URD_CPE 312&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Discrete Mathematics&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 111&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 311 LAB/URD_EE 311 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Circuits 1&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 221,URD_PHYS 221LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 311 LEC/URD_EE 311 LEC/URD_EE 311&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Circuits 1&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 221,URD_PHYS 221LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE312COELAB/URD_EE312COELAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Electronic Devices and Circuits, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 221,URD_PHYS 221LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE312COELEC/URD_EE312COELEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Electronic Devices and Circuits&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 221,URD_PHYS 221LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 311/URD_ES 311&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Static of Rigid Bodies&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 211,URD_PHYS 221LAB,URD_PHYS 221LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 312/URD_ES 312&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Engineering Economy&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 311/URD_MATH 311&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Differential Equations&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 211&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Third Year , 2nd Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 321/URD_CPE 321&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Advanced Engineering Mathematics for CpE&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_MATH 311&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 322/URD_CPE 322&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Engineering Drafting and Design&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 323 LAB/URD_CPE 323 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Logic Circuits and Switching Theory, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE312COELAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 323 LEC/URD_CPE 323 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Logic Circuits Switching Theory&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE312COELEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 321 LAB/URD_EE 321 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Circuits 2, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 311 LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 321 LEC/URD_EE 321 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Circuits 2, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 311 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 322 LAB/URD_EE 322 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Electronics Circuits Analysis and Design, Lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE312COELAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 322 LEC/URD_EE 322 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Electronics Circuits Analysis and Design, Lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE312COELEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 321/URD_ES 321&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Dynamic of Rigid Bodies&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 311&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 322/URD_ES 322&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Mechanics of Deformable Bodies&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;5.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 311&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 324/URD_ES 324&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Safety Management&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Fourth Year , 1st Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 411,LAB/URD_CPE 411,LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Advanced Logic Circuit, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 323 LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 411,LEC/URD_CPE 411,LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Advanced Logic Circuit, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 323 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 412,LAB/URD_CPE 412,LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Digital Signal Processing, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 321&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 412,LEC/URD_CPE 412,LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Digital Signal Processing, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 321&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 413/URD_CPE 413&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Principles of Communication&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 321 LAB,URD_EE 321 LEC,URD_EE 322 LAB,URD_EE 322 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 414 LAB/URD_CPE 414 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Control System, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 321 LAB,URD_EE 321 LEC,URD_EE 322 LAB,URD_EE 322 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 414 LEC/URD_CPE 414 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Control System, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_EE 321 LEC,URD_EE 322 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 323/URD_ES 323&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Environmental Engineering&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CHEM 1 LAB,URD_CHEM 1 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 411/URD_ES 411&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Engineering Management&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ES 312&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Fourth Year , 2nd Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 421 LAB/URD_CPE 421 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Operating Systems, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 421 LEC/URD_CPE 421 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Operating Systems, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 422 LEC/URD_CPE 422 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer System Architecture, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LEC,URD_CPE 411,LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 422LAB/URD_CPE 422LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer System Architecture, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LAB,URD_CPE 411,LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 423/URD_CPE 423&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Data Communications&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 413&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 424 LEC/URD_CPE 424 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Microprocessor System, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LEC,URD_CPE 323 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 424LAB/URD_CPE 424LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Microprocessor System, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 311 LAB,URD_CPE 323 LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ELEC 1, LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Database Management System, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ELEC 1, LEC/URD_ELEC 1, LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Database Management System&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Fourth Year , Summer</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_COE OJT/URD_COE OJT&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;On the Job - Training&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Fifth Year , 1st Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 511/URD_CPE 511&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Design Project 1 (Methods of Research)&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 424 LEC,URD_CPE 424LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 512,LAB/URD_CPE 512,LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Network, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 423&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 512,LEC/URD_CPE 512,LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Computer Network, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 423&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 513,LAB/URD_CPE 513,LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Object Oriented Programming, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 513,LEC/URD_CPE 513,LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Object Oriented Programming, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221 LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 514/URD_CPE 514&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Engineering Ethics and Computer Laws&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 515/URD_CPE 515&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Software Engineering&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221 LEC,URD_CPE 221LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ELEC 2 COE/URD_ELEC 2 COE&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Management and Information System&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr></td></tr></table><br><br><table align="center" width="1050" border="1" id="tblMain" cellpadding="0" cellspacing="1" class="report_table" bordercolor="#111111"><tr><td colspan="9" width="1050" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:LEFT">&nbsp;Fifth Year , 2nd Semester</td></tr><tr>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">CODE ( C)</td>
<td nowrap width="230" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">DESCRIPTION</td>
<td nowrap width="70" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">UNITS</td>

<td nowrap width="125" style="FONT-SIZE: 10pt; FONT-WEIGHT: BOLD; text-align:CENTER">PRE-REQUISITE / CO-REQUISITE</td>

<tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_ ELEC 3/URD_ ELEC 3&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Project Management&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_AC 111/URD_AC 111&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Entrepreneurship&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 522/URD_CPE 522&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Design Project 2 (Project Implementation)&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;2.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 511&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 523 LAB/URD_CPE 523 LAB&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;System Analysis an Design, lab&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221LAB,URD_CPE 513,LAB&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 523 LEC/URD_CPE 523 LEC&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;System Analysis an Design, lec&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;3.00&nbsp;</td>

<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 221 LEC,URD_CPE 513,LEC&nbsp;</td>

</tr><tr>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;URD_CPE 524/URD_CPE 524&nbsp;</td>
<td nowrap width="230" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:LEFT">&nbsp;Seminar and Field Trips&nbsp;</td>
<td nowrap width="70" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;1.00&nbsp;</td>


<td nowrap width="125" bgColor=""style="FONT-SIZE: 8pt;text-align:CENTER;text-align:CENTER">&nbsp;&nbsp;</td>
</tr>

</table>
</body>
</html>