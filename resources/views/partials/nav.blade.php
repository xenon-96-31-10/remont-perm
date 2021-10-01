<nav class="navbar navbar-expand-lg navbar-dark bg-transparent bg-xs fixed-top">
  <button class="navbar-toggler m-0 p-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" id="hamburger"></span>
  </button>
  <a class="navbar-brand m-0 p-0" href="{{route('home')}}">
    <div class="p-0">
      <p class="m-0 mb-1 p-0 brandtext ">Uspeh</p>
      <p class="m-0 mb-1 p-0 brandtext ">Remont</p>
    </div>
  </a>
  <div class="collapse navbar-collapse justify-content-center m-0 p-0" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link @if(Route::is('aboutus'))text-dark @endif" href="{{route('home')}}">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(Route::is('aboutus'))text-dark @endif" href="{{route('aboutus')}}">О нас</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(Route::is('aboutus'))text-dark @endif" href="{{route('contacts')}}">Контакты</span></a>
      </li>
    </ul>
  </div>
  <div class="justify-content-end m-0 p-0">
    <div class="d-block d-sm-none">
      <a class="phone" href="tel:+74994042123">
        <i class="fas fa-phone-square"></i>
      </a>
    </div>
    <div class="d-none d-sm-block">
      <a class="phonenum" href="tel:+73422737635">
        +7(342)<span>273-76-35</span>
      </a>
    </div>
  </div>
</nav>
