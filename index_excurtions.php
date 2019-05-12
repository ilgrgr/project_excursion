<?php


$style = 'excurtions_page/style_excurtions.css';
$title = 'Экскурсии';


include("php/block_head.php");
    
?>

<?php

    $title_txt = '- Экскурсии -';
    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_top.php'); 

    //<!-- Далее Блок банер   -->

    $baner_h2_txt = 'Экскурсии';
    $banerTxt ;
    include ($_SERVER['DOCUMENT_ROOT'] . '/php/block_baner.php'); 

    
?>

    <div class="wraper">

        <form  action="hendlers/order_form.php" method="post">

            <div id="tajnySpb" class="block-excurtions">

                <div class=" block-excurtions__flex-el block-excurtions__flex-el_foto tajnySpb"></div>

                <div class=" block-excurtions__flex-el block-excurtions__flex-el_txt">

                    <h3 class='excurtions__header'>Тайны Петербурга</h3> 

                    <p class="excurtions__content">
                        Санкт-Петербург пронизан тайнами и легендами. 
                        Их можно найти на каждой улочке, в каждом доме, и, конечно, в каждом дворце и Музее, 
                        которых так много в этом городе.
                        На этой увлекательной экскурсии Вы узнаете: <br>
                        - Какие тайны хранит Смольный собор и Михайловский замок.<br>
                        - Мифы Таврического и Меншиковского дворцов.<br>
                        - Какие тайны хранят подвалы Юсуповского дворца.<br>
                        - Кто бродит по ночам в Кикиных палатах, <br>
                        - Что скрывают легендарные сфинксы? <br>
                        - Почему в тюрьме Кресты 999, а не 1000 камер?<br>
                        А так же, ещё  много интересного.<br>
                    </p>
                    <p class="excurtions__price">2 ЧАСА - 2300 руб. </p>
                    <!-- <p class="excurtions__button">
                        Забронировать
                    </p> -->
                    <p class="excurtions__content">Выбрать экскурсию</p>

                    <label>
                        
                        <input type="radio" name="excurtions" value="Тайны Петербурга">
                        <div class="radio"></div>
                         
                    </label>
                     
                     <!-- <?php  d($excurtions_arr[1]) ?> -->

                </div>
            </div>

            <div id="petergof" class="block-excurtions">

                <div class="block-excurtions__flex-el block-excurtions__flex-el_foto petergof"></div>

                <div class="block-excurtions__flex-el block-excurtions__flex-el_txt ">

                <h3 class='excurtions__header'>Петергоф</h3>

                    <p class="excurtions__content">
                        Петергоф - так назвал Петр Первый свою летнюю резиденцию на южном берегу Финского залива Балтийского моря. 
                        Бывшая резиденция императорского дома Романовых сегодня продолжает свою жизнь как уникальный дворцовый ансамбль, 
                        как музей-заповедник. Прекрасные парки и сады, величественные дворцы и удивительные фонтаны и каскады прославили это место 
                        на весь мир. Описать всего великолепия фонтанных композиций не представляется возможным, 
                        ведь в Петергофе представлено 4 каскада и 176 фонтанов! 
                        Каждый фонтан Петергофа -  это жемчужина в его уникальной и роскошной коллекции.
                    </p>

                    <p class="excurtions__price">3 ЧАСА - 2 900 руб.</p>
                    <!-- <p class="excurtions__button_right">
                        Забронировать
                    </p> -->
                    <p class="excurtions__content">Выбрать экскурсию</p>

                    <label>                   
                        <input type="radio" name="excurtions" value = "Петергоф" >
                        <div class="radio"></div>
                    </label>
                </div>

                
            </div>

            <div id="kryshiSpb" class="block-excurtions">    

                <div class="block-excurtions__flex-el block-excurtions__flex-el_foto kryshiSpb"></div>

                <div class="block-excurtions__flex-el block-excurtions__flex-el_txt">
                    
                <h3 class='excurtions__header'>Крыши Петербурга</h3>

                    <p class="excurtions__content">
                            Петербург поражает своим величием до глубины души, его так трудно оценить по достоинству, просто гуляя по городу. 
                            Крыши Санкт-Петербурга откроют Вам потрясающие виды на исторический центр Северной Венеции. 
                            Вы увидите Исаакиевский собор, Троицкий мост, Храм Спаса на Крови, набережную реки Фонтанки, 
                            совершенно с другой стороны, недоступной при пеших прогулках.
                            Особенно, стоит отметить вечерние экскурсии: с заходом солнца, великолепная городская панорама заиграет новыми красками, 
                            а специальное освещение усилит впечатления от захватывающих дух пейзажей Петербурга.
                    </p>

                    <p class="excurtions__price">1,5 ЧАСА - 1900 руб. </p>
                    <!-- <p class="excurtions__button">
                        Забронировать
                    </p> -->
                    <p class="excurtions__content">Выбрать экскурсию</p>

                    <label>
                        
                        <input type="radio" name="excurtions" value='Крыши Петербурга'>
                        <div class="radio"></div>
                    </label>
                </div>
            </div>

            <div id="neformSpb" class="block-excurtions">

                <div class="block-excurtions__flex-el block-excurtions__flex-el_foto neformSpb"></div>

                <div class="block-excurtions__flex-el block-excurtions__flex-el_txt">
                    
                <h3 class='excurtions__header'>Неформальный Петербург</h3>

                    <p class="excurtions__content">
                        Вы думаете, что побывали во всех клубах и барах нашего города и вас
                        ничем уже не удивить? Тогда спешите присоединиться!
                        Вы окунетесь в субкультуру ночных баров, клубов, арт-кафе, большинство из которых даже не имеют вывески на входной двери. 
                        Узнаете о заведениях, которые и не стремятся к известности, т.к. посещают их люди из своего круга. 
                        Мы посетим порядка 10 абсолютно разноформатных заведений, 
                        от коктейль-баров и арт-кафе до андеграунд клубов, чтобы получить представление о ночной жизни города. 
                        Вы узнаете об истории зарождения некоторых ключевых мест, да и вообще появления клубной культуры. 
                            
                    </p>

                    <p class="excurtions__price">6 ЧАСОВ - 1700 руб.</p>
                    <!-- <p class="excurtions__button">
                        Забронировать
                    </p> -->
                    <p class="excurtions__content">Выбрать экскурсию</p>

                    <label>
                        
                        <input type="radio" name="excurtions" value="Неформальный Петербург">
                        <div class="radio"></div>
                    </label>
                </div>

            </div>

            <div id="teplohodPoSv" class="block-excurtions">

                <div class="block-excurtions__flex-el block-excurtions__flex-el_foto teplohodPoSv"></div>
                
                <div class="block-excurtions__flex-el block-excurtions__flex-el_txt">
                    
                <h3 class='excurtions__header'>На теплоходе по "Северной Венеции"</h3>

                    <p class="excurtions__content">
                        Увлекательная теплоходная экскурсия по Санкт-Петербургу, во время которой вы увидите тихие и уютные уголки города, 
                        пройдете под удивительными мостами, переброшенными через воды рек Фонтанки, Мойки, Крюкова канала и Зимней канавки.
                        Вы увидите прекраснейший город на Земле с особенным, неповторимым ликом, трепетным сердцем и гордой душой. 
                        Замечательные зодчие ушедших эпох воплотили свои идеи в таких архитектурных шедеврах, как Мариинский театр, 
                        Никольский собор, Исаакиевский собор, остров «Новая Голландия», Поцелуев мост, Перекресток семи мостов, 
                        и еще многие памятники, сооружения, здания, парки, которые не перестают удивлять и восхищать гостей города.                
                    </p>
                    <p class="excurtions__price">1 ЧАС - 1500 руб.</p>
                    <!-- <p class="excurtions__button">
                        Забронировать
                    </p> -->
                    <p class="excurtions__content">Выбрать экскурсию</p>

                    <label>
                        
                        <input type="radio" name="excurtions" value = 'На теплоходе по "Северной Венеции"'>
                        <div class="radio"></div>
                    </label>
                </div>
            </div>

            <div class="block-excurtions">

                <div class="block-excurtions__flex-el block-excurtions__flex-el_foto SpbOutside"></div>

                <div id="SpbOutside" class="block-excurtions__flex-el block-excurtions__flex-el_txt">

                <h3 class='excurtions__header'>Петербург наизнанку</h3>

                    <p class="excurtions__content">
                        Санкт-Петербург — это город красивых улиц, храмов, дворцов, особняков и парков.
                        На этой экскурсии вы узнаете о заселения берегов Невы, основания Санкт-Петербурга и его застройки, 
                        вы узнаете как жили и живут люди. Посетим мрачные и красивые места, спрятанные за парадными фасадами, 
                        увидите необычные архитектурные решения и плоды работы творческих людей. Что скрывают за собой стройные ряды парадных фасадов? 
                        Какие тайны хранят петербургские дворы?
                        Эта индивидуальная экскурсия по необычным дворам, которая охватывает весь исторический центр города. 
                        Неповторимая романтика дворов-колодцев, удивительные истории и прекрасные легенды — все это в программе «Петербург наизнанку». 
                            
                    </p>

                    <p class="excurtions__price">1,5 ЧАСА - 1900 руб. </p>
                    <!-- <p class="excurtions__button">
                        Забронировать
                    </p> -->
                    <p class="excurtions__content">Выбрать экскурсию</p>

                    <label>
                        
                        <input type="radio" name="excurtions" value= 'Петербург наизнанку'>
                        <div class="radio"></div>
                    </label>
                </div>

            </div>
        

            <div class="block_question" >
            
                <div class="block_question_cont">
                    
                    <div >
                        <p class="orderForm__el__cont">Выберите количество человек</p>

                        <select class="orderForm__el__cont" name="quentyti" id="">
                            <option value="0" selected>не выбрано</option> 
                            <option value="1" >1</option> 
                            <option value="2">2</option> 
                            <option value="3">3</option> 
                            <option value="4">4</option> 
                            <option value="5">5</option> 
                            <option value="6">5- и более</option> 
                        
                        </select>

                    </div>

                
                    
                </div>
                        
                <div class="block_question_cont">

                    <input type="text" name="fio" placeholder="ФИО">
                    <input type="email" name="email" placeholder="email">
                    <input type="number" name="number" placeholder="телефон">
                    <textarea name="text" placeholder="Ваше сообщение"></textarea>
                    <input type="submit" name="submit" placeholder="отправить вопрос">
                    
                    
                </div>
            </div>
        
        </form>
      

    </div>
    

    <div class="spb_fon"></div> 

    <!-- Блок футера   -->

    <?php include("php/block_futer.php"); ?>
