<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помощь Животным</title>
    <link rel="stylesheet" href="../css/regist.css">
</head>
<body>
    <header>
        <div id="logo">
            <span><a href="../site.html" class="about-items1" title="Помощь-животным" >Помощь-животным</a></span>
        </div>

        <div id="about">
            <a href="organization.html" class="about-items" title="О организации" >О организации</a>
            <a href="fond.html" class="about-items" title="Приюты" >Приюты</a>
            <a href="svaz.html" class="about-items" title="Обратная связь" >Обратная связь</a>
            <?php
              if($_COOKIE['user'] == ''):
            ?>
            <a href="regist.php" class="about-items" title="Вход/Регистрация" >
              Вход/Регистрация
            </a>
            <?php else: ?>
              <span style="color:#76b852;"><?=$_COOKIE['user'] ?></span> <a href="exit.php" class="about-items" title="Выйти" >
            Выйти</a>
            <?php endif; ?>
        </div>
    </header>

    <div id="top">
        <h1>Вход/Регистрация</h1>
        <h3></h3>
      </div>
    
      <div class="login-page" id="opopo">
        <div class="form">
          <form class="register-form" action="check.php" method="post">
            <input type="text" id="name" name="name" placeholder="Имя"/>
            <input type="password" id="password" name="password" placeholder="Пароль"/>
            <input type="text" id="email" name="email" placeholder="Почта"/>
            <button>Зарегистрироваться</button>
            <p class="message">Уже зарегистрирован? <a href="#">Войти</a></p>

          </form>
         <form class="login-form" action="auth.php" method="post">
            <input type="text" id="name" name="name" placeholder="Имя"/>
            <input type="password" id="password" name="password" placeholder="Пароль"/>
            <button>Войти</button>
            <p class="message">Не зарегистрирован? <a href="#">Создать аккаунт</a></p>
          </form>
        </div>
      </div>
      <script>
      $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
      </script>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        function slowScroll(id) {
          $('html, body').animate({
            scrollTop: $(id).offset().top
          }, 500);
        }
    
        $(document).on("scroll", function () {
          if($(window).scrollTop() === 0)
            $("header").removeClass("fixed");
          else
            $("header").attr("class", "fixed");
        });

        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
      </script>
    </body>
    <div class="footer">
      <span id="year"> 
                       Помощь-животным..<br>
        Телефон: +79234990889 Gmail: Dendoglond@gmail.com
      </span>
    </div>
    </html>