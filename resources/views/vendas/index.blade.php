@extends('Layouts.layout')


@section('conteudo')
<body> 


<div class="container pt-4">
<!-- select de clientes e busca do período-->
    <div class="row">
        <div class="col">
            <div class="form-group">
                    <form action="/action_page.php">
                    <select class="form-control" id="customer" name="customer">
                    <option value="clientes">Clientes</option>


                </select>
                </form>

            </div>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Período</span>
                </div>
                    <input type="text" class="form-control">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </div>
            </div>
            
        </div>   
    </div>  <!-- fim select de clientes e busca do período-->

    <!--tabela de vendas -->
    <div style="padding-top: 50px">
    <div class="card">
        <div class="card-header">
          <strong>  Tabela de Vendas </strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Produto</th>
                    <th>Data</th>
                    <th>Valor</th>
                    <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                    <th scope="row"></th>
                        <td>aaaa</td>
                        <td></td>
                        <td>
                            <a href="{{route('sale.create')}}" class="btn btn-outline-success btn-sm" >Editar</a>
                        </td>
                    </tr>
              
                </tbody>
            </table>     
        </div>
    </div>
    </div>


    <!--tabela resultado vendas-->
    <div style="padding-top: 50px">
    <div class="card">
        <div class="card-header">
          <strong>  Resultado das Vendas </strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Status</th>
                    <th>Quantidade</th>
                    <th>Valor Total</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Vendidos</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                    <th scope="row">Cancelados</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                    <th scope="row">Devoluções</th>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>     
        </div>
    </div>
   </div>


</div>


</body>
@endsection
 