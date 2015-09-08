/**
 *  Authors: Pasha Bondarenko, John Minor, Evgeny Makeev, Maryna Pidlisna, Alexander Lyashenko
*/

function initCache() {
  $('.b-mainControls__item').click(function(){
    if ($('.b-pageIll').hasClass('processed')) return false;
    
    var rand = Math.round(Math.random()*10);
    //с шансом в 10% меняем персонажа и его фразу после смены
    if(rand > 9) {
      $('.b-character.j-current').click();
      setTimeout(function(){
        changeContent({lamp: true, question: true, skipCharChange: true});
      }, 400);
      return false;
    } else {
      changeContent({lamp: true, question: true});
    }
  });
  $('.b-pageIll__lamp').click(function(){
    lightAndTalk();
    changeContent({lamp: true});
  });
}

function lightAndTalk() {
  var timedId = 0;
  if ($('.b-pageIll').hasClass('processed')) {
    return false;
  }  
  else {
    //метка состояния разговора
    $('.b-pageIll').addClass('processed');
    $('.b-pageIll__lamp').addClass('-state_active');
    setTimeout(function (){
      $('.mouth').hide();
      $('.b-pageIll__lamp').removeClass('-state_active');
      $('.b-pageIll').removeClass('processed');
    }, 1000);  
    timerId =  setInterval(function(){
      $('.mouth').toggle();
    },100);
    setTimeout(function (){
     clearInterval(timerId);
    }, 800);
  }
}

function changeCharacter() {
  $('.b-character').click(function(){
    //если чел говорит, то не реагировать
    if ($('.b-pageIll').hasClass('processed')) {
      return false;
    }
    // а если молчит, то поехали
    else {
      var curChar = $(this);
      var charNum = $(this).index('.b-character'); //номер кликнутого персонажа
      var charLength = $('.b-character').length; // количество персонажей
      if (charNum + 1 < charLength) {
        setCharacter(charNum + 1);
      }
      else {
        setCharacter(0);
      }
    }
  });
}

function setCharacter(num) {
  $('.b-character.j-current').animate({top: 600}, 100).removeClass('j-current');
  $('.b-character').eq(num).animate({top: 0}, 300).addClass('j-current');
}

function changeContent(obj) {
  var que, ans,  character, answers;
  var queIndx = 0, ansIndx, isRand = 1;
  var rand;
  var lamp        = obj.lamp || false;
  var question    = obj.question || false;
  var curQuestion = $('.b-pageContent__header > span').html();
  var curAnswer   = $('.b-pageContent__devanswerInner > span').html();
  character = $('.j-current').attr('data-char');
  
  if(lamp) {
    ansIndx = Math.floor(Math.random()*answersCharacter[character].length);
    var randomAnswer = answersCharacter[character][ansIndx];
    while (randomAnswer == curAnswer) {
      ansIndx = Math.floor(Math.random()*answersCharacter[character].length);
      randomAnswer = answersCharacter[character][ansIndx];
    }
    ans = randomAnswer;
  }
  if(question) {
    //если есть комбинации вопрос-ответ
    if(arrObj.length) {
      // рандомное число 1-10
      rand = Math.round(Math.random()*10); 
      //если больше 7 берем массив привязанных вопросов-ответов
      if(rand > 7) {
        var indx = Math.floor(Math.random()*arrObj.length);
        while(curQuestion == arrObj[indx].que) {
          indx = Math.floor(Math.random()*arrObj.length);
        }
        que = arrObj[indx].que;
        ans = arrObj[indx].ans;
        queIndx = indx;
        ansIndx = indx;
        isRand = 0;
      }
    }
    //иначе меняем вопрос
    else {
      queIndx = Math.floor(Math.random()*questions.length);
      var randomQuestion = questions[queIndx];      
      while (randomQuestion == curQuestion){
        queIndx = Math.floor(Math.random()*questions.length);
        randomQuestion = questions[queIndx];
      }
      que = randomQuestion;
      isRand = 1;
    }
  }
  changeQuestion(que);
  changeAnswer(ans);
  window.location.hash = lang + '/#'+character + '/' + queIndx + '/' + ansIndx + '/' + isRand;
}
var lang = 'rus';
function changeAnswer(ans) {
  var answer = ans || false;
  if(answer) {
    $('.b-pageContent__devanswerInner > span').fadeOut('300');
    setTimeout(function(){
      $('.b-pageContent__devanswerInner > span').html(ans);
    }, 400);
    $('.b-pageContent__devanswerInner > span').fadeIn();
  }
}

function changeQuestion(que) {
  var question = que || false;
  if(question) {
    if (!($('.b-pageIll').hasClass('processed'))) {
      lightAndTalk();
    }
    $('.b-pageContent__header > span').fadeOut('300');
    setTimeout(function(){
      $('.b-pageContent__header > span').html(que);
    }, 400);
    $('.b-pageContent__header > span').fadeIn();
  }
}
//вопрос
var questionsRus = [
  'Фон до сих пор<br/> старый', 'Почему не видно правок?', 'Я просил сделать светлее', 'Синия линия до сих пор зеленого цвета', 'Почему картинки старые?',
  'Не вижу<br/> ваших правок', 'Где готово?<br/> Я не вижу!', 'У меня ничего не обновилось', 'Я же просил осветлить синий блок', 'Где<br/> правки??',
  'Вы обещали сделать это еще вчера!', 'Почему я не вижу свою фотографию?', 'Я на сайте с утра, там ничего нет!', 'Жму "обновить", ничего нового!'
];
var questionsEng = [
  'The background is still not updated.', 'Why do edits not appear?', ' I requested to do lighter', 'The blue line is still green', 'Why the images are still old?',
  'I don\'t see your updates', ' Is it done?!<br/> I don\'t see!', ' I don\'t see any updates on the page', 'I asked to make the blue button lighter', 'There are the updates??',
  'You\'d promised to finish yesterday!', 'Why don\'t I see my photo on the site?', 'I don\'t see the updates during all this day', 'I click "Refresh", but nothing happens'
];
var questions = questionsRus;

//привязанные ответ-вопрос
var arrObj = [
//  {
//    que: 'Почему не видно правок?',
//    ans: 'Джоффри отравят на его свадьбе'
//  },
//  {
//    que: 'Вопрос №2',
//    ans: 'Ответ №2'
//  },
//  {
//    que: 'Вопрос №3',
//    ans: 'Ответ №3'
//  }
];

//ответ. 
/*
  Комментарий ниже убирает ошибку "is better written in dot notation" для jshint.
*/

/* jshint sub: true */
var answersRus = {
  a: [
    "Стоит почистить кеш",
    "У вас кеш.",
    "А, ну это надо кеш чистить",
    "Ясно, это кеш.",
    "Ага, тогда почистите кеш",
    "Я понял. Проблема в кеше. Вам нужно его почистить",
    "Да это же кеш!",
    "Это кеш. Определенно, кеш",   
    "Может, вы забыли почистить кеш?",
    "Нажмите Ctrl+F5",
    "Позовите вашего специалиста по очистке кеша",
    "Чистите временные файлы в браузере!",
    "Смените браузер и почистите кеш"
  ],
  y: [
    "Кеш почистить нужно вам",
    "Кеш у вас.",
    "В кеше проблема. Его почистить нужно вам",
    "А, ну это надо кеш чистить",
    "Ясно, это кеш.",
    "Ага, тогда почистите кеш",
    "Да это же кеш!",
    "Еще одна смешная фраза про кеш",
    "Кеш. Или не кеш. Нет места попытке",
    "У нас тут сайт про кеш",
    "У вас высокий уровень мидихлориан",
    "Это кеш. Определенно, кеш",
    "Вот почему неудача. Кеш"
  ],
  r: [
    "Стоит почистить кеш",
    "У вас кеш.",
    "А, ну это надо кеш чистить",
    "Ясно, это кеш.",
    "Ага, тогда почистите кеш",
    "Я понял. Проблема в кеше. Вам нужно его почистить",
    "Да это же кеш!",
    "Еще одна смешная фраза про кеш",
    "У нас тут сайт про кеш",
    "А еще в персонажах есть Йода",
    "Может, вы забыли почистить кеш?",
    "Нажмите Ctrl+F5",
    "Позовите вашего специалиста по очистке кеша",
    "Чистите временные файлы в браузере!",
    "Смените браузер и почистите кеш"    
  ]
};

var answersEng = {
  a: [
    "It is necessary to clean the cache",
    "This is cache!",
    "Oh, you have to clear the cache",
    "Clear! This is cache.",
    "Well, then clear the cache",
    "I get it! Cache is the problem, you should clear it.",
    "Yeah, it's the cache!",
    "This is cache. Definitely cache!",   
    "Maybe you forgot to clear the cache?",
    "Push Ctrl+F5",
    "Call the cache cleaner.",
    "Clean the temporary files in your browser!",
    "Change the browser and clear the cache."
  ],
  y: [
    "Clear the cache, you must.",
    "Cache, this is!  Hmmmmmm.",
    "Cache, the problem, it is, clear it, you should. ",
    "Necessary to clean the cache,<br> it is.",
    "Clear! This is cache.",
    "Well, then clear the cache.  Herh herh herh.",
    "Yeah, the cache, it is!",
    "One more funny phrase about cache",
    "The cache. Or not the cache. That is the question.",
    "Site about cache, this is.  Hmmmmmm.",
    "You have a high level<br> of midi-chlorians",
    "Cache, this is.<br>  Definitely cache!",
    "That's why a failure. Cache."
  ],
  r: [
    "It is necessary to clean the cache",
    "This is cache!",
    "Oh, you have to clear the cache",
    "Clear! This is cache.",
    "Well, then clear the cache",
    "I get it! Cache is the problem, you should clear it.",
    "Yeah, it's the cache!",
    "One more funny phrase about cache",
    "This is cache. Definitely cache!",   
    "Maybe you forgot to clear the cache?",
    "Push Ctrl+F5",
    "Call the cache cleaner.",
    "Clean the temporary files in your browser!",
    "Change the browser and clear the cache."
  ]
};

var answersCharacter = answersRus;

function showPopup() {
  $('.b-pageContent__howtoLink').click(function(){
    //$('html, body').animate({scrollTop: 0});
    //$('body').addClass('withPopup');
    $('.overlay, .l-popup.-lang_' + lang).fadeIn();
  });
  var browser = $('.b-browsersMenu__item.-state_active').data('browser');
  $('.b-browsersMenu__item.-type_'+browser).addClass('-state_active');
  if (browser == 'opera') {
    var operaClass = $('.b-browsersMenu__item.-state_active')[0].classList;
    if($.inArray('-type_operaWebkit', operaClass) != -1){
      $('.b-popup__content.-type_'+browser).addClass('-type_webkit');
    }
    else {
      $('.b-popup__content.-type_'+browser).removeClass('-type_webkit').addClass('-type_presto');
    }
  }

  $('.b-popup__content.-type_'+browser).show();
  $('.b-browsersMenu__item').click(function(){
    var thisbrowser = $(this).attr('data-browser');
    $('.b-browsersMenu__item').removeClass('-state_active');
    $('.j-customScroll').mCustomScrollbar('scrollTo', 'top',{scrollInertia: 0});
    $(this).addClass('-state_active');
    $('.b-popup__content').fadeOut();
    $('.b-popup__content.-type_'+thisbrowser).fadeIn();
  });
}
function closePopup() {
$('.btn_close').click(function(){
    $('.overlay, .l-popup').fadeOut();
    lightAndTalk();
    changeContent({lamp: true, question: true});
    setTimeout(function(){
      $('body').removeClass('withPopup');
    }, 700);
});
$(document).keyup(function(e) {
  if (e.keyCode == 27) { 
    $('.overlay, .l-popup').fadeOut();
    $('body').removeClass('withPopup');
  }   
});
}

function initHash() {
  var hash = window.location.hash;
  if (hash == '#howto'){
    $(window).load(function () {
      $('.b-pageContent__howtoLink').click();
    });
  }
  var err = 0;
  
  var items = window.location.hash.split("/");
  var char = items[1],
      questionIndex = items[2],
      answerIndex = items[3],
      isRand = items[4];
  items.forEach(function(elem, indx){
    if(elem === ''){
      err++;
    }
  });
  if(!err && char != 'howto'){
    if(!isRand){
      que = arrObj[questionIndex].que;
      ans = arrObj[answerIndex].ans;
    }
    else{
      que = questions[questionIndex];
      ans = answersCharacter[char][answerIndex];
    }
    lightAndTalk();
    if( typeof que != "undefined") changeQuestion(que);
    if( typeof ans != "undefined") changeAnswer(ans);
    if (
      $('.b-character[data-char="' + char + '"]').length && //если элемент массива существует
      char != $('.b-character.j-current').data('c') //и отличается от текущего
    ) {
      var charNum = $('.b-character[data-char="' + char + '"]').index('.b-character');
      setCharacter(charNum);
    }
  } else {
    $(window).load(function () {
      lightAndTalk();
      changeContent({lamp: true, question: true});
    });
  }
}

function initCustomScroll() {
  $(".j-customScroll").mCustomScrollbar({
    axis:"y",
    theme:"minimal-dark",
    scrollInertia: 100,
    mouseWheel: { preventDefault: true },
    keyboard: { enable: true }
  });
}

function hideDefaultText() {
  $('.b-defaultText').hide();
}

var changeLang = function(){
  $('.js-langSwitcher a').on('click', function(e){
    e.preventDefault();
    var _this = $(this);
    if ( !_this.hasClass('-state_current') ){
      _this.addClass('-state_current').parents('li').siblings().find('a').removeClass('-state_current');
      if ( lang == 'rus' ){ lang = 'eng'; } else { lang = 'rus'; }
      if ( _this.hasClass('-state_eng') ){
        answersCharacter = answersEng;
        questions = questionsEng;
        $('.js-refresh').trigger('click');
        $('body').removeClass('-page_lang_ru').addClass('-page_lang_en');
      }
      else {
        answersCharacter = answersRus;
        questions = questionsRus;
        $('.js-refresh').trigger('click');
        $('body').removeClass('-page_lang_en').addClass('-page_lang_ru');
      }
    }
  });
  
  var langHash = window.location.hash;
  langHash = langHash.split('/');
  langHash = langHash[0];
  
  if ( langHash == '#rus' ){
    answersCharacter = answersRus;
    questions = questionsRus;
    $('.js-langSwitcher a.-state_rus').addClass('-state_current').parents('li').siblings().find('a').removeClass('-state_current');
    $('body').removeClass('-page_lang_en').addClass('-page_lang_ru');
  }
  else if ( langHash == '#eng' ){
    answersCharacter = answersEng;
    questions = questionsEng;
    $('.js-langSwitcher a.-state_eng').addClass('-state_current').parents('li').siblings().find('a').removeClass('-state_current');
    $('body').removeClass('-page_lang_ru').addClass('-page_lang_en');
  }

  if (window.location.hash.length && window.location.hash == '#eng'){
    lang = 'eng';
  } else {
    lang = 'rus';
  }
  window.location.hash = '';
  
};

function getScript(url, holder){
  $.get(url).always(function() {
    var script = document.createElement('script');
    script.src = url;
    holder.prepend(script);
  });
}

$(document).ready(function () {
  changeLang();
  
  hideDefaultText();
  initHash();
  initCache();
  changeCharacter();
  showPopup();
  closePopup();
  initCustomScroll();
  
  if ($('html').hasClass('-device_desktop')) { // or -device_tablet, -device_mobile
    //... write some code
  }
  console.log(History.getState());
});

$(window).load(function () {
  getScript('//yastatic.net/share/share.js', $('.b-sharing'));
});
$(window).resize(function() {

});

$(window).load(function () {
  
});