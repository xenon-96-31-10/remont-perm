<div class="footer" id="callback">
  <div class="container">
    <div class="row pt-5 vh-100 align-items-center">
      <div class="col-12 col-sm-4">
        <h1 class="title">Убедитесь лично в качестве нашей работы</h1>
        <p class="lead">Оставьте заявку на обратный звонок и наши менеджеры в скором времени свяжуться с Вами</p>
      </div>
      <div class="col-12 col-sm-8 bg-dark rounded p-3">
        <h1 class="text-white">Заявка на обратный звонок</h1>
        <hr>
        <form action="{{route('send')}}" method="post">
          @csrf
          <div class="input-group input-group-lg mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="prepend-name">Ваше имя</span>
            </div>
            <input type="text" class="form-control" name="name" id="name" placeholder="Алексей" value="{{old('name')}}"aria-label="Ваше имя" aria-describedby="prepend-name" required>
          </div>
          <div class="input-group input-group-lg mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="prepend-phone">Ваш телефон</span>
            </div>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="" aria-label="Ваше имя" aria-describedby="prepend-name" required>
          </div>
          <hr>
          @if (count($errors) > 0)
            <div class="alert alert-danger" id='errors'>
              <button type="button" class="close" data-dismiss="alert">×</button>
              <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            </div>
          @endif
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id='success'>
              <strong>{{ $message }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <button type="submit" class="btn btn-lg btn-light">Отправить</button>
          <small id="checkList" class="form-text text-muted">
            Нажимая отправить, Вы соглашаетесь на ообработку своих персональных данных.
          </small>
        </form>
      </div>
    </div>
  </div>
</div>
