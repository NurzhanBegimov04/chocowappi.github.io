<!doctype html>
<html class="n" lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>ChocoWappi.kz</title>
        <link rel="shortcut icon" href="assets/img/chocoICO.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/media-style.css">
        <link rel="stylesheet" href="./css/preloader.css">
    </head>

<body>
    <header>
        <div class="container">
            <div class="Hcon">
                <div class="Hcol1-lgo">
                    <div id="logo">
                        <a href="/">
                            <img src="assets/img/Logot.png" alt="logoCHO" title="ШОКОЛАД Интернет-магазин"  class="img-r">
                        </a>
                    </div>
                </div>
            <div class="ne-1">
                <div  id="izdey">
                    <form>
                        <input type="text" name="izdey" placeholder="Іздеу...">
                        <button type="submit" name="submit" class="lupabut" value="Search"></button>
                    </form>
                </div>
            </div>
            <label class="button-1" for="checkbox">
                <div class="btn open"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </label>
            </div>
                <div style="text-align: right;" class="collapse">
                  <ul class="mnavb-nav">
                    <li><a href="">      <span>Шоколад түрлері      <i style="color:rgb(255, 77, 0);" class="fa fa-bolt" aria-hidden="true"></i></span></a></li>
                    <li><a href="" class="mnb">Жеткізу        </a></li>
                    <li><a href="" class="mnb">Қалай жеткізу  <i class="develery"></i></a></li>
                    <li><a href="#v" class="mnb">Байланыстар    </a></li>
                  </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="mainlist"  id="mainlist">
        <div class="mainlist1">
            <input type="checkbox" id="checkbox">
            <div class="panel">
                <div class="list-group2">
                    <a href="" class="list-group-item">Жаңа шаблондар</a>
                    <a href="" class="list-group-item">Танымал шаблондар</a>
                    <a href="" class="list-group-item">Сыйлыққа идеялар</a>
                    <a href="" class="list-group-item">Мейрамдық</a>
                    <a href="" class="list-group-item">Ойындар</a>
                    <a href="" class="list-group-item">Фильмдер</a>
                    <a href="" class="list-group-item">Аниме</a>
                    <a href="" class="list-group-item">Әзілдер</a>
                    <a href="" class="list-group-item">Жұмыс және хобби</a>
                    <a href="" class="list-group-item">Музыка</a>
                    <a href="" class="list-group-item">Иллюстрациялар</a>
                </div>
                <label class="panel-btn-close" for="checkbox">+</label>
            </div>

            <div class="list-group">
              <a href="" class="list-group-item">Жаңа шаблондар</a>
              <a href="" class="list-group-item">Танымал шаблондар</a>
              <a href="" class="list-group-item">Сыйлыққа идеялар</a> 
              <a href="" class="list-group-item">Мейрамдық</a>
              <a href="" class="list-group-item">Ойындар</a>
              <a href="" class="list-group-item">Фильмдер</a>
              <a href="" class="list-group-item">Аниме</a>
              <a href="" class="list-group-item">Әзілдер</a>
              <a href="" class="list-group-item">Жұмыс және хобби</a>
              <a href="" class="list-group-item">Музыка</a>
              <a href="" class="list-group-item">Иллюстрациялар</a>
            </div>

              <div class="cards">
              <?foreach ($products as $product):?>
                <div class="card product-parent" data-id="<?=$product['id']?>">
                  <div class="card__top">
                    <a href="" class="card__image">
                      <img src='<?=$product['image']?>' alt=""/>
                    </a>
                  </div>
                  <div class="card__bottom">
                    <a href="#" class="card__title"><?=$product['name']?></a>
                    <div class="prices__add">
                      <div class="price"><?=$product['price']?><small>₸</small></div>
                      <button class="add section_add1">Сатып алу</button>
                    </div>
                  </div>
                </div>
                <!-- l -->
                <?endforeach?>
            </div>
        </div>
    </div>


    <div class="modal modal1">
      <div class="modal__main">
          <div class="topic-text">Ваш заказ</div>
                <div class="error"></div>
                <input type="hidden" name="product-id"/>
          <form action="#" id = "elements">
            <div class="input-box">
              <input class="inp-0" name="fio" type="text" id="NF" placeholder="имя и фамилия" />
            </div>  
            <div class="input-box">
              <input class="inp-0" name="email" type="email" placeholder="Введите email" />
            </div>
            <div class="input-box">
              <input class="inp-1" name="phone" type="tel" id="tel" placeholder="Введите телефон" />
              <div title="Укажите есть ли на номере" class="check_whatsapp">
                <input class="check_0" name="whatsapp" type="checkbox" value="Yes" onclick="document.querySelector('.icon_wsp').style.color = (this.checked) ? 'GREEN' : '';">
                <ion-icon class="icon_wsp" name="logo-whatsapp"></ion-icon>
              </div>
            </div>
            <div class="input-box">
            <input class="inp-0" list="dish" name="comment" placeholder="Название шоколада">
            <datalist id="dish">
              <option value="«Казахстанский» Шоколад Рахат">
              <option value="Alpen Gold">
              <option value="Milka">
              <option value="Nestlé">
              <option value="Ozera">
            </datalist>
          </div>

            <div class="send">
              <button class="send_button" type=button>Отправить</button>
            </div>
          </form>
        <button class="modal__close">&#10006;</button>
      </div>
    </div>

  <footer class="footer-distributed" id="v">
    <div class="footer-left">
      <div class="logo">
        <img src="assets/img/Logot.png" alt="logoCHO" title="Choco-Wappi"  class="img-r">
      </div>
      <p class="footer-links">
        <a href="#" class="link-1">Басты бетке</a>
        <a href="#">Жеткізу</a>
        <a href="#">Баға беру</a>
        <a href="#">Құпиялылық саясаты</a>
        <a href="#">FAQ</a>
      </p>
    </div>
  
    <div class="footer-center">
      <div>
        <i class="fa fa-phone"></i>
        <p>+7 747 183 77 68 </p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">ChocoWappi@gmail.com</a></p>
      </div>
    </div>
  
    <div class="footer-right">
      <p class="footer-company-about">
        <span>Біз туралы</span>
        Плиткалық шоколадты орауыштарды шығаратын кіші компания
      </p>
      <p class="coct">Біз әлеуметтік желілерде</p>
      <div class="footer-icons">
        <a href="https://www.instagram.com/"></i><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="https://www.whatsapp.com/?lang=ru"></i><ion-icon name="logo-whatsapp"></ion-icon></a>
        <a href="https://www.tiktok.com/"></i><ion-icon name="logo-tiktok"></ion-icon></a>
        <a href="https://vk.com/"></i><ion-icon name="logo-vk"></ion-icon></a>
      </div>
    </div>
  
    <p class="footer-company-name">Choco-Wappi © 2023</p>
  </footer>
        <div id="page-preloader" class="preloader">
          <div class="loader">
            <img src="assets/img/R3FM.gif" alt="">
          </div>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/preloader.js"></script>
<script src="assets/js/slide.js"></script>
<script src="assets/js/modalwin.js"></script>

    </body>
</html>

<!-- https://ionic.io/ionicons    -->
<!-- https://www.youtube.com/watch?v=BsJpgq_NHEE&list=PLRyNHBd0Xu-GIlygTKlEroamsH4-vje5m -->