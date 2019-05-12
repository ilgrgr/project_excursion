<?php


$title = 'Спасибо что написали нам';
$style = '/excurtions_page/style_excurtions.css';



include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_head.php');

include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_top.php');

// далее блок банера 
$baner_h2_txt  = 'Спасибо что написали нам';
$banerTxt;

include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_baner.php');

?>

<div class="wraper">

    <div>

        <!-- <?php echo d($_POST) ?>    -->
        
        <div class="mailout">
                
            <div class="convert_top">
                <div class="convert_top_line">
                    <div></div>
                    <div></div>
                </div>

                <div class="convert_top_ico">
                    <div class="convert_top_1"></div>
                    <div class="convert_top_2"></div>
                    <div class="convert_top_3"></div>
                </div>
                
            </div> 

            <div class="convert_center">

                <div class="convert_center_conent" >
                    <?php 

                        if ( !empty($_POST['fio']) ) {
                            
                            echo"
                            <b class='orderForm__el__cont'> Добрый день {$_POST['fio']}, </b> 
                            <p class='orderForm__el__cont'> Спасибо за ваше письмо. </p>";     
                        }
                        else { 
                            echo  "<b class='orderForm__el__cont'>Вы не указали имя.</b>";
                        };

                        if ( !empty ($_POST['number']) ) {
                                
                            echo "<p class='orderForm__el__cont'> В ближайшее время мы свяжемся с вами по тел: </p>
                           <b> {$_POST['number']} </b>";   
                        }
                        else { 
                            echo "<p class='orderForm__el__cont'>Вы не указали номер телефона.</p>";
                        };

                        if ( !empty ($_POST['email']) ) {

                            echo "<p class='orderForm__el__cont'> или по электронной почте :</p>
                            <b> {$_POST['email']} </b>"; 
                        }
                        else { 
                            echo "<p class='orderForm__el__cont'> Вы не указали e-mail.</p>";
                        }; 

                    ?> 

                </div>
            </div>

            <div class="convert_bottom">
                <div class="convert_bottom_line">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

            </div>
            
        </div>

    </div>

</div>

<div class="spb_fon"></div>

<?php

include("../php/block_futer.php");

?>