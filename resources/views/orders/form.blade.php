<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    body{
        background-color: #f7de40;
    }
    header{
      background-color: #ffffff;
      text-align: center;
      padding-top: 30px;
      padding-bottom: 30px;
      box-shadow: 0 0 5px 0 #000000;
    }
    main{
      margin-top: 20px;
    }
    .title{
      font-size: 30px;
      text-shadow: 2px 2px #f7de40;
    }
    .form-horizontal{
        background-color: #ffffff;
        background-position: center;
        padding-top: 30px;
        padding-bottom: 125px;
        margin-right: 100px;
        margin-left: 100px;
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: center;
        border: solid 1px #000000;
      }
    .fill-form{
        text-align: center;
        font-size: 20px;
      }
    .choose{
        font-weight: bold;
        font-size: 20px;
      }
    .btn-confirm{
        background-color:  #f7de40;
        font-weight: bold;
        padding-right: 15px;
        padding-left: 15px;
      }
</style>
<body>
  <header>
    <div class="title">
      NERINGOS ŠIMTALAPIAI
    </div>
  </header>
  <main>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="fill-form">
              UŽPILDYKITE UŽSAKYMO FORMĄ
            </div>
            <form class="form-horizontal" action="{{ route('storeOrders') }}" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="name">Vardas:</label>
                <input id="name" type="text" name="name" value="">
              </div>
              <div class="form-group">
                <label for="email">El. paštas:</label>
                <input id="email" type="text" name="email" value="">
              </div>
              <div class="form-group">
                <label for="telnumber">Tel. numeris:</label>
                <input id="telnumber" type="text" name="telnumber" value="">
              </div>
              <p class="choose">Pasirinkite:</p>
              <div class="form-group">
                <label for="stuffing">Pageidaujamas įdaras:</label>
                  {!! Form ::radio('stuffing','aguonų') !!} Aguonų
                  {!! Form ::radio('stuffing','slyvų') !!} Dž. slyvų
              </div>
              <div class="form-group">
                <label for="quantity">Kiekis:</label>
                <input id="quantity" type="text" name="quantity" value="" onkeyup="mutiply()">
              </div>
              <div class="form-group">
                <label for="deldate">Pageidaujama pristatymo data:</label>
                <input id="deldate" type="text" name="deldate" value="">
              </div>
              <div class="form-group">
                <label for="delivery">Pristatymas:</label>
                  {!! Form ::radio('delivery','pats') !!} Atsiimsiu pats
                  {!! Form ::radio('delivery','atvežti') !!} Pristatyti į namus
              </div>
              <div class="form-group">
                <label for="total">Užsakymo kaina:</label>
                <input id="total" type="text" name="total" value=""> Eur
              </div>
              <div class="">
                <a href="#"><button type="submit" class="btn-confirm">Patvirtinti</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </body>
  </html>
