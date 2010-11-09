<table cellpadding="5" cellspacing="0" border="0" width="950">
<tr>
    
    <!-- MENU -->
    
    <td valign="top" width="182" align="left">
        <!-- MENU -->
        <table cellpadding="0" cellspacing="0" border="0" width="182">
        <tr>
            <td width="6" height="29" background="images/breakfast/header_border_left.JPG"></td>
            <td width="170" background="images/breakfast/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;Breakfast</td>
            <td width="6" background="images/breakfast/header_border_right.JPG"></td>
        </tr>
        </table>
        <!-- -->
        <table cellpadding="3" cellspacing="0" border="0" width="182">
        <form action="<?php echo site_url('ametis/saveBreakfast'); ?>" enctype="multipart/form-data" method="post">
        <tr>
            <td width="174" class="menu_bg_border">
            <!-- ENTER BF INFO TABLE -->
            <table cellpadding="5" cellspacing="0" border="0">
            <tr>
                <td class="main_font">Room:</td>
                <td>
                <select name="bfroom" class="input_text">
                    <?php foreach($laRooms as $id => $laRoom): ?>
                    <option size="100" value="<?php echo $id ?>" <?php if($laBfEditData && $id == $laBfEditData->id_room) echo 'selected' ?>><?php echo $laRoom ?></option>
                    <?php endforeach; ?>
                </select>
                </td>
            </tr>
            <tr>
                <td class="main_font">Name:</td>
                <td><input type="text" size="12" name="bfname" class="input_text" value="<?php if ($laBfEditData) echo $laBfEditData->guestname ?>"></td>
            </tr>
            <tr>
                <td class="main_font">Wakeup:</td>
                <td><input type="text" maxlength="5" size="5" name="bfwakeup" class="input_text" value="<?php if ($laBfEditData) echo $laBfEditData->wakeup ?>"></td>
            </tr>
            <tr>
                <td class="main_font">BF time:</td>
                <td><input type="text" maxlength="5" size="5" name="bftime" class="input_text" value="<?php if ($laBfEditData) echo $laBfEditData->bftime ?>"></td>
            </tr>
            <tr>
                <td class="main_font" colspan="2">
                BF info:
                <center>
                <textarea id="bfinfo" cols="23" rows="4" wrap="soft" style="font-size: 11px; font-family: arial" name="bfinfo" class="input_text"><?php if ($laBfEditData) echo $laBfEditData->info ?></textarea>
                </center>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                <input type="submit" value="Add request!" class="button_orange">
                </td>
            </tr>
            </table>
            </td>
        </tr>
        </form>
        </table>
    </td>
    
    <!-- BODY -->
    
    <td valign="top" width="750">
    <table cellspacing="0" cellpadding="0" border="0" width="750">
    <tr>
        <td class="main_font" align="center" width="60">
            <table cellpadding="0" cellspacing="0" border="0" width="60">
            <tr>
                <td width="6" height="29" background="images/breakfast/header_border_left.JPG"></td>
                <td width="54" background="images/breakfast/header_border_bg.JPG" class="header_text" align="center">Room</td>
            </tr>
            </table>
        </td>
        <td align="center" width="170">
            <table cellpadding="0" cellspacing="0" border="0" width="170">
            <tr>
                <td width="6" height="29" background="images/breakfast/header_border_bg.JPG"></td>
                <td width="164" background="images/breakfast/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;Name</td>
            </tr>
            </table>
        </td>
        <td align="center" width="70">
            <table cellpadding="0" cellspacing="0" border="0" width="70">
            <tr>
                <td width="6" height="29" background="images/breakfast/header_border_bg.JPG"></td>
                <td width="58" background="images/breakfast/header_border_bg.JPG" class="header_text" align="center">Wakeup</td>
                <td width="6" height="29" background="images/breakfast/header_border_bg.JPG"></td>
            </tr>
            </table>
        </td>
        <td align="center" width="70">
            <table cellpadding="0" cellspacing="0" border="0" width="70">
            <tr>
                <td width="6" height="29" background="images/breakfast/header_border_bg.JPG"></td>
                <td width="58" background="images/breakfast/header_border_bg.JPG" class="header_text" align="center">BF time</td>
                <td width="6" height="29" background="images/breakfast/header_border_bg.JPG"></td>
            </tr>
            </table>
        </td>
        <td class="add_font" align="center">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
            <tr>
                <td width="6" height="29" background="images/breakfast/header_border_bg.JPG"></td>
                <td background="images/breakfast/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;BF Info</td>
                <td width="6" background="images/breakfast/header_border_right.JPG"></td>
            </tr>
            </table>
        </td>
        <td width="25"></td>
        <td width="25"></td>
    </tr>
    
    <?php $i=1; foreach($laBfInfo as $loBfInfo): ?>
    <tr <?php if (($i % 2) == 0) echo "bgcolor=\"#F4F1F0\""; $i++ ?>>        
        <td valign="top" align="center">
            <table border="0" cellspacing="3"><tr><td class="main_font">
            <b><?php echo $loBfInfo->room ?></b>
            </td></tr></table>
        </td>
        <td valign="top" class="main_font">
            <table border="0" cellspacing="3"><tr><td class="main_font">
            <?php echo $loBfInfo->guestname ?>
            </td></tr></table>
        </td>
        <td valign="top" align="center" class="main_font">
            <table border="0" cellspacing="3"><tr><td class="main_font">
            <?php echo $loBfInfo->wakeup ?>
            </td></tr></table>
        </td>
        <td valign="top" align="center" class="main_font">
            <table border="0" cellspacing="3"><tr><td class="main_font">
            <?php echo $loBfInfo->bftime ?>
            </td></tr></table>
        </td>
        <td valign="top">
            <table cellpadding="0" cellspacing="3" border="0"> <!-- pre zlepsenie vypisu / visual tweak -->
                <tr>
                <td width="10"></td>
                <td class="main_font"><?php echo $loBfInfo->info ?></td>
            </tr>
            </table>
        </td>
        <td align="center"><a href="<?php echo site_url(array('ametis', 'editBreakfast', $loBfInfo->id)); ?>" class="edit_delete_button"><img src="images/breakfast/b_edit.png" border="0"></a></td>
        <td align="center"><a href="<?php echo site_url(array('ametis', 'deleteBreakfast', $loBfInfo->id)); ?>" class="edit_delete_button"><img src="images/breakfast/b_drop.png" border="0"></a></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="7" align="center" height="30"></td>
    </tr>
    <tr>
        <td colspan="5" align="center" class="main_font">
            <div style="cursor: pointer; color: #253242;" onmouseover="this.style.color='#ff7000'" onmouseout="this.style.color='#253242'" id="print_button" class="print_button"><b>print</b> <img src="images/print.png" align="center" border="0"></div>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    </table>
    </td>
</tr>
</table> 

<!-- PAPER FOR PRINTING -->
<div id="myPrintArea" style="display: none;">

    <table cellpadding="0" cellspacing="0" border="0" align="center">
    <tr>
        <td class="print_list_header">Wake up call &amp; Breakfast check list</td>
        <td width="200"></td>
        <td class="print_list_header"><?php $datum = getdate(); echo $datum["mday"].".".$datum["month"]." ".$datum["year"] ?></td>
    </tr>
    </table>
    <br>
    <table cellpadding="3" cellspacing="0" align="center" border="0" width="600">
    <tr>
        <td align="center" class="print_header print_b_l2 print_b_t2 print_b_b2 print_b_r2" width="50">Room</td>
        <td align="center" class="print_header print_b_l0 print_b_t2 print_b_b2 print_b_r2" width="150">Name</td>
        <td align="center" class="print_header print_b_l0 print_b_t2 print_b_b2 print_b_r2" width="50">Wakeup</td>
        <td align="center" class="print_header print_b_l0 print_b_t2 print_b_b2 print_b_r2">BF Info</td>
        <td align="center" class="print_header print_b_l0 print_b_t2 print_b_b2 print_b_r2" width="50">Taxi</td></td>
    </tr>
    <?php 
    foreach ($laBfInfo as $loBfInfo) {
        $data[$loBfInfo->id]['guestname'] = $loBfInfo->guestname;
        $data[$loBfInfo->id]['wakeup'] = $loBfInfo->wakeup;
        $data[$loBfInfo->id]['bftime'] = $loBfInfo->bftime;
        $data[$loBfInfo->id]['info'] = $loBfInfo->info;
    }

    foreach($laRooms as $id => $laRoom): ?>
    <tr>
        <!-- ROOM NUMBER -->
        <td class="print_header print_b_l2 print_b_t0 print_b_b2 print_b_r2" align="center">
            <?php echo $laRoom ?>
        </td>
        <!-- NAME -->
        <td class="print_main_font print_b_l0 print_b_t0 print_b_b print_b_r" align="center">
            <?php if (isset($data[$id]['guestname']) && $data[$id]['guestname'] != '') echo $data[$id]['guestname']; else echo "&nbsp;"; ?>
        </td>
        <!-- WAKEUP -->
        <td class="print_main_font print_b_l0 print_b_t0 print_b_b print_b_r" align="center">
            <?php if (isset($data[$id]['wakeup']) && $data[$id]['wakeup'] != '') echo $data[$id]['wakeup']; else echo "&nbsp;"; ?>
        </td>
        <!-- BFINFO -->
        <td class="print_main_font print_b_l0 print_b_t0 print_b_b print_b_r">
            <?php 
            if ((isset($data[$id]['bftime']) && $data[$id]['bftime'] != '') || (isset($data[$id]['info']) && $data[$id]['info'] != ''))
                echo "<b>".$data[$id]['bftime']."</b> - ".$data[$id]['info'];
            else
                echo "&nbsp;";
            ?>
        </td>
        <!-- TAXI -->
        <td class="print_b_l0 print_b_t0 print_b_b print_b_r">&nbsp;</td>
    </tr>
    <?php endforeach; ?>
    </table>

</div>

<script>
$("div#print_button").click(function(){
    $("div#myPrintArea").printArea();
});
</script>