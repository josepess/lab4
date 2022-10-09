<?php
include("vars.php");
?><html>
    <head>
        <title>Работа</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">
        <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
            <tr>
                <td valign="top" width="583" height="208" background="../images/row1.gif">
                    <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif">    </div>
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
                        </form>
                    </div>
                </td>
            </tr>
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
                                                <div style="margin-left:95px "><font class="title">Название</font><br>

                                                
                                                    
                                                    
                                                    
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

                                                        
                                                        <?php
                                                            echo "<div class='item'> 
                                                            <b>Имя:</b> ". $_COOKIE["client_name"] ." <br>
                                                            <b>Email:</b> ". $_COOKIE["client_email"] ." <br>
                                                            <b>Телефон:</b> ". $_COOKIE["client_phone"] ." <br>
                                                            <b>Тип путевки:</b> ". $VOUCHER_TYPE[$_COOKIE["dop"]]['name'] ." - ". $VOUCHER_TYPE[$_COOKIE["dop"]]['description']. " (Цена: " .$VOUCHER_TYPE[$_COOKIE["dop"]]['price'].")<br>
                                                            <b>Вид питания:</b> ". $FOOD_TYPE[$_COOKIE["food_type"]]['name'] . " - " . $FOOD_TYPE[$_COOKIE["food_type"]]['description'] ." (Цена: " .$FOOD_TYPE[$_COOKIE["food_type"]]['price'].")<br>
                                                            <b>Страна путешествия:</b> ".$COUNTRY_TYPE[$_COOKIE["dop"]][$_POST["country"]]["name"]." (Цена: " .$COUNTRY_TYPE[$_COOKIE["dop"]][$_POST["country"]]['price'].")<br>
                                                            <b>Доп.услуги: </b>";
                                                            if (!empty($_POST['additional_service'])) {
                                                                foreach($_POST['additional_service'] as $item) {
                                                                    echo "".$ACTIVITY_TYPE[$_COOKIE["dop"]][$item]["name"]." (Цена: " .$ACTIVITY_TYPE[$_COOKIE["dop"]][$item]['price'].") <br>";
                                                                }
                                                            }
                                                            echo "<b>Количество дней: </b> ". $_POST['days'] ."</div>";
                                                            if (!empty($_POST['additional_service'])) {
                                                                $ADD = "Доп.услуги: ";
                                                                foreach($_POST['additional_service'] as $item) {
                                                                    $ADD ="".$ADD." ".$ACTIVITY_TYPE[$_COOKIE["dop"]][$item]["name"]." (Цена: " .$ACTIVITY_TYPE[$_COOKIE["dop"]][$item]['price'].")\n";
                                                                }
                                                            }
                                                            else $ADD = "Доп.услуг нет";
                                                            $FILE_CONTENT = "Имя: ". $_COOKIE["client_name"] .  " \nEmail:". $_COOKIE["client_email"] ."\nТелефон:". $_COOKIE["client_phone"] ."\nТип путевки: ". $VOUCHER_TYPE[$_COOKIE["dop"]]['name'] ." - ". $VOUCHER_TYPE[$_COOKIE["dop"]]['description']. " (Цена: " .$VOUCHER_TYPE[$_COOKIE["dop"]]['price'].")\nВид питания:". $FOOD_TYPE[$_COOKIE["food_type"]]['name'] . " - " . $FOOD_TYPE[$_COOKIE["food_type"]]['description'] ." (Цена: " .$FOOD_TYPE[$_COOKIE["food_type"]]['price'].")\nСтрана путешествия:".$COUNTRY_TYPE[$_COOKIE["dop"]][$_POST["country"]]["name"]." (Цена: " .$COUNTRY_TYPE[$_COOKIE["dop"]][$_POST["country"]]['price'].")\n".$ADD."";
                                                            $filename = "pricelist.txt"; //Имя файла для прикрепления
                                                            file_put_contents($filename, $FILE_CONTENT);
                                                            $to = $_COOKIE["client_email"]; //Кому
                                                            $from = "example@gmail.com"; //От кого
                                                            $subject = "Test"; //Тема
                                                            $message = "Текстовое сообщение"; //Текст письма
                                                            $boundary = "---"; //Разделитель
                                                            /* Заголовки */
                                                            $headers = "From: $from\nReply-To: $from\n";
                                                            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
                                                            $body = "--$boundary\n";
                                                            /* Присоединяем текстовое сообщение */
                                                            $body .= "Content-type: text/html; charset='utf-8'\n";
                                                            $body .= "Content-Transfer-Encoding: quoted-printablenn";
                                                            $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
                                                            $body .= $message."\n";
                                                            $body .= "--$boundary\n";
                                                            $file = fopen($filename, "r"); //Открываем файл
                                                            $text = fread($file, filesize($filename)); //Считываем весь файл
                                                            fclose($file); //Закрываем файл
                                                            /* Добавляем тип содержимого, кодируем текст файла и добавляем в тело письма */
                                                            $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename)."?=\n";
                                                            $body .= "Content-Transfer-Encoding: base64\n";
                                                            $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
                                                            $body .= chunk_split(base64_encode($text))."\n";
                                                            $body .= "--".$boundary ."--\n";
                                                            mail($to, $subject, $body, $headers); //Отправляем письмо
                                                        ?> 
                                                         
                                                 



                                                    <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">

                                                        <?php
                                                            $ITOG = $VOUCHER_TYPE[$_COOKIE["dop"]]['price'] + $COUNTRY_TYPE[$_COOKIE["dop"]][$_POST["country"]]['price'] + ($FOOD_TYPE[$_COOKIE["food_type"]]['price'] * $_POST['days']);
                                                            if (!empty($_POST['additional_service'])) {
                                                                foreach($_POST['additional_service'] as $item) {
                                                                    $ITOG = $ITOG + $ACTIVITY_TYPE[$_COOKIE["dop"]][$item]['price'];
                                                                }
                                                            };

                                                            echo "<div class='item'> 
                                                            <b>Итоговая сумма:</b> ". $ITOG ." <br>
                                                            </div>"
                                                        ?> 
                                                            
                                                            
<br><br><br><br>
                                                            <div style="margin-left:67px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">

                                                            
                                                            
                                                            
                                                                </div> 
                                                            </div>

                                                            <div style="margin-left:0px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>

                                                            <div class="buttons">
                                             <button class="btn">
                                             <a href="order.php" class="btn">Отправить на почту и записать в файл</a>
                                             </button>
                                             <button type="submit" class="btn">Записать в файл</button>
                                             </div>
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
