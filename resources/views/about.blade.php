@extends('layouts.app')

@section('title')Успех - ремонт квартир в Перми | О компании@endsection
@section('keywords')О нас Успех Ремонт Квартир Строительная компания в Перми Пермь@endsection
@section('description')Компания "Успех" - это не просто компания предоставляющая услугу, мы создаем впечатление, которое никому не под силу кроме нас, ведь мы первая онлайн строительная компания и мы знаем, что Вам нужно.@endsection

@section('styles')
<style media="screen">
.header{
 background-image: url('storage/images/7.jpg');
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
    <p class="lead">"Успех" - не просто компания</p>

    <a href="#callback" class="btn btn-lg btn-secondary">Заявка</a>
  </div>
</div>
<div class="container my-3">
  <div class="row">
    <div class="col-12 col-sm-5">
      <div class="sticky-top">
        <h1 class="title mb-2">Мы\Успех</h1>
        <p class="lead">Душа компании, заключается в сокровенном дарение впечатлений и главное жизненных удобств.
Наша команда всегда шагает нога в ногу с эволюцией быстрорастущего рынка и мы будем стараться всегда быть первыми, чтоб Вы наши дорогие единомышленники получали только отборное качество услуг!
</p>
        <h2 class="title mb-2">Будем вместе, будем первые!</h2>
      </div>
    </div>
    <div class="col-12 col-sm-7">
        <img class="featurette-image img-fluid mx-auto" src="{{asset('storage/images/3.jpg')}}" alt="Интерьер квартиры после ремонта" title="Интерьер квартиры после ремонта">
    </div>
  </div>

  <div class="row my-3">
    <div class="col-12 col-sm-4 order-2 order-sm-1">
        <img class="featurette-image img-fluid mx-auto" src="{{asset('storage/images/4.jpg')}}" alt="Интерьер квартиры после ремонта" title="Интерьер квартиры после ремонта">
        <img class="featurette-image img-fluid mx-auto mt-2" src="{{asset('storage/images/2.jpg')}}" alt="Интерьер квартиры после ремонта" title="Интерьер квартиры после ремонта">

    </div>
    <div class="col-12 col-sm-8 order-1 order-sm-2">
      <img class="featurette-image img-fluid mx-auto" src="{{asset('storage/images/5.jpg')}}" alt="Интерьер квартиры после ремонта" title="Интерьер квартиры после ремонта">
    </div>

  </div>

</div>
@endsection

@section('scripts')@endsection
