<?php
include("vars.php");
foreach ($FIELDS as $field) {
   if (empty($_POST[$field])) {
      echo '<script>alert("Введены не все необходимые данные")</script>';
      header("Location: order.php", true, 307);
   }
};
?>
<html>
   <head>
      <title>Работа</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <link href="../css/style.css" rel="stylesheet" type="text/css">
   </head>

   <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">
      <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
         <tr>
            <td valign="top" width="583" height="208" background="../images/row1.gif">
               <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"></div>

               <div style="margin-left:50px; margin-top:69px ">
                   <a href="../index.php">Главная<img src="../images/m1.gif" border="0" ></a>
                  <img src="../images/spacer.gif" width="20" height="10">
                                <a href="order.php">Заказ<img src="../images/m2.gif" border="0" ></a>
				<img src="../images/spacer.gif" width="5" height="10">
                                <a href="basket.php">Корзина<img src="../images/m3.gif" border="0" ></a>
                  <img src="../images/spacer.gif" width="5" height="10">
                  <a href="index-3.php">О компании<img src="../images/m4.gif" border="0" ></a>
                  <img src="../images/spacer.gif" width="5" height="10">
                  <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0" ></a>

               </div>
               <div style="margin-left:400px; margin-top:10px "></div>       
            </td>
         </tr>
         <form action="basket.php" method="post" enctype="multipart/form-data">
         <tr>
            <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
               <table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                     <td valign="top" height="338" width="42"></td>
                     <td valign="top" height="338" width="492">
                        <table cellpadding="0" cellspacing="0" border="0">
                           <tr>
                              <td width="492" valign="top" height="106">


                                 <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                    <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                    <div style="margin-left:95px "><font class="title">   </font>
                                    <div style="margin-right:95px " class="item">Тип путевки</div>
                                                            <?php
                                                            //$VOUCHER= $VOUCHER_TYPE["".$_POST['voucher'].""]["name"];
                                                            $NAME= $_POST['name'];
                                                            $EMAIL= $_POST['email'];
                                                            $PHONE = $_POST['phone'];
                                                            $VOUCHER_NAME = $_POST['voucher'];
                                                            $FOOD = $_POST['food_type'];
                                                            //$FOOD = $FOOD_TYPE["".$_POST['food_type'].""]['name'];
                                                            //$FOOD_DESC = $FOOD_TYPE["".$_POST['food_type'].""]['description'];

                                                            //setcookie("voucher_type", $VOUCHER);
                                                            setcookie("client_name", $NAME);
                                                            setcookie("client_email", $EMAIL);
                                                            setcookie("client_phone", $PHONE);
                                                            setcookie("food_type", $FOOD);
                                                            //setcookie("food_desc", $FOOD_DESC);
                                                            setcookie("dop", $VOUCHER_NAME);
                                                            foreach ($COUNTRY_TYPE["".$_POST['voucher'].""] as $key => $value){
                                                                echo "<div class='item'>
                                                                <input type='radio' name='country' id=$key value=$key />
                                                                <label for=$key>".$value['name']."</label></div>";
                                                            }
                                                            ?>                                                   
                                                </div> 
                                    </div> 
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td width="492" valign="top" height="232">
                                 <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                       <td valign="top" height="232" width="248">
                                          <div style="margin-left:6px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:6px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                          <div style="margin-left:6px; margin-top:11px; margin-right:0px "><font class="title"> </font></div>
                                          <div style="margin-top:10px; margin-left:6px ">
                                          <div class="order-table-your-data-row">
                                                            <?php     
                                                            $DESC = $ACTIVITY_TYPE["".$_POST['voucher'].""]['Sauna']['description'];
                                                            if ($DESC == null)
                                                               $DESC = $ACTIVITY_TYPE["".$_POST['voucher'].""]['Feed']['description'];
                                                            if ($DESC == null)
                                                               $DESC = $ACTIVITY_TYPE["".$_POST['voucher'].""]['Marketplace']['description'];
                                                            echo "$DESC";                                
                                                            foreach ($ACTIVITY_TYPE["".$_POST['voucher'].""] as $key => $value){
                                                                echo "<div class='item'>
                                                                <input type='checkbox' name='additional_service[]' id=$key value=$key />
                                                                <label for=$key>".$value['name']."</label></div>";;
                                                            }
                                                            ?>
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                           
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                          
                                          </div> 

                                       <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                       <td valign="top" height="215" width="243">
                                          <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                          <div style="margin-left:22px; margin-top:13px; ">
                                          <label for="name">Количество дней:</label>
                                          <input type="text" id="days" name="days"><br>
                                          </div>
                                             <div style="margin-left:0px; margin-top:0px; margin-right:0px "><font class="title">   </font></div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                             
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                             
                                          </div>
                                                     
                                             <div style="margin-left:67px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                          </div>
                                          <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                          <div style="margin-left:22px; margin-top:9px; ">
                                             <img src="../images/1_p3.gif" align="left">
                                             <div class="buttons">
                                             <button class="btn">
                                             <a href="order.php" class="btn">Вернуться назад</a>
                                             </button>
                                             <button type="submit" class="btn">Далее</button>
                                             </div>
                                             </form>
    
                                             
                                             
                                             <div style="margin-left:67px; margin-top:0px; margin-right:0px ">
<font class="title">

</font><br>

<div> 

</div>

                                            

 
                                             
                                             <div style="margin-left:0px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                          </div>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                     <td valign="top" height="338" width="49"></td>
                  </tr>
               </table>
            </td>
         </tr>
         <tr>
            <td valign="top" width="583" height="68" background="../images/row3.gif">
               <div style="margin-left:51px; margin-top:31px ">
                  <a href="#"><img src="../images/p1.gif" border="0"></a>
                  <img src="../images/spacer.gif" width="26" height="9">
                  <a href="#"><img src="../images/p2.gif" border="0"></a>
                  <img src="../images/spacer.gif" width="30" height="9">
                  <a href="#"><img src="../images/p3.gif" border="0"></a>
                  <img src="../images/spacer.gif" width="149" height="9">
                  <a href="index-5.php"><img src="../images/copyright.gif" border="0"></a>
               </div>
            </td>
         </tr>
      </table>
   </body>
</html>
