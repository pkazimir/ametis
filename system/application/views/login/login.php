<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url() ?>"> 
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<title>Ametis</title>
</head>

<body>
<div id="LoginWrap">
	<div id="LoginLogo">
    	<img alt="" src="images/login/logo.png" title="Logo Tooltip Text" />
    </div><!--LoginLogo-->
    <div id="LoginBody">
    	<label>Username:</label><br/>
        <input type="text" name="txtUsername" /><br/>
        <label>Password:</label><br/>
        <input type="password" name="txtPassword" /><br/>
        <input type="button" name="btnLogin" value="Login" />        
    </div><!--LoginBody-->
</div><!--LoginWrap-->
</body>
</html>
