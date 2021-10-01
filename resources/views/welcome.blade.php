@extends('layouts.app')

@section('title')Успех - ремонт квартир в Перми@endsection
@section('keywords')Успех Ремонт Квартир Строительная компания онлайн в Перми Пермь@endsection
@section('description')Компания "Успех" предоставляет первоклассные услуги по ремонту для достойных людей в Перми, которые ценят себя и свое время@endsection

@section('styles')
<style media="screen">
.header{
 background-image: url('storage/images/header.jpg');
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
    <p class="lead">Комфорт и спокойствие</p>

    <a href="#callback" class="btn btn-lg btn-callback">Заявка</a>
  </div>
</div>
<div class="container my-3">
  <div class="row">
    <div class="col-12 col-sm-4">
      <div class="sticky-top">
        <h1 class="title mb-2">Первая онлайн строительная компания</h1>
        <p class="lead">Наша компания "Успех" предоставляет первоклассные услуги для достойных людей, которые ценят себя и свое время.</p>
        <h2>Качество уже заложено в ДНК компании</h2>
      </div>
    </div>
    <div class="col-12 col-sm-8">
        <img class="featurette-image img-fluid mx-auto" src="{{asset('storage/images/2.jpg')}}" alt="Интерьер квартиры после ремонта" title="Интерьер квартиры после ремонта">
    </div>
  </div>

  <div class="row my-3">
    <div class="col-12 col-sm-4 order-2 order-sm-1">
        <img class="featurette-image img-fluid mx-auto" src="{{asset('storage/images/6.jpg')}}" alt="Интерьер квартиры после ремонта" title="Интерьер квартиры после ремонта">
    </div>
    <div class="col-12 col-sm-8 order-1 order-sm-2">
      <h1 class="title">Наши преимущества</h1>
      <p class="lead mt-5"><i class="fas fa-plus"></i> Штат компании полностью стабилизированный и главное автономный, мы с уверенностью можем завершить все этапы работ, а если мы что-то не знаем, то мы знаем кто может!</p>
      <p class="lead mt-5"><i class="fas fa-plus"></i> Мы понимаем, что самое ценное в этой жизни и мы с большой уверенностью готовы сберечь ваше время! Потрать  его с выгодой!</p>
      <p class="lead mt-5"><i class="fas fa-plus"></i> Самое изумительное и редко встречающийся момент - это впечатление блаженства на всех этапах работы и мы готовы его вам подарить!</p>
      <p class="lead mt-5"><i class="fas fa-plus"></i> По завершению всех этапов работ мы приглашаем ведущую клининговую компанию, чтобы очистить строительные следы.</p>
    </div>

  </div>

</div>
@endsection

@section('scripts')@endsection
