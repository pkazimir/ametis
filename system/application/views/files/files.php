<table cellpadding="5" cellspacing="0" border="0" width="900">
<tr>
    <td valign="top">
        
        <!-- ADD FILE -->
        <table cellpadding="0" cellspacing="2" border="0" align="center">
        <tr>
            <td class="main_font add_form">1.&nbsp;</td>
            <td class="add_form main_font">

                <?php
                if ($liUploadStatus == 1) echo "failed..";
                if ($liUploadStatus == 2) echo "good!";
                if ($liUploadStatus == 3) echo "exists!";
                ?>
            
                <?php echo form_open_multipart('ametis/uploadFiles');?>
            
                <b>Choose file:</b>
                
                <input type="file" name="userfile" size="30" class="add_file_input_text" />

                
            </td>
        </tr>
        <tr>
            <td class="main_font add_form">2.&nbsp;</td>
            <td class="add_form">
                <span class="main_font"><b>Set file info:</b></span>
                <input name="info" type="text" size="40" class="add_file_input_text">
            </td>
        </tr>
        <tr>
            <td class="main_font add_form">3.&nbsp;</td>
            <td class="add_form main_font" align="center">
                <input type="submit" value="upload" class="search_button" />
                </form>
            </td>
        </tr>
        </table>
        
        <br>
        
        <form action="index.php" method="get" enctype="multipart/form-data" name="main_form">
        <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td width="206"><!-- FILENAME -->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="6" height="29" background="images/files/header_border_left.JPG"></td>
                    <td width="200" background="images/files/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;&nbsp;Filename</td>
                    
                </tr>
                </table>
            </td>
            <td><!-- INFO -->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>            
                    <td width="100%" background="images/files/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;&nbsp;Info</td>
                    <td width="6" height="29" background="images/files/header_border_bg.JPG"></td>
                </tr>
                </table>
            </td>
            <td width="130"><!-- DATE -->
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr>    
                    <td width="100" background="images/files/header_border_bg.JPG" class="header_text" align="center">Date</td>
                    <td width="6" height="29" background="images/files/header_border_right.JPG"></td>
                </tr>
                </table>
            </td>
            <!-- EDIT button -->
            <td width="25"></td>
        </tr>
        <?php
        $i = 0;
        foreach($laFiles as $laFile):
        ?>
        <tr <?php if ($i % 2) echo 'bgcolor="#f4f1f0"'; $i++ ?>>
            <td class="body_text"><div class="filename"><a href="uploads/<?php echo $laFile['name'] ?>"><?php echo $laFile['name'] ?></a></div></td>
            <td class="body_text"><?php echo $laFile['info'] ?></td>
            <td class="body_text"><?php echo date("d. F Y", strtotime($laFile['date'])) ?></td>
            <td align="center"><a href="<?php echo site_url(array('ametis', 'deleteFile', $laFile['id_file'], $laFile['name'])); ?>" class="edit_delete_button"><img src="images/breakfast/b_drop.png" border="0"></a></td>
        </tr>
        <?php endforeach; ?>
        </table>
        </form>
    </td>
    
    <!-- RIGHT SIDE -->
    
    <td width="185" valign="top">
        
        <!-- SEARCH -->
        <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td width="6" height="29" background="images/files/header_border_left.JPG"></td>
            <td width="170" background="images/files/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;&nbsp;Search</td>
            <td width="6" background="images/files/header_border_right.JPG"></td>
        </tr>
        </table>

        <!-- SEARCH form -->
        <table cellpadding="3" cellspacing="0" border="0">
        <tr>
            <td width="174" class="search_form" align="center">
            <form action="<?php echo site_url(array('ametis', 'showFiles')); ?>" enctype="multipart/form-data" method="post">
            <input type="text" size="15" class="search_input" name="keyword" value="<?php echo $lsKeyword ?>"><input type="submit" value="OK" class="search_button">
            </form>
            </td>
        </tr>
        </table>
    </td>
</tr>
</table>