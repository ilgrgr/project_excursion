

<?php 

$style = '/styles/style.css';
$title = 'Мой Петербург';

include($_SERVER['DOCUMENT_ROOT'] . '/php/block_head.php');

include($_SERVER['DOCUMENT_ROOT'] . '/php/block_top.php'); 


?>

    


    <div class="wraper">
    
        <!-- Блок банер1   -->

        <div id="uslugi" class="block_baner">
            
            <div id="bonus" class="fonar"></div>
            <h2>ЧТО МЫ ПРЕДЛАГАЕМ?</h2>
            <!-- <div class="baner_line"></div> -->
            <p>Наша главная цель, рассказать о Санкт-Петербурге так, что бы вы полюбили его так, как любим его мы! </p>
        </div>

        <audio src='sound/skrip.mp3' ></audio>
        
        <!-- блок с бонусом -->

        <div class="tajny">
            <div class="tajny_info">
                <p>Поздравляю тебя, ты разгадал тайну, назови кодовое слово нашему менеджеру и получи скидку 25%</p>
            </div>
            <div class="fraza">
                <span>"Привет Питер"</span>
            </div>
        </div>

        <!-- блок услуги -->

        <div class="block_uslugi_flex_header">
            <div class="podlozka"></div>

            <!-- Маршруты -->
            <div class="block_uslugi_flex">
                <div class="block_uslugi_marsh"></div>
                <div class="block_uslugi_txt">
                    <h3>НЕОБЫЧНЫЕ МАРШРУТЫ</h3>
                    <p>
                        - Мы предлагаем вам окунуться в эту загадочную атмосферу и прикоснуться к тайнам Петербурга. 
                        Быть может, именно вы сможете их разгадать?
                        Санкт-Петербург пронизан тайнами и легендами. Их можно найти на каждой улочке, в каждом доме, и, конечно,
                         в каждом дворце и Музее, которых так много в этом городе. Так-же одна из тайн спрятана на нашем сайте, найди её и получи приз!
                    </p>
                </div>
            </div>

            <!-- Экскурсии -->
            <div class="block_uslugi_flex">
                <div class="block_uslugi_exkur"></div>
                <div class="block_uslugi_txt">
                    <h3>ИНТЕРЕСНЫЕ ЭКСКУРСИИ</h3>
                    <p>
                        - Петербург поражает своим величием до глубины души, его так трудно оценить по достоинству, просто гуляя по городу.
                        Крыши Санкт-Петербурга откроют  Вам потрясающие виды на исторический центр Северной Венеции. 
                        Вы увидите Исаакиевский собор, Троицкий мост, Храм Спаса на Крови, набережную реки Фонтанки, совершенно с другой стороны, недоступной при пеших прогулках. 
                    </p>
                </div>
            </div>

            <!-- знакомства -->
            <div class="block_uslugi_flex">
                <div class="block_uslugi_znakom"></div>                    
                <div class="block_uslugi_txt">
                    <h3>НОВЫЕ ЗНАКОМСТВА</h3>
                    <p>
                        - На наших экскурсиях вы познакомитесь, поделитесь впечатлениями с новыми людьми, которым так-же интересен Санкт-Петербург и
                        возможно  продолжите общение и после прогулок по Петербургу.
                    </p>   
                </div> 
            </div>

            <!-- СУвениры -->
            <div class="block_uslugi_flex">
                <div class="block_uslugi_suvenir"></div>
                <div class="block_uslugi_txt">
                    <h3>КЛАССНЫЕ СУВЕНИРЫ</h3>
                    <p>
                        - Вы сможете приобрести классные сувениры в нашей «Лавке-Сувениров».
                        И самое примечательное, что все сувениры мы изготавливаем сами. Заходите к нам в гости!
                    </p>
                </div>      
            </div>

            <!-- фото -->
            <div class="block_uslugi_flex">
                <div class="block_uslugi_foto"></div> 
                <div class="block_uslugi_txt">
                    <h3>КРАСИВЫЕ ФОТОСЕССИИ</h3>
                    <p>
                        - Ну и конечно же, как бес фотосессий? Мы будем рады, провести креативную фотосессию в любом уголке Санкт-Петербурга.
                        Не важно свадьба у Вас или просто захотелось добавить в инстагарам или альбом красивых фоток.
                    </p>
                </div>   
            </div>

            <!-- Впечатления -->
            <div class="block_uslugi_flex">
                <div class="block_uslugi_vpechat"></div> 
                <div class="block_uslugi_txt">
                    <h3>ЯРКИЕ ВПЕЧАТЛЕНИЯ</h3>
                    <p>
                        - Самое важное – это яркие впечатления, которые останутся с тобой на долгое время, после прогулок в нашей компании.
                        Поэтому мы ждем именно тебя , что бы поделиться с тобой нашими положительными эмоциями!     
                    </p>
                </div>
            </div>
        </div>
    </div>

    
    <!-- блок о нас -->
        
    <div id="onas" class="block_onas">

        <div class="block_onas_flex_1"></div>

        <div class="block_onas_flex_2">
            <div class="podlozka">
                <div>
                    <h3>КТО МЫ?</h3>
                    <p>МЫ-команда тех кто любит Санкт-Петербург. </p>
                    <p>                
                        Санкт-Петербург – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники архитектуры, заказники, парки, дворцы, заповедники. 
                        Активный отдых в Санкт-Петербурге и его окраинах – это отличная возможность вырваться из душного мегаполиса , навстречу приключениям. 
                        К счастью, не все еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. 
                        Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.
                    </p>
                    <a class="block_onas_button" href="../index_kontakts.php">ПОДРОБНЕЕ О НАС</a>
                </div>

            </div>

        </div>
    </div>

    <!-- Блок Банер 2  о фото> -->

    <div class="wraper">
        <div class="block_baner">
            <div class="fonar"></div>
            <h2>Санкт-Петербург в ФОТОГРАФИЯХ</h2>
            <div class="baner_line"></div>
            <p>Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и присылайте нам свои фотографии.</p>
        </div>
    </div>
    
        <!-- Блок с фотографиями Flex контейнер-->

    <div class="block_foto_header">    
        <div class="block_foto block_foto_1"></div>
        <div class="block_foto block_foto_2"></div>
        <div class="block_foto block_foto_3"></div>
        <div class="block_foto block_foto_4"></div>
        <div class="block_foto block_foto_5"></div>
        <div class="block_foto block_foto_6"></div>
        <div class="block_foto block_foto_7"></div>
        <div class="block_foto block_foto_8"></div>
    </div>
    
    <!-- Блок Банер 3  отзывы> -->
    <div class="wraper">
        <div id="otzyv" class="block_baner">
            <div class="fonar"></div>
            <h2>ОТЗЫВЫ</h2>
            <div class="baner_line"></div>
            <p></p>
        </div>

        <!-- Блок   отзывы> -->

        <div class="block_otzyv_header">
            <div class="block_otzyv">
                <p>
                    Город родной! Питер - я твой!
                    Питер он разный, Питер он праздный, в Питер тебя зовет душа.
                    Многое в нем запомнилось: мечтательные прогулки по Невскому и Петропавловке, встречи на Фонтанке.

                </p>
                <div class="block_otzyv_l_foto" ></div>
                <span>Григорий И.</span>
            </div>
            <div class="block_otzyv">
                <p>
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА 
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА 
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА 
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА 
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА 
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА 
                    Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА Бла Бла БЛА
                </p>
                <div class="block_otzyv_r_foto" ></div>
                <span>Каролина М.</span>
            </div>
        </div>
    </div>

    <div class="spb_fon"></div>   

    <!-- Блок  напишите нам -->
    
    <div class="bacground_block_baner_2">

        <div class="wraper">

         <!-- Блок Банер 2  --> 

            <div class="block_baner_2">
                <div class="fonar"></div>
                <h2>НАПИШИТЕ НАМ</h2>
                <div class="baner_2_line"></div>
                <p></p>
            </div>

            
            <form action="hendlers/letter_form.php" method="post" class="block_question" >

                <div class="block_question_cont">
                    <input type="text" name="fio" placeholder="ФИО">
                    <input type="email" name="email" placeholder="email">
                    <input type="number" name="number" placeholder="телефон">
                    <input type="submit" name="submit" placeholder="отправить вопрос" value="Отправить">
                    
                </div>
                
                <div class="block_question_cont">
                    <textarea name="text" placeholder="Ваше сообщение"></textarea>
                </div> 
                                    
            </form>
            



        </div>
    </div>
    
    <!-- далее Футер  -->

    <?php include('php/block_futer.php'); ?>
    

