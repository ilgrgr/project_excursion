

<?php 

    //подключаем БД MySql  к форме

    $db = mysqli_connect('localhost', 'root' ,'', '13_12_18_ilyash'); 

    // далее задаем принудительную передачу данных в БД mysql, в кодировке utf8

    mysqli_set_charset( $db ,"utf8");

    //<!-- Далее код header html -->
    $style = '/styles/style.css';
    $title = 'Поиск';

    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_head.php');

    //<!-- Далее код block_top -->
   
    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_top.php'); 

    // <!-- Далее код block_baner -->
    
    $baner_h2_txt = 'Спасибо что выбрали нас';
    $banerTxt = 'Форма поиска';

    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_baner.php'); 
  
?>

    <div class="wraper">
        
        <!-- <div> <?php d($_POST); ?> </div>  --> <!-- код отладки ( debug ) просмотра POS массива на полученные данные -->

        <form action="" method="post" class="block_question" >

            <input type="text" name="search" value="">
            <input type="submit" value="найти">
                    
        </form>

        <div class="search_tab">
            <?php
                //далее форма запроса поиска

                $error ='';
                if ( !empty($_POST) ) {   // empty — Проверяет, пуста ли переменная

                    if (!empty($_POST['search']) ) {

                        if (strlen($_POST['search']) > 3) {

                            $query = "SELECT `orders`.`excurtion_name`,
                                             `orders`.`user_id` ,

                                             `users`.`user_id` ,
                                             `users`.`name`,
                                             `users`. `email`,
                                             `users`. `pfone`

                                        FROM `orders`
                                        
                                        LEFT JOIN `users`

                                        ON `orders`.`user_id` = `users`.`user_id` 

                                        WHERE `orders`.`excurtion_name`

                                        LIKE '%{$_POST['search']}%'";

                            $result = mysqli_query( $db , $query ) ;   // отправляем запрос 
                            
                            // d( $result );

                            while( $resultArr = mysqli_fetch_assoc($result) ) {     //mysqli_fetch_assoc формирует полученый ответ в читабельный вид
    
                                echo "<div class='search_tab_form'> <p>{$resultArr['excurtion_name']}</p></div>";
                                echo "<div class='search_tab_form'> <p>{$resultArr['name']} </p></div>";
                                echo "<div class='search_tab_form'> <p>{$resultArr['user_id']}</p></div>";
                                echo "<div class='search_tab_form'> <p>{$resultArr['email']} </p></div>";
                                echo "<div class='search_tab_form'> <p>{$resultArr['pfone']} </p></div>";
                            }
                            
   
                        }
                        else {echo 'Впишите больше символов';}
                        
                    }

                    else {echo ' <div> <b>надо бы что то вписать </b></div>';}

                }
                    
                $error 
            ?>

            

        </div>

    </div>

<div class="spb_fon"></div> 

<?php include($_SERVER['DOCUMENT_ROOT'] . '/php//block_futer.php'); ?>

