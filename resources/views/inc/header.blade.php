<header class="bg-dark">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="logo">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="/storage/img/logo.jpg" alt="Логотип">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-xl-end justify-content-lg-end" id="navbar1">
        <div class="menu-nav">
          <ul class="navbar-nav menu-icons">
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="tel:+79373843388">
                <img src="/storage/img/значки/phone.png" alt="Значок телефона"> 8-937-384-33-88
              </a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('about') }}#map">
                <img src="/storage/img/значки/location.png" alt="Значок местоположения"> Как добраться</a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('price') }}#sale">
                <img src="/storage/img/значки/sale.png" alt="Значок скидок"> Скидки и акции</a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('about') }}#faq">
                <img src="/storage/img/значки/question.png" alt="Значок вопросов"> Вопрос / ответ</a>
            </li>
          </ul>
          <ul class="navbar-nav menu-nav-main justify-content-between">
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('about') }}">О парке</a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('price') }}">Цены</a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('operating-mode') }}">Режим работы</a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('gallery') }}">Галерея</a>
            </li>
            <li class="nav-item d-flex justify-content-center">
              <a class="nav-link" href="{{ route('news') }}">Новости</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>