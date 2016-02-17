    </div><!--content-->
  </div><!--wrapper-->
  <footer class="l-siteFooter" role="contentinfo">
    <div class="b-footerInner">
      <div class="b-sharing">
        <!-- <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script> -->
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
  <div class="l-popup -lang_rus">
    <div class="b-popup">
      <div class="btn_close"></div>
      <div class="b-popup__header">Как очистить кеш в моём браузере</div>
      <ul class="b-browsersMenu">
        <li class="b-browsersMenu__item -type_MSIE <?php if ($browser->getBrowser() == 'Internet Explorer') echo '-state_active' ?>" data-browser="MSIE">Internet Explorer</li>
        <li class="b-browsersMenu__item -type_moz <?php if ($browser->getBrowser() == 'Firefox') echo '-state_active' ?>" data-browser="moz">Mozilla Firefox</li>
        <li class="b-browsersMenu__item -type_chrome <?php if ($browser->getBrowser() == 'Chrome') echo '-state_active' ?>"  data-browser="chrome">Google Chrome</li>
        <li class="b-browsersMenu__item -type_opera <?php echo $opera; ?>" data-browser="opera">Opera</li>
        <li class="b-browsersMenu__item -type_safari <?php if ($browser->getBrowser() == 'Safari') echo '-state_active' ?>"  data-browser="safari">Safari</li>
        <li class="b-browsersMenu__item -type_edge <?php if ($browser->getBrowser() == 'Edge') echo '-state_active' ?>"  data-browser="edge">Edge</li>
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
        <div class="b-popup__content  -type_edge">
          <p>
            <span class="b-popup__num">1</span><span class="step">Откройте <span class="bold">"Microsoft Edge Browser</span> и нажмите на <span class="bold">Hub icon</span> (Три горизонтальные линии в верху сайдбара) и затем кликните на <span class="bold">History Icon</span></span></span>
          </p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Затем нажмите <span class="bold">“Clear all history“</span></span>
            <img src="img/userfiles/howto-edge-1.png" alt="How to clear cache in Safari" width="640" height="425">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Теперь выберите <i>“Cookies and saved website data”</i> и <i>“Cached data and files”</i> и нажмите <span class="bold">Clear.</span></span>
            <img src="img/userfiles/howto-edge-2.png" alt="How to clear cache in Safari" width="640" height="425">
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="l-popup -lang_eng">
    <div class="b-popup">
      <div class="btn_close"></div>
      <div class="b-popup__header">How to clear the cache in my browser</div>
      <ul class="b-browsersMenu">
        <li class="b-browsersMenu__item -type_MSIE <?php if ($browser->getBrowser() == 'Internet Explorer') echo '-state_active' ?>" data-browser="MSIE">Internet Explorer</li>
        <li class="b-browsersMenu__item -type_moz <?php if ($browser->getBrowser() == 'Firefox') echo '-state_active' ?>" data-browser="moz">Mozilla Firefox</li>
        <li class="b-browsersMenu__item -type_chrome <?php if ($browser->getBrowser() == 'Chrome') echo '-state_active' ?>"  data-browser="chrome">Google Chrome</li>
        <li class="b-browsersMenu__item -type_opera <?php echo $opera; ?>" data-browser="opera">Opera</li>
        <li class="b-browsersMenu__item -type_safari <?php if ($browser->getBrowser() == 'Safari') echo '-state_active' ?>"  data-browser="safari">Safari</li>
        <li class="b-browsersMenu__item -type_edge <?php if ($browser->getBrowser() == 'Edge') echo '-state_active' ?>"  data-browser="edge">Edge</li>
      </ul>
      <div class="l-popup__content j-customScroll">
        <div class="b-popup__content -type_MSIE">
          <p><span class="b-popup__num">1</span><span class="step">Open the <span class="bold">"Tools"</span> menu;</span></p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Click <span class="bold">"Internet Options"</span>;</span>
            <img src="img/userfiles/howto-ie-1.png" alt="How to clear cache in IE" width="240" height="315">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">In the <span class="bold">"General"</span> tab on <span class="bold">"Browsing history"</span> block push <span class="bold">"Delete..."</span>;</span>
            <img src="img/userfiles/howto-ie-2.png" alt="How to clear cache in IE" width="420" height="515">
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">Check the boxes next to <span class="bold">"Temporary Internet files and Website Files"</span> and <span class="bold">"Cookies and website data"</span>;</span>
            <img src="img/userfiles/howto-ie-3.png" alt="How to clear cache in IE" width="400" height="527">
          </p>
          <p><span class="b-popup__num">5</span><span class="step">Confirm the deletion.</span></p>
        </div>
        <div class="b-popup__content -type_moz">
          <p>
            <span class="b-popup__num">1</span><span class="step">In the browser menu select <span class="bold">"Options"</span>;</span>
            <img src="img/userfiles/howto-firefox-1.png" alt="How to clear cache in Firefox" width="300" height="563">
          </p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Open the section <span class="bold">"Advanced"</span>;</span>
          </p>
          <p><span class="b-popup__num">3</span><span class="step">Click on the <span class="bold">"Network"</span>;</span></p>
          <p>
            <span class="b-popup__num">4</span><span class="step">In the <span class="bold">"Cached Web Content""</span> block click <span class="bold">"Clear Now"</span>.</span>
            <img src="img/userfiles/howto-firefox-2.png" alt="How to clear cache in Firefox" width="532" height="570">
          </p>
        </div>
        <div class="b-popup__content -type_chrome">
          <p><span class="b-popup__num">1</span><span class="step">Open the browser menu;</span></p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Select <span class="bold">"Settings"</span> item;</span>
            <img src="img/userfiles/howto-chrome-1.png" width="350" height="575" alt="How to clear cache in Chrome">
          </p>
          <p><span class="b-popup__num">3</span><span class="step">Click <span class="bold">"Show advanced settings"</span>;</span>
          <p><span class="b-popup__num">4</span><span class="step">In the <span class="bold">"Privacy"</span> section push <span class="bold">"Clear browsing data..."</span>;</span>
          </p>
          <p>
            <span class="b-popup__num">5</span><span class="step">In the dialog box select <span class="bold">"The beginning of time"</span> and check the <span class="bold">"Cached images and files"</span>;</span>
            <img src="img/userfiles/howto-chrome-2.png" width="620" height="487" alt="How to clear cache in Chrome">
          </p>
          <p><span class="b-popup__num">6</span><span class="step">Confirm the deletion.</span></p>
        </div>
        <div class="b-popup__content -type_opera -type_webkit">
          <div class="b-popup__browserVer -type_presto">
            <p><span class="b-popup__num">1</span><span class="step">Open the browser menu;</span></p>
            <p><span class="b-popup__num">2</span><span class="step">Select <span class="bold">"Tools"</span> and then <span class="bold">"Preferences"</span>;</span></p>
            <p>
              <span class="b-popup__num">3</span><span class="step">Click on the <span class="bold">"Advanced"</span> tab;</span>
            </p>
            <p><span class="b-popup__num">4</span><span class="step">In the left menu select  <span class="bold">"History"</span>;</span></p>
            <p>
              <span class="b-popup__num">5</span><span class="step">In line <span class="bold">"Dics cache"</span> press the <span class="bold">"Empty Now"</span> button.</span>
              <img src="img/userfiles/howto-opera.png" alt="How to clear cache in Opera" width="340" height="275">
            </p>
          </div>
          <div class="b-popup__browserVer -type_webkit">
            <p><span class="b-popup__num">1</span><span class="step">Open the browser menu;</span></p>
            <p>
              <span class="b-popup__num">2</span><span class="step">On the drop-down menu select <span class="bold">"More Tools"</span> and then <span class="bold">"Clear browsing data"</span>;</span>
              <img src="img/userfiles/howto-operaWebkit.png" alt="How to clear cache in Opera" width="518" height="528">
            </p>
            <p>
              <span class="b-popup__num">3</span><span class="step">In the dialog box check the boxes opposite that data types you want to delete;</span>
            </p>
            <p><span class="b-popup__num">4</span><span class="step">Using the menu at the top of the window, specify the time to delete the data. Select <span class="bold">"From the beginning"</span> to delete all the data;</span></p>
            <p><span class="b-popup__num">5</span><span class="step">Click <span class="bold">"Clear browsing history"</span>.</span></p>
          </div>
        </div>
        <div class="b-popup__content  -type_safari">
          <p>
            <span class="b-popup__num">1</span><span class="step">Move the cursor to the <span class="bold">"Safari"</span> menu of your browser. In the list that appears, select <span class="bold">"Preferences"</span>;</span>
            <img src="img/userfiles/howto-safari-1.png" alt="How to clear cache in Safari" width="535" height="310">
          </p>
          <p>
            <span class="b-popup__num">2</span><span class="step">In the Settings window, click the <span class="bold">"Advanced"</span>;</span>
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Put the box next to  <span class="bold">"Show Develop menu in menu bar"</span>. Close the settings;</span>
            <img src="img/userfiles/howto-safari-2.png" alt="How to clear cache in Safari" width="640" height="425">
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">In the <span class="bold">"Develop"</span> menu, select <span class="bold">"Empty Caches"</span>.</span>
            <img src="img/userfiles/howto-safari-3.png" alt="How to clear cache in Safari" width="475" height="500">
          </p>
        </div>
        <div class="b-popup__content  -type_edge">
          <p>
            <span class="b-popup__num">1</span><span class="step">Open <span class="bold">"Microsoft Edge Browser</span> and click on the <span class="bold">Hub icon</span> (three horizontal lines at top bar) and then click <span class="bold">History Icon</span></span></span>
          </p>
          <p>
            <span class="b-popup__num">2</span><span class="step">Now click <span class="bold">“Clear all history“</span></span>
            <img src="img/userfiles/howto-edge-1.png" alt="How to clear cache in Safari" width="640" height="425">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Now select <i>“Cookies and saved website data”</i> and <i>“Cached data and files”</i> иand click Clear. That’s it.<span class="bold">Clear.</span></span>
            <img src="img/userfiles/howto-edge-2.png" alt="How to clear cache in Safari" width="640" height="425">
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <?php else: ?>
  
  <div class="l-popup -lang_rus">
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
  
  <div class="l-popup -lang_eng">
    <div class="b-popup">
      <div class="btn_close"></div>
      <div class="b-popup__header">How to clear the cache in my browser</div>
      <ul class="b-browsersMenu">
        <li class="b-browsersMenu__item -type_msafari <?php if ($detect->version('iOS')) echo '-state_active' ?>" data-browser="msafari">iOS Safari</li>
        <li class="b-browsersMenu__item -type_mchrome <?php if ($detect->version('Android')) echo '-state_active' ?>"  data-browser="mchrome">Chrome</li>
        <li class="b-browsersMenu__item -type_mMSIE <?php if ($detect->version('Windows Phone')) echo '-state_active' ?>"  data-browser="mMSIE">IE Mobile</li>
      </ul>
      <div class="l-popup__content j-customScroll">
        <div class="b-popup__content  -type_msafari">
        <?php if ($detect->version('iPad')): ?>
          <p><span class="b-popup__num">1</span><span class="step">Open the device settings;</span></p>
          <p><span class="b-popup__num">2</span><span class="step">Select the <span class="bold">"Safari"</span> item in the app list and press the cleaning history and temporary files of web sites button;</span>
            <img src="img/userfiles/howto-ipad-1.png" alt="How to clear cache in iOS Safari" width="375" height="230">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Confirm the deletion.</span>
            <!--<img src="img/userfiles/howto-ipad-2.png" alt="How to clear cache in iOS Safari" width="375" height="210">-->
          </p>
        <?php else: ?>
          <p><span class="b-popup__num">1</span><span class="step">Open the device settings;</span></p>
          <p><span class="b-popup__num">2</span><span class="step">Select the <span class="bold">"Safari"</span> item in the app list;</span>
            <img src="img/userfiles/howto-ipod-1.png" alt="How to clear cache in iOS Safari" width="320" height="340">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Press the Clear history and Website Data.</span>
            <img src="img/userfiles/howto-ipod-2.png" alt="How to clear cache in iOS Safari" width="320" height="445">
          </p>
        <?php endif; ?>
          
        </div>
        <div class="b-popup__content  -type_mchrome">
          <p>
            <span class="b-popup__num">1</span><span class="step">Open the browser menu;</span>
          </p>
          <p><span class="b-popup__num">2</span><span class="step">Select <span class="bold">"History"</span> item;</span>
            <img src="img/userfiles/howto-mchrome-1.png" alt="How to clear cache in Chrome" width="170" height="255">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Press the <span class="bold">"Clear browsing data..."</span> in the dialog window;</span>
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">In the dialog box check the boxes opposite that data types you want to delete;</span>
            <img src="img/userfiles/howto-mchrome-2.png" alt="How to clear cache in Chrome" width="400" height="290">
          </p>
          <p>
            <span class="b-popup__num">5</span><span class="step">Confirm the deletion.</span>
          </p>
        </div>
        <div class="b-popup__content  -type_mMSIE">
          <p><span class="b-popup__num">1</span><span class="step">Open the browser menu;</span></p>
          <p><span class="b-popup__num">2</span><span class="step">Select <span class="bold">"Settings"</span> item;</span>
            <img src="img/userfiles/howto-wp-1.png" alt="How to clear cache in IE Mobile" width="240" height="228">
          </p>
          <p>
            <span class="b-popup__num">3</span><span class="step">Press the <span class="bold">"Delete history"</span> button on the settings screen;</span>
            <img src="img/userfiles/howto-wp-2.png" alt="How to clear cache in IE Mobile" width="240" height="400">
          </p>
          <p>
            <span class="b-popup__num">4</span><span class="step">Confirm the deletion in the dialog window.</span>
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