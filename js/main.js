$("a").click(function () {

    let linkhref = $(this).attr("href");

    let scrollHeight = $(linkhref).offset().top;

    console.log($(this).attr("href"));

    $("html, body").animate({
        scrollTop: scrollHeight
    }, 1000);
});


// далее код тайник на сайте с бонусом
var audio = $("audio");
    audio.autoplay = false;

$("#bonus").click(function () {

    $(".tajny").slideToggle(2000);

    let bonusOnOff = $(".fonar").attr("style");

    if (bonusOnOff == undefined) {
        $("#bonus").css("transform", "rotate(35deg)");
    } else {
        $(".fonar").removeAttr("style")
    };
    return false;
});

// код слайдера TOP елемента

var block_top = $('.slider');
var block_top__lenta = block_top.find('.slider-lenta');
var slider_lenta__item = block_top__lenta.find('.slider-lenta_item');

var counterClik = 0;

block_top__lenta.css('width' , '100' * slider_lenta__item.length + '%');

block_top.find('.slider-arrow-left').click(function(){

    if (counterClik > 0) {
        counterClik--;
    }

    else {
        counterClik = slider_lenta__item.length - 1;
    }
   
    block_top__lenta.animate({
        left: -100 * counterClik + '%'
    },1000);
    
});

block_top.find('.slider-arrow-right').click(function(){
      
    if (counterClik < slider_lenta__item.length -1) {
        counterClik++;
    } 

    else {        
        counterClik = 0;  

    }

    block_top__lenta.animate ({
        left: -100 * counterClik + '%'
    },1000);
   
});

// далее код для мини меню c анимацией

$(".nav_ico").click(function () {
    let navIcoAtrr = $(".nav").attr("style");

    if (navIcoAtrr == undefined) {
        $(".nav").css("left", "0");
        $(".nav_ico_line_t").css({
            "transform": "rotate(45deg)",
            "top": "8px"
        });
        $(".nav_ico_line_b").css({
            "transform": "rotate(-45deg)",
            "top": "8px"
        });
        $(".nav_ico_line_c").css({
            "display": "none"
        });
    } else {
        $(".nav ,.nav_ico_line_t, .nav_ico_line_c, .nav_ico_line_b").removeAttr("style");

    };
    return false;
});

// валидация форм отправки
var userFio = $('[name="fio"]');
var userMail = $('[name="email"]');
var userNumber = $('[name="number"]');
var userText = $('[name="text"]');

$("form").submit(function (event) {

    if (userFio.val() == "") {
        userFio.css("border", "2px solid red");

    } else {
        
        userFio.removeAttr("style");  
    };

    if (userMail.val() == "") {
        userMail.css("border", "2px solid red");
    } else {
        userMail.removeAttr("style");
    };

    if (userNumber.val() == "") {
        userNumber.css("border", "2px solid red");
    } else {
        userNumber.removeAttr("style");
    };

    if (userText.val() == "") {
        userText.css("border", "2px solid red");

    } else {
        userText.removeAttr("style");
    };

    if (userFio.val() == "" || userMail.val() == "" || userNumber.val() == "" || userText.val() == "" ) {
        return false;
    };

    
    // event.preventDefault (); - тоже самое что и return false;
});

userFio.keyup(function(event) {

        // получаем из формы значение и возводим его в нижний регистр
        var fiovalue = userFio.val().toLowerCase();

        // получаем из формы [первую букву]. возводим ее в верхний регистр
        var firstFioValue = fiovalue[0].toUpperCase();
       
        // Верезаю часть слова после первой буквы и до конца
        var fiovalueLast = fiovalue.slice(1)
    
        // склеиваю первую и вторую часть
        var newFio = firstFioValue + fiovalueLast;
    
        //вставить значение в поле
        userFio.val(newFio)

    if (userFio.val() == "") {
        userFio.css("border", "2px solid red");

    } else {
        userFio.removeAttr("style");  
    };
});

userMail.keyup(function(event) {

    var mailvalue = userMail.val().toLowerCase();
    userMail.val(mailvalue);

    if (userMail.val() == "") {
        userMail.css("border", "2px solid red");
        
    } else {
        userMail.removeAttr("style");  
    };
});

userNumber.keyup(function(event) {
    
    if (userNumber.val() == "") {
        userNumber.css("border", "2px solid red");
        
    } else {
        userNumber.removeAttr("style");  
    };
});

userText.keyup(function(event) {
    if (userText.val() == "") {
        userText.css("border", "2px solid red");
        
    } else {
        userText.removeAttr("style");  
    };
});

