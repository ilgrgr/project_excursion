<?php

        //подключаем нашу базу данных к форме

        $db = mysqli_connect('localhost', 'root' ,'', '13_12_18_ilyash'); 

        // далее задаем принудительную передачу данных в базу в кодировке utf8
    
        mysqli_set_charset( $db ,"utf8");

    // далее создаем запроc  c (переменная $queryOrders) к нашей базе к таблице (INSERT INTO `orders`)
   
   //    $queryOrders = "INSERT INTO `orders` (`excurtion_name`, `qantity_person`, `user_id`)
   //                          VALUES 
   //                                 ('Крыши Петербурга', '3', '222');";
   
    
       // далее создаем запроc  c (переменная query) к нашей базе к таблице (INSERT INTO `users`) 
   
       $query = "INSERT INTO `users` ( `name`, `email`, `pfone`) VALUES('aaaaaaaaaa', 'wwwwwwwww', '33333333333')"; 
   
       //отправляем запрос без проверки результата
   
       // mysqli_query( $db ,$query ) ; 
       
       // ИЛИ далее проверяем на результат ( true или false ) , переданны ли  в базу ( $db ) данные ( $query );
       
       // $result = mysqli_query( $db , $query ) ;
       // if( $result ) {
       //     echo 'Данные успешно сохранены!';}
       // else{ echo 'Не удалось отправить данные , попробуйте снова.';};



?>