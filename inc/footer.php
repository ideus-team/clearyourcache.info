    </div><!--content-->
  </div><!--wrapper-->
  <footer class="l-siteFooter" role="contentinfo">
    <div class="b-footerInner">
      <div class="b-sharing">
        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="facebook,twitter,vkontakte,odnoklassniki,gplus" data-yashareTheme="counter" data-yashareType="small"></div>
      </div>
      <address class="l-siteCopyright vcard" itemscope itemtype="http://schema.org/Organization">
        <span class="b-siteCopyright">© <?php echo date('Y'); ?>, <a rel="me" itemprop="name" class="b-siteCopyright__link fn n org url work" href="http://ideus.biz" target="_blank">iDeus</a>.</span>
      </address>        
    </div>
  </footer>    
  
  <div class="overlay"></div>
  
  <?php if ($device=='desktop'): ?>
  <?php
    if ($browser->getBrowser() == 'Opera') {
      $versionOpera = explode('.', $browser->getVersion());
      $opera = ($versionOpera[0] < 13) ? '-type_presto -state_active': '-type_operaWebkit -state_active';
    }
    else {
      $opera = '';
    }
  ?>
  <div class="l-popup">
    <div class="b-popup">
      <div class="btn_close"></div>
      <div class="b-popup__header">Как очистить кеш в моём браузере</div>
      <ul class="b-browsersMenu">
        <li class="b-browsersMenu__item -type_MSIE <?php if ($browser->getBrowser() == 'Internet Explorer') echo '-state_active' ?>" data-browser="MSIE">Internet Explorer</li>
        <li class="b-browsersMenu__item -type_moz <?php if ($browser->getBrowser() == 'Firefox') echo '-state_active' ?>" data-browser="moz">Mozilla Firefox</li>
        <li class="b-browsersMenu__item -type_chrome <?php if ($browser->getBrowser() == 'Chrome') echo '-state_active' ?>"  data-browser="chrome">Google Chrome</li>
        <li class="b-browsersMenu__item -type_opera <?php echo $opera; ?>" data-browser="opera">Opera</li>
        <li class="b-browsersMenu__item -type_safari <?php if ($browser->getBrowser() == 'Safari') echo '-state_active' ?>"  data-browser="safari">Safari</li>
      </ul>
      <div class="l-popup__content j-customScroll">
        <div class="b-popup__content -type_MSIE">
          <p><span class="b-popup__num">1</span><span class="step">Откройте меню <span class="bold">"Сервис"</span>;</span></p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Нажмите <span class="bold">"Свойства браузера"</span>;</span>
            <img src="img/userfiles/howto-ie-1.png" alt="How to clear cache in IE" width="240" height="315">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Во вкладке <span class="bold">"Общие"</span> в области <span class="bold">"Журнал браузера"</span> нажмите кнопку <span class="bold">"Удалить..."</span>;</span>
            <img src="img/userfiles/howto-ie-2.png" alt="How to clear cache in IE" width="420" height="515">
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">Установите флажки напротив пунктов <span class="bold">"Временные файлы Интернета и веб-сайтов"</span> и <span class="bold">"Файлы cookie и данные веб-сайтов"</span>;</span>
            <img src="img/userfiles/howto-ie-3.png" alt="How to clear cache in IE" width="400" height="527">
          </p>
          <p><span class="b-popup__num">5</span><span class="step">Подтвердите удаление.</span></p>
        </div>
        <div class="b-popup__content -type_moz">
          <p>
            <span class="b-popup__num">1</span><span class="step">В меню браузера выберите <span class="bold">"Настройки"</span>;</span>
            <img src="img/userfiles/howto-firefox-1.png" alt="How to clear cache in Firefox" width="300" height="563">
          </p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Откройте раздел <span class="bold">"Дополнительные"</span>;</span>
          </p>
          <p><span class="b-popup__num">3</span><span class="step">Перейдите на вкладку <span class="bold">"Сеть"</span>;</span></p>
          <p>
            <span class="b-popup__num">4</span><span class="step">В разделе <span class="bold">"Кэшированное веб-содержимое"</span> щёлкните по кнопке <span class="bold">"Очистить сейчас"</span>.</span>
            <img src="img/userfiles/howto-firefox-2.png" alt="How to clear cache in Firefox" width="532" height="570">
          </p>
        </div>
        <div class="b-popup__content -type_chrome">
          <p><span class="b-popup__num">1</span><span class="step">Откройте меню браузера;</span></p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Выберите пункт <span class="bold">"Настройки"</span>;</span>
            <img src="img/userfiles/howto-chrome-1.png" width="350" height="575" alt="How to clear cache in Chrome">
          </p>
          <p><span class="b-popup__num">3</span><span class="step">Нажмите на <span class="bold">"Показать дополнительные настройки"</span>;</span>
          <p><span class="b-popup__num">4</span><span class="step">В разделе <span class="bold">"Личные данные"</span> нажмите на <span class="bold">"Очистить историю..."</span>;</span>
          </p>
          <p>
            <span class="b-popup__num">5</span><span class="step">В диалоговом окне укажите <span class="bold">"За все время"</span> и <span class="bold">"Изображения и другие файлы, сохраненные в кеше"</span>;</span>
            <img src="img/userfiles/howto-chrome-2.png" width="620" height="487" alt="How to clear cache in Chrome">
          </p>
          <p><span class="b-popup__num">6</span><span class="step">Подтвердите удаление.</span></p>
        </div>
        <div class="b-popup__content -type_opera -type_webkit">
          <div class="b-popup__browserVer -type_presto">
            <p><span class="b-popup__num">1</span><span class="step">Зайдите в главное меню браузера;</span></p>
            <p><span class="b-popup__num">2</span><span class="step">Выберите пункт <span class="bold">"Настройки"</span>, затем - <span class="bold">"Общие настройки..."</span>;</span></p>
            <p>
              <span class="b-popup__num">3</span><span class="step">Перейдите на вкладку <span class="bold">"Расширенные"</span>;</span>
            </p>
            <p><span class="b-popup__num">4</span><span class="step">В меню слева выберите пункт <span class="bold">"История"</span>;</span></p>
            <p>
              <span class="b-popup__num">5</span><span class="step">В строке <span class="bold">"Дисковой кэш"</span> нажмите кнопку <span class="bold">"Очистить"</span>.</span>
              <img src="img/userfiles/howto-opera.png" alt="How to clear cache in Opera" width="340" height="275">
            </p>
          </div>
          <div class="b-popup__browserVer -type_webkit">
            <p><span class="b-popup__num">1</span><span class="step">Зайдите в главное меню браузера;</span></p>
            <p>
              <span class="b-popup__num">2</span><span class="step">В выпадающем меню выберите <span class="bold">"Другие инструменты"</span>, а затем <span class="bold">"Очистить историю посещений"</span>;</span>
              <img src="img/userfiles/howto-operaWebkit.png" alt="How to clear cache in Opera" width="518" height="528">
            </p>
            <p>
              <span class="b-popup__num">3</span><span class="step">В открывшемся диалоговом окне установите флажки напротив типов данных, которые нужно удалить;</span>
            </p>
            <p><span class="b-popup__num">4</span><span class="step">С помощью меню в верхней части окна укажите период удаления данных. Выберите <span class="bold">"С самого начала"</span>, чтобы удалить все данные;</span></p>
            <p><span class="b-popup__num">5</span><span class="step">Нажмите кнопку <span class="bold">"Очистить историю посещений"</span>.</span></p>
          </div>
        </div>
        <div class="b-popup__content  -type_safari">
          <p>
            <span class="b-popup__num">1</span><span class="step">Наведите курсор на пункт <span class="bold">"Safari"</span> меню браузера. В появившемся списке выберите <span class="bold">"Preferences"</span>;</span>
            <img src="img/userfiles/howto-safari-1.png" alt="How to clear cache in Safari" width="535" height="310">
          </p>
          <p>
            <span class="b-popup__num">2</span><span class="step">В окне настроек перейдите на вкладку <span class="bold">"Advanced"</span>;</span>
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Поставьте флажок напротив пункта <span class="bold">"Show Develop menu in menu bar"</span>. Закройте настройки;</span>
            <img src="img/userfiles/howto-safari-2.png" alt="How to clear cache in Safari" width="640" height="425">
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">В разделе <span class="bold">"Develop"</span> меню выберите опцию <span class="bold">"Empty Caches"</span>.</span>
            <img src="img/userfiles/howto-safari-3.png" alt="How to clear cache in Safari" width="475" height="500">
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <?php else: ?>
  
  <div class="l-popup">
    <div class="b-popup">
      <div class="btn_close"></div>
      <div class="b-popup__header">Как очистить кеш в моём браузере</div>
      <ul class="b-browsersMenu">
        <li class="b-browsersMenu__item -type_msafari <?php if ($detect->version('iOS')) echo '-state_active' ?>" data-browser="msafari">iOS Safari</li>
        <li class="b-browsersMenu__item -type_mchrome <?php if ($detect->version('Android')) echo '-state_active' ?>"  data-browser="mchrome">Chrome</li>
        <li class="b-browsersMenu__item -type_mMSIE <?php if ($detect->version('Windows Phone')) echo '-state_active' ?>"  data-browser="mMSIE">IE Mobile</li>
      </ul>
      <div class="l-popup__content j-customScroll">
        <div class="b-popup__content  -type_msafari">
        <?php if ($detect->version('iPad')): ?>
          <p><span class="b-popup__num">1</span><span class="step">Откройте общие настройки;</span></p>
          <p><span class="b-popup__num">2</span><span class="step">В списке приложений выберите <span class="bold">"Safari"</span> и нажмите на кнопку очистки истории и временных файлов веб-сайтов;</span>
            <img src="img/userfiles/howto-ipad-1.png" alt="How to clear cache in iOS Safari" width="375" height="230">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Подтвердите удаление.</span>
            <!--<img src="img/userfiles/howto-ipad-2.png" alt="How to clear cache in iOS Safari" width="375" height="210">-->
          </p>
        <?php else: ?>
          <p><span class="b-popup__num">1</span><span class="step">Откройте общие настройки;</span></p>
          <p><span class="b-popup__num">2</span><span class="step">В списке приложений выберите <span class="bold">"Safari"</span>;</span>
            <img src="img/userfiles/howto-ipod-1.png" alt="How to clear cache in iOS Safari" width="320" height="340">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Нажмите на кнопку удаления истории и временных файлов веб-сайтов.</span>
            <img src="img/userfiles/howto-ipod-2.png" alt="How to clear cache in iOS Safari" width="320" height="445">
          </p>
        <?php endif; ?>
          
        </div>
        <div class="b-popup__content  -type_mchrome">
          <p>
            <span class="b-popup__num">1</span><span class="step">Откройте меню браузера;</span>
          </p>
          <p><span class="b-popup__num">2</span><span class="step">Выберите пункт <span class="bold">"История"</span>;</span>
            <img src="img/userfiles/howto-mchrome-1.png" alt="How to clear cache in Chrome" width="170" height="255">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">В открывшемся окне нажмите на <span class="bold">"Очистить историю..."</span>;</span>
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">В диалоговом окне установите флажки напротив типов данных, которые нужно удалить;</span>
            <img src="img/userfiles/howto-mchrome-2.png" alt="How to clear cache in Chrome" width="400" height="290">
          </p>
          <p>
            <span class="b-popup__num">5</span><span class="step">Подтвердите удаление.</span>
          </p>
        </div>
        <div class="b-popup__content  -type_mMSIE">
          <p><span class="b-popup__num">1</span><span class="step">Откройте меню браузера;</span></p>
          <p><span class="b-popup__num">2</span><span class="step">Выберите пункт <span class="bold">"Настройки"</span>;</span>
            <img src="img/userfiles/howto-wp-1.png" alt="How to clear cache in IE Mobile" width="240" height="228">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">В окне настроек нажмите на <span class="bold">"Удалить журнал"</span>;</span>
            <img src="img/userfiles/howto-wp-2.png" alt="How to clear cache in IE Mobile" width="240" height="400">
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">В диалоговом окне подтвердите удаление.</span>
            <img src="img/userfiles/howto-wp-3.png" alt="How to clear cache in IE Mobile" width="240" height="201">
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <?php endif; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26478537-4', 'auto');
  ga('send', 'pageview');
</script>
<!--[if lt IE 9]>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<![endif]-->
<!--[if gte IE 9]><!-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.0.3.min.js"><\/script>')</script>
<!--<![endif]-->
  <script src="js/scripts.js"></script>
</body>
</html>