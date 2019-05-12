<?php


$title = 'Спасибо что написали нам';
$style = '/styles/style.css';
$title_txt = '';


include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_head.php');

include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_top.php');

$baner_h2_txt  = 'Спасибо что написали нам';
$banerTxt  = '';

include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_baner.php');

?>

<div class="wraper">

    <div>

        <?php d($_GET) ?>   

        <P>
            <?php 

                if ( !empty($_GET['fio']) ) {
                    
                    echo"
                    Добрый день {$_GET['fio']},
                    Спасибо за ваше письмо."; 
                    
                }
                else { 
                    echo '
                    Вы не указали имя.';
                };
                
                if ( !empty ($_GET['number']) ) {
                    
                    echo "
                    Мы свяжемся с вами по тел: {$_GET['number']} ,";
                    
                }
                else { 
                    echo '
                    Вы не указали номер телефона.';
                };
                
                if ( !empty ($_GET['email']) ) {

                    echo "
                    или по электронной почте : {$_GET['email']}.";
                    
                }
                else { 
                    echo '
                    Вы не указали e-mail. <br>';
                }; 
                
            ?>
        </p>


    </div>


</div>

<div class="spb_fon"></div>

<?php

include("../php/block_futer.php");

?>