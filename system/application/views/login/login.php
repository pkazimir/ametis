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
    	<img alt="" src="images/login/logo.png" title="Ametis" />
        <a href="http://www.twitter.com/project_ametis" target="_blank"><img id="twitter_bird" src="images/login/bird_smile.png" alt="" onmouseover="twitter_msg.style.display='inline'" onmouseout="twitter_msg.style.display='none'" border="0"/></a>
        <img id="twitter_msg" src="images/login/twitter_message.png" alt="" style="display: none;" />
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
