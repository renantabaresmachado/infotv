@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="text-align: center" class="panel-heading">Cadastro de Produto</div>

                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data"  method="POST" action="{{ route('productStore') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="market_place_id" value="{{Auth::user()->marketPlace->id }}">
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="value" class="col-md-4 control-label">Valor</label>

                            <div class="col-md-6">
                                <input id="value" type="text    " class="form-control" name="value"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod" class="col-md-4 control-label">Método de Pagamento:</label>

                            <div class="col-md-6">
                                <input id="paymentMethod" type="text" class="form-control" name="paymentMethod"  required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descrição: </label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description"  required autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="imagem" class="col-md-4 control-label">Imagem:</label>

                            <div class="col-md-6">
                                <input id="imagem" type="file" class="form-control" name="imagem"  required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
