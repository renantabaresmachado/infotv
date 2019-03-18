<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TestInfoTv</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        TestInfoTv
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('login') }}">ACESSAR</a></li>
                        <li><a href="{{ route('marketPlaceRegister') }}">CADASTRAR ESTABELECIMENTO</a></li>
                        @else
                        <li><a href="{{ route('productRegister') }}">CADASTRAR PRODUTO</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->marketPlace->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <h1 style="text-align: center;">Produtos</h1>
            <hr>
            <form class="form form-inline" action="{{route('productsearch')}}" method="POST">
                 {{ csrf_field() }}
                <input class="form-control" type="text" name="name" placeholder="Nome">
                <input class="form-control" type="text" name="value" placeholder="Valor">
                <input class="form-control" type="date" name="created_at" placeholder="Data">
                <select name="marketplace" class="form-control">
                    <option value="">--Selecione a Loja--</option>
                    @foreach($marketplaces as $mkp)
                    <option value="{{$mkp->id}}">{{$mkp->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>
            <hr>
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/productImg/{{$product->imagem}}" height="180px" width="180px" alt="imagem do {{$product->name}}">
                    <div class="caption">
                        <h3>Nome: {{$product->name}}</h3>
                        <h5>Descrição: </h5><p>{{$product->description}}</p>
                        <h3>valor: {{$product->value}}</h3>
                        <h5>Loja: </h5><p>{{$product->marketplace->name}}</p>
                        <small><p>Data do cadastro: {{\Carbon\Carbon::parse($product->created)->format('d/m/Y')}}</p></small>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            <hr>
            <div class="row">
                <div class="col-lg-6 col-offset-6 centered">
                    @if(isset($dataForm))
                    {{ $products->appends($dataForm)->links() }}
                    @else
                    {{ $products->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
