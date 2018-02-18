<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neringos</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <style>
    body{
      background-color: #f7de40;
      margin: 0;
      padding: 0;
    }
    header{
      background-color: #ffffff;
      text-align: center;
      padding-top: 30px;
      padding-bottom: 30px;
      box-shadow: 0 0 5px 0 #000000;
    }
    footer{
      background-color: #ffffff;
      padding-top: 10px;
      padding-bottom: 10px;
      text-align: center;
      line-height: 5px;
      box-shadow: 0 0 5px 0 #000000;
      width: 100%;
      bottom: 0px;
      position: absolute;
    }
    .title{
      font-size: 30px;
      text-shadow: 2px 2px #f7de40;
    }
    .about{
      margin-top: 50px;
      font-size: 30px;
      text-align: center;
    }
    .hello{
      font-size: 40px;
      font-weight: bold;
    }
    .buttons{
      text-align: center;
      margin-top: 30px;
    }
    .button{
      background-color:  #ffffff;
      text-align: center;
      font-size: 30px;
      font-weight: bold;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    .order{
      padding-left: 85px;
      padding-right: 85px;
    }
    .view{
      padding-left: 10px;
      padding-right: 10px;
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
        <div class="about">
          <p class = "hello" >Sveiki, mielieji,</p>
          <p>Sako, kad gyvenimas nevisad būna saldus, ir nevisad viskas eina "kaip per sviestą"...</p>
          <p>Jei galvojate, kad tokią padėtį reikia taisyti - mielai jums padėsiu. Padėsiu ir jei norėsit gyvenimą švęsti.</p>
          <p>Pati esu kilus iš Alytaus krašto, ir iš ten paveldėjau nuostabiausią ypatingo totoriško saldėsio ŠIMTALAPIO gaminimo receptą.</p>
          <p>Tad jei planuojate šventę ar tiesiog gyvenime saldumo pritrūko, tiesiog užpildykite užsakymo formą ir saldumynas jus pasieks ne vėliau kaip per tris dienas, nes jį gaminu tik pagal individuolius užsakymus, tad šviežumą garantuoju. Puikų skonį - taip pat.</p>
        </div>
        <div class="row buttons">
          <div class="col-md-6">
            <a href="{{ url('/orders/form')}}"><button class="button order" type="btn" name="button">Užsakyti</button> </a>
          </div>
            <div class="col-md-6">
              <a href="{{ url('/orders')}}"><button class = "button view"type="btn" name="button">Peržiūrėti užsakymus</button> </a>
            </div>

        </div>
      </div>
    </main>
    <footer>
      <div class="contacts">
        <p>Neringa</p>
        <p>El. p: neringa@neringa.lt</p>
        <p>Tel. nr: +370 2 35 98756</p>
      </div>
    </footer>
  </body>
</html>
