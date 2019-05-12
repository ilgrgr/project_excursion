

<?php 

    //подключаем БД MySql  к форме

    $db = mysqli_connect('localhost', 'root' ,'', '13_12_18_ilyash'); 

    // далее задаем принудительную передачу данных в БД mysql, в кодировке utf8

    mysqli_set_charset( $db ,"utf8");

    //<!-- Далее код header html -->
    $style = '/excurtions_page/style_excurtions.css';
    $title = 'Ваш заказ';

    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_head.php');

    //<!-- Далее код block_top -->
   
    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_top.php'); 

    // <!-- Далее код block_baner -->
    
    $baner_h2_txt = 'Спасибо что выбрали нас';
    $banerTxt = 'МЫ ждем вас, что бы поделиться с вами яркими впечатлениями';

    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_baner.php'); 
  
?>

    <div class="wraper">
        
        <!-- код отладки ( debug ) просмотра POS массива на полученные данные -->
        <!-- <div> <?php d($_POST); ?> </div>  -->
    

        <div class="orderForm">

            <!-- далее сверяем данные pos  и подставляем изображение выбранной экскур -->

            <?php
                $excurImg = false;
                if ( isset($_POST['excurtions']) ) {

                    if( $_POST['excurtions'] == 'Тайны Петербурга') {

                        $excurImg = 'tajnySpb';  
                    }

                    elseif( $_POST['excurtions'] == 'Петергоф') {

                        $excurImg = 'petergof';
                    }

                    elseif($_POST['excurtions'] == 'Крыши Петербурга') {

                        $excurImg = 'kryshiSpb';
                    }

                    elseif($_POST['excurtions'] == 'Неформальный Петербург') {

                        $excurImg = 'neformSpb';
                    }
                    elseif($_POST['excurtions'] == 'На теплоходе по "Северной Венеции"') {

                        $excurImg = 'teplohodPoSv';
                        
                    }
                    elseif($_POST['excurtions'] == 'Петербург наизнанку') {

                        $excurImg = 'SpbOutside';
                    };

                } else { echo 'Вы не выбрали экскурсию!';};
        
            ?>

            <!-- далее проверка на выбранное кол-во человек -->

            <?php
                $quentytiOption = false;
                if ( isset($_POST['quentyti']) &&  $_POST['quentyti'] != '0' ) {

                    if( $_POST['quentyti'] == '1') {

                        $quentytiOption;  
                    }

                    elseif( $_POST['quentyti'] == '2') {

                        $quentytiOption;
                    }

                    elseif($_POST['quentyti'] == '3') {

                        $quentytiOption;
                    }

                    elseif($_POST['quentyti'] == '4') {

                        $quentytiOption;
                    }
                    elseif($_POST['quentyti'] == '6') {

                        $quentytiOption;
                        
                    }

                } else { echo 'Вы не выбрали количество человек.';};
        
            ?>

            <?php

                // далее создаем запроc к БД c (переменой query)  к таблице (INSERT INTO `users`) 

                $query = "INSERT INTO `users` ( `name`, `email`, `pfone`) VALUES( '{$_POST['fio']}' , '{$_POST['email']}' , '{$_POST['number']}')";

                // проверяем на результат ( true или false ) , переданны ли  в базу ( $db ) данные ( $query )

                $resultUser = mysqli_query( $db , $query ) ;

                if ($resultUser) {

                    // запрашиваем у БД ID последней записи в базу. 
                    $userId = mysqli_insert_id($db); 
                    
                }
                else {
                    $userId = false;
                }

                // далее создаем запроc к БД c (переменой $queryExcur)  к таблице заказов (INSERT INTO `orders`) 
                if ($userId) {
                    $queryExcur = "INSERT INTO `orders` (`excurtion_name`, `qantity_person`, `user_id`) VALUES('{$_POST['excurtions']}', '{$_POST['quentyti']}', $userId )";  
                    
                    $resultOrder = mysqli_query( $db , $queryExcur );
                    
                }
                else {
                    echo '<b class="orderForm__el__cont" style="color: red;"> Извините не удалось отправить заявку , попробуйте снова.</b>';
                }
                
            ?>

            <!-- Далее выводим форму заказа -->

            <div class="orderForm_el__foto <?php echo $excurImg ?>"> </div>

            <div class="orderForm_el">

                <p class="orderForm__el__cont">
                    <?php 

                        if ( !empty($_POST['fio']) ) {
                            
                            echo"Добрый день {$_POST['fio']}"; 

                        } else { 
                            echo '
                            Вы не указали имя.';
                        };
                    ?>
                </p>

                
                <?php 

                    if( $resultUser && $excurImg  && $resultOrder  ) {
                        echo ' <b class="orderForm__el__cont">Ваша заявка принята. </b>';}
                    else { 
                        echo '<b class="orderForm__el__cont" style="color: red;"> Извините не удалось отправить заявку , попробуйте снова.</b>';
                    };
                ?> 
                

                <p class="orderForm__el__cont">Мы рады, что вы решили провести время в нашей компании.</p>
                <p class="orderForm__el__cont"> Будем рады видеть вас на экскурсии : </p>
                <span class="orderForm_cont_span"><?php echo "{$_POST['excurtions']}" ?></span>
                <p class="orderForm__el__cont">
                    <?php
                        if ( !empty ( $_POST['number'] )) {
                            
                            echo "Мы свяжемся с вами по тел: <b>{$_POST['number']} </b>,"; 
                        }
                        else { 
                            echo 'Вы не указали номер телефона.';
                        };
                    ?>
                </p>

                <p class="orderForm__el__cont">
                    <?php        
                        if ( !empty ($_POST['email']) ) {

                            echo "или по электронной почте : <b>{$_POST['email']} </b>.";    
                        }

                        else { 
                            echo 'Вы не указали e-mail.';
                        }; 
                        
                    ?>
                </p>

            </div>

        </div>

    </div>

<div class="spb_fon"></div> 

<?php include("../php/block_futer.php"); ?>

