<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Ametis</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<base href="<?php echo base_url() ?>">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/delivery.css">
<link rel="stylesheet" type="text/css" href="css/breakfast.css">
<link rel="stylesheet" type="text/css" href="css/files.css">
<link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css">
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.PrintArea.js"></script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" bgcolor="#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
    <td rowspan="3" width="100" background="images/logo_left_line.jpg" valign="top" class="menu_text_user">
    &nbsp;&nbsp;<b>user:</b> </td>
    <td rowspan="3" width="218" background="images/logo_left_line.jpg"><img src="images/logo_bottom_beta.jpg"></td>
    <td background="images/top.JPG" height="20" align="right"></td>
</tr>
<tr height="5">
    <td bgcolor="#EF6220"></td>
</tr>
<tr>
    <td bgcolor="#253242" valign="top">
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
        <td width="100" height="107"></td>
        <td valign="middle">&nbsp;</td>
        <td valign="top" align="right">
        <!--  Buttons START -->
        <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <?php foreach($laMenuItems as $laMenuItem):?>
            <td background="images/button_left.JPG" width="4" height="25"
                onMouseOver="this.style.cursor='pointer'"></td>
            <td id="a" background="images/button_bg.JPG"
                width="80" align="center"
                class="menu_text"><a class="anchor_menu" href="<?php echo site_url('ametis/'.$laMenuItem->module) ?>"><?php echo $laMenuItem->module_name ?></td>
            <td background="images/button_right.JPG" width="4" height="25"></td>
            <td width="5"></td>
            <?php endforeach;?>
<!-------------------------------------- //LOGOUT -------------------------------->
            <td width="10"></td>
            <td background="/button_left.JPG" width="4" height="24"
                onMouseOver="this.style.cursor='pointer'"></td>
            <td id="a" background="images/button_bg.JPG" width="80" align="center" 
                class="menu_text"
                onClick="self.location.href=''"
                onMouseOver="this.style.cursor='pointer'; this.style.color='White'"
                onMouseOut="this.style.color='#253242'"
                >LOGOUT</td>
            <td background="images/button_right.JPG" width="4" height="25"
                onMouseOver="this.style.cursor='pointer'"
            ></td>
<!-------------------------------------- //LOGOUT -------------------------------->
            <td width="30"></td>
        </tr>
        </table>
        <!--  Buttons END -->
        </td>
    </tr>
    </table>
    </td>
</tr>
</table>
<br>
<center>