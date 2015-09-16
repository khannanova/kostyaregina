<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Свадьба! | Костя и Регина женятся</title>
  <link rel="shortcut icon" href="img/favicon.png">
  <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/basscss-custom.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="Wrap">
  <div class="Hero center white bg-gray bg-cover bg-position">
    <div class="Hero__text h1 py4 md-py5">Костя и Регина <br> женятся</div>
    <div class="Hero__date">26.09.2015 • Казань</div>
  </div>

  <section class="Section center py4 md-py5 px2">

    <div class="Section__heading blue bold">Предложение</div>
    <div class="Section__subhead orange mt1 mb3 caps">ГОНКОНГ, 31.12.2014</div>
    <div class="Section__box">
      <iframe class="fit bg-gray" width="640" height="360" src="https://www.youtube.com/embed/W_-WmLPZlKI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>

  </section>

  <div class="Photo-1 fit bg-cover"></div>

   <section class="Section py4 md-py5 px2">

    <div class="Section__heading center blue bold">Свадьба</div>
    <div class="Section__subhead center orange mt1 mb3 caps">СУББОТА, 26 СЕНТЯБРЯ 2015</div>
    <div class="Section__box center">
      <iframe class="fit bg-gray" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35995.559607797004!2d49.097617000000014!3d55.676426000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTXCsDQwJzM1LjEiTiA0OcKwMDUnNTEuNCJF!5e0!3m2!1sru!2sth!4v1438606928598" width="640" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="blue h3 mt3 mb1 center">
      Отель «Регина» <br>
      поселок Петровский, ул.Центральная. <br>
      Мятный зал. Корпус 4
    </div>


    <div class="h3 bold blue center">
      Начало в <span class="orange">17:00</span>
    </div>

    <div class="W80 mt4 mx-auto clearfix">
      <div class="col col-12 md-col-3 center">
        <span class="blue h3-5 col col-12">Фотосессия</span>
        <span class="orange h3-5 col col-12">13:00</span>
        <span class="blue h4 col col-12">
          С подружками невесты и&nbsp;друзьями жениха.<br>
          Встречаемся у&nbsp;дома невесты.<br>Ул.&nbsp;Горького 19/8-3.<br>Код от&nbsp;ворот в5в4253
        </span>
      </div>
      <div class="col col-12 md-col-3 center mt3 md-mt0">
        <span class="blue h3-5 col col-12 caps">загс</span>
        <span class="orange h3-5 col col-12">15:20</span>
        <span class="blue h4 col col-12">Регистрация в&nbsp;«Чаше». <br> Серебряный зал</span>
      </div>
      <div class="col col-12 md-col-3 center mt3 md-mt0">
        <span class="blue h3-5 col col-12">Автобус в&nbsp;Петровский</span>
        <span class="orange h3-5 col col-12">16:30</span>
        <span class="blue h4 col col-12">Едет через «Кольцо».<br>
          Автобус HIGER, номер Р567КЕ. <br>
          <a href="tel:+79274349816">+79274349816</a> — водитель Ришат</span>
      </div>
      <div class="col col-12 md-col-3 center mt3 md-mt0">
        <span class="blue h3-5 col col-12">Автобус из&nbsp;Петровского</span>
        <span class="orange h3-5 col col-12">23:00</span>
        <span class="blue h4 col col-12">Едет в центр</span>
      </div>
    </div>

    <div class="Width-phone mt4 h4 mx-auto">
      <div class="orange center mt2 mb1">Наши телефоны</div>
      <span class="blue mx-auto clearfix">
        <a class="col col-6 center" href="tel:+79872287745">+79872287745</a>
        <span class="col col-6">Координатор Лиза</span>
        <a class="col col-6 center" href="tel:+79047623404">+79047623404</a>
        <span class="col col-6">Костя</span>
        <a class="col col-6 center" href="tel:+79872051121">+79872051121</a>
        <span class="col col-6">Регина</span>
      </span>
    </div>
  </section>

  <div class="Photo-2 fit bg-cover"></div>

  <section class="Section py4 md-py5 px2 center">
    <div class="Section__heading center blue bold">Фотографии</div>
    <div class="Section__subhead center orange mt1 mb3 caps">#кото26любовь — Наш хештэг в Инстаграме</div>
    <ul class="clearfix mt4" id="instafeed"></ul>
    <div class="center mt4 h4 bg-blue mx-auto rounded white p1" id="load-more">Смотреть еще</div>
  </section>

</div>

<script src="js/instafeed.min.js"></script>
<script>
var loadButton = document.getElementById('load-more');
var feed = new Instafeed({
    get: "tagged",
    tagName: "кото26любовь",
    clientId: "f94addd77fa949bbbfb7b7b324a35776",
    resolution: "standard_resolution",
    template: '<li id="{{id}}" class="instagram_container col col-12 sm-col-6 lg-col-3 px1 py1"> <a href="{{link}}" target="_blank" {caption}} by @{{model.user.username}}" > <img src="{{image}}" alt="{{caption}} by @{{model.user.username}}" class="instagram_image" /> </a> </li>',
    after: function() {
      if (!this.hasNext()) {
        loadButton.setAttribute('disabled', 'disabled');
      }
    }
});

loadButton.addEventListener('click', function() {
  feed.next();
});

feed.run();

</script>

</body>
</html>
