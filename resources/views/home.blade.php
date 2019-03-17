@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>

                <div class="panel-body">
                    <table id="myTable"  class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NOME</th>
                                <th>DESCRIÇÃO</th>                                
                                <th>VALOR</th>       
                                <th>MÉTODO DE PAGAMENTO</th>       
                            </tr>
                        </thead>
                        <tbody>
                                @foreach(Auth::user()->marketPlace->products as $p)
                            <tr>
                                <td>
                                {{$p->name}}
                                </td>
                                <td>
                                {{$p->description}}
                                </td>
                                <td>
                                 {{number_format($p->value, 2)}}
                                </td>
                                <td>
                                {{$p->paymentMethod}}
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
