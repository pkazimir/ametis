<style>
.over {
    background-color: #ffb882;
    cursor: pointer;
}

.clicked {
    background-color: #ef781e;
    cursor: pointer;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
    
    var laMyFood=new Array();
    
    $("tr#foodRecord").mouseover(function(){
        $(this).removeClass("out");
        $(this).addClass("over");
    });

    $("tr#foodRecord").mouseout(function(){
        if(!$(this).hasClass("clicked")){
            $(this).removeClass("over");
        }
    });
    
    $("tr#foodRecord").click(function(){
        if(!$(this).hasClass("clicked"))
        {
            $(this).addClass("clicked");
            $(this).find(".qty").css("visibility", "visible");
        }
        else
        {
            $(this).removeClass("clicked");
            $(this).find(".qty").css("visibility", "hidden");
        }
    });
});
</script>

<table cellpadding="5" cellspacing="0" border="0" width="927">
<tr>
    
    <!-- MENU -->
    
    <td valign="top" width="182" align="left">
        <!-- MENU -->
        <table cellpadding="0" cellspacing="0" border="0" width="182">
        <tr>
            <td width="6" height="29" background="images/breakfast/header_border_left.JPG"></td>
            <td width="170" background="images/breakfast/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;Delivery</td>
            <td width="6" background="images/breakfast/header_border_right.JPG"></td>
        </tr>
        </table>
        <!-- -->
        <table cellpadding="3" cellspacing="0" border="0" width="182">
        <tr>
            <td width="174" class="menu_bg_border">
            <!-- ENTER BF INFO TABLE -->
            <table cellpadding="5" cellspacing="0" border="0">
            <tr>
                <td class="main_font">Room:</td>
                <td>
                <select name="bfroom" class="input_text">
                    <?php foreach($laRooms as $id => $laRoom): ?>
                    <option size="100" value="<?php echo $id ?>"><?php echo $laRoom ?></option>
                    <?php endforeach; ?>
                </select>
                </td>
            </tr>
            <tr>
                <td class="main_font">Name:</td>
                <td><input type="text" size="13" name="bfname" class="input_text" value=""></td>
            </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td height="1"></td>
        </tr>
        </table>
        <table cellspacing="0" cellpadding="0" border="0" width="182">
        <tr>
            <td background="images/delivery/list_sum_left.JPG" width="6" height="27"></td>
            <td background="images/delivery/list_sum_bg.JPG" class="list_total" align="right"><span class="total">Total:</span> <?php echo "SUMA ,- &euro;"; ?></td>
            <td background="images/delivery/list_sum_right.JPG" width="6" height="27"></td>
        </tr>
        </table>
        <br><br>
        <center>
            <div class="main_font" style="cursor: pointer; color: #253242;" onmouseover="this.style.color='#ff7000'" onmouseout="this.style.color='#253242'" id="print_button" class="print_button"><b>print</b> <img src="images/print.png" align="center" border="0"></div>
        </center>
    </td>
    <td>
    <!-- BEGIN the_list -->
    <table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>
        <table border="0" cellspacing="0" cellpadding="0">
        <?php foreach($laFoodGroups as $idGroup => $laFoodGroup): ?>
        <tr><td>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
            <tr>
                <td width="6" height="29" background="images/breakfast/header_border_left.JPG"></td>
                <td width="100%" background="images/breakfast/header_border_bg.JPG" class="header_text">&nbsp;&nbsp;<?php echo $laFoodGroup ?></td>
                <td width="6" background="images/breakfast/header_border_right.JPG"></td>
            </tr>
            </table>
        </td></tr>
        <tr><td>
        <table cellpadding="2" cellspacing="0" width="100%">
            <?php
            $j = 0;
            foreach($laFood[$idGroup] as $idFood => $laFoodItem):
            ?>
            <tr id="foodRecord" class="fontik" <?php if (($j++ % 2) == 0) echo 'bgcolor="#F4F1F0"' ?>>
                <td id="<?php echo $laFoodItem['id_food'] ?>" width="40"><input class="qty" type="text" size="1" value="1" name="qty<?php echo $idFood ?>" style="visibility: hidden;"></td>
                <td width="272" class="order_form"><?php echo $laFoodItem['food_name'] ?></td>
                <td><?php echo $laFoodItem['ing'] ?></td>
                <td align="right" width="90"><?php echo $laFoodItem['price'] ?>,- &euro; &nbsp;&nbsp;&nbsp;</td>
            </tr>
            <?php endforeach; ?>
        </table>
        </td></tr>
        <?php endforeach; ?>
        </table>
        </td>
    </tr>
    </table>
    <!-- END the_list -->
    </td>
</tr>
</table>
<br>