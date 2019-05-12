<?php 
$style = 'kontakts_page/kontakts_style.css';
$title= 'О нас';
include("php/block_head.php");
    
?>

    
    <?php
    $title_txt = "- Контакты -";
    $banerTxt ;
    include("php/block_top.php");
    
    //<!-- Блок банер1   -->
    $baner_h2_txt = 'Контакты';
    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_baner.php'); 

    ?>

    
    

    <div class="wraper">

        <div class="header-item">
            <p class="header-item__content header-item__content__head">МЫ-команда тех кто любит Санкт-Петербург. </p>
            <p class="header-item__content header-item__content__txt">                
                Санкт-Петербург – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники архитектуры, заказники, парки, дворцы, заповедники. 
                Активный отдых в Санкт-Петербурге и его окраинах – это отличная возможность вырваться из душного мегаполиса , навстречу приключениям. 
                К счастью, не все еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. 
                Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.
            </p>
            <p></p>
        </div>

        <div class="contakt-header">
            <div class="contakt-header__contakt-boss">
                
                <div class="contakt-boss__foto"></div>

                <div class="contakt-profile__txt">
                    <p>Александр Рыбаков</p>
                    <p>Директор </p>
                    <p>По всем вопросам пишите на почту:</p>
                    <p>e-mail:</p>
                </div>
            </div>

            <div class="contakt-header__contakt-bosszam">

                <div class="contakt-bosszam__foto"></div>

                <div class="contakt-profile__txt">
                    <p>Иванова Людмила</p>
                    <p>Руководитель корпоративного отдела</p>
                    <p>По вопросам корпоративных экскурсий:</p>
                    <p>e-mail:</p>
                </div>

            </div>

            <div class="contakt-header__contakt-location">
                <p class="contakt-location__">
                    Санкт-Петербург, <br>
                    Набережная реки Пряжки
                </p>
                
                <p class="">
                    E-mail: <br>
                    info@mypeterburg.ru
                </p>
                <p class="">Телефон: <br>
                    (812) 000-00-00
                </p>
            </div>

        
            <form action="hendlers/letter_form.php" method="post" class="contakt-header__contakt-form">
                <p>Напишите нам</p>
                <input type="text" name="fio" placeholder="ФИО">
                <input type="email" name="email" placeholder="email">
                <input type="number" name="number" placeholder="телефон">   
                <textarea name="text" placeholder="Ваше сообщение"></textarea>
                <input type="submit" name="submit" placeholder="отправить вопрос">

            </form>

        </div>
    
    </div>

    <div class="spb_fon"></div>

    <div class="map">
            <iframe src="https://yandex.ru/map-widget/v1/-/CCa7eAkl" width="100%" height="450" frameborder="1" allowfullscreen="true"></iframe>
    </div>

    <!-- Блок футера   -->

    <?php include("php/block_futer.php"); ?>
    


