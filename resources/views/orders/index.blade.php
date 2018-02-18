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
    .contacts{
      text-align: center;
      line-height: 10px;
    }
    .title{
      font-size: 30px;
      text-shadow: 2px 2px #f7de40;
    }
    .custom-search-form{
      width: 300px;
      margin-bottom: 20px;
      margin-left: 135px;
    }
    .orders-title{
      text-align: center;
    }
    .panel-default{
      margin-left: auto;
      margin-right: auto;
    }
    .pages-numbers{
      margin-left: 135px;
    }
    .home{
      color: #000000;
      margin-left: 50px;
      float: left;
    }
    .home a{
      color: #000000;
      text-decoration: none;
      font-size: 20px;
    }
  </style>
  <body>
    <header>
      <div class="home">
        <a href="{{ url('/')}}">Į pradinį puslapį</a>
      </div>
      <div class="title">
        NERINGOS ŠIMTALAPIAI
      </div>
    </header>
    <main>
      <div class="container">
        {!! Form::open(['method'=>'GET','url'=>'orders','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" name="search" placeholder="Search...">
        </div>
        {!! Form::close() !!}
        <div class="orders-title">
          <h2>Užsakymai ({{$count}})</h2>
        </div>
        <div class="row orders-table">
          <div class="panel panel-default">
            <table class="table">
              <thead>
                <th>Vardas</th>
                <th>El. paštas</th>
                <th>Tel. numeris</th>
                <th>Įdaras</th>
                <th>Kiekis</th>
                <th>Pristatymo data</th>
                <th>Pristatymo būdas</th>
                <th>Kaina Eur</th>
              </thead>
              <tbody>
              @foreach($orders as $order)
              <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->telnumber}}</td>
                <td>{{$order->stuffing}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->deldate}}</td>
                <td>{{$order->delivery}}</td>
                <td>{{$order->total}}</td>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="pages-numbers">
            {{ $orders->links() }}
        </div>
      </div>
    </main>
  </body>
</html>
