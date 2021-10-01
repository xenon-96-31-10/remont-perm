@extends('layouts.app')

@section('title')Успех - ремонт квартир в Перми | Контакты@endsection
@section('keywords')Контактные данные Успех Ремонт Квартир Строительная компания онлайн в Перми Пермь@endsection
@section('description')Поскольку мы первая строительная компания онлайн, мы не вызываем Вас в офис и не тратить Ваше время в пустую. Вам достаточно оставить заявку на обратный звонок или позвонить, а остальное доверьте нам.@endsection

@section('styles')
<style media="screen">
.header{
 background-image: url('storage/images/10.jpg');
 background-attachment: fixed;
 background-size: cover;
 background-position: center;
}
</style>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid header vh-100">
  <div class="container mt-4 mt-sm-2">
    <h1 class="title">Ремонт квартир в Перми</h1>
    <p class="lead">Как найти "Успех"</p>

    <a href="#callback" class="btn btn-lg btn-secondary">Заявка</a>
  </div>
</div>
<div class="container my-3">
  <div class="row">
    <div class="col-12 col-sm-6">
      <div class="card">
        <div class="card-body">
          <h1 class="title">Путь к "Успеху"</h1>
          <h6 class="card-subtitle mb-2 text-muted">Контактные данные компании</h6>
          <hr>
          <p class="lead">
            Мы первая строительная компания онлайн, Вам не надо приезжать к нам в офис и тратить на это время.
            Наша компания стремиться создать все условия для Вас!
          </p>
          <hr>
          <h2>Для Ваших услуг</h2>
          <a class="card-link phonenum text-dark" href="tel:+73422737635">
            +7(342)<span>273-76-35</span>
          </a>
          <a class="card-link phonenum text-dark" href="tel:+79223793059">
            +7(922)<span>379-30-59</span>
          </a>
          <hr>
          <a href="mailto:infostroiperm@ya.ru" class="card-link phonenum text-dark">infostroiperm@ya.ru</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 mt-2 mt-sm-2">
        <img class="featurette-image img-fluid rounded mx-auto" src="{{asset('storage/images/12.jpg')}}" alt="Электрик за работой" title="Электрик за работой">
    </div>
  </div>



</div>
@endsection

@section('scripts')@endsection
