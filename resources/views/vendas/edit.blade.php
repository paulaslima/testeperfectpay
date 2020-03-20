@extends('Layouts.layout')

@section('conteudo')
<body>
<div class="container pt-4">

  <div style="padding-top: 50px">
    <div class="card">
      <div class="card-header card text-center">
        <strong>  Tabela de Vendas </strong>
      </div>
      <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Produto</span>
                  </div>
                  <input type="text" class="form-control">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Data</span>
                  </div>
                <input type="text" class="form-control">
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Valor</span>
                  </div>
                <input type="text" class="form-control">
                </div>   
      </div><!--fim cardbody-->
                <div class="card-footer text-right">
                    <a href="" class="btn btn-outline-success btn-sm" >Filtrar</a>
                </div> <!--fim footer-->        
    </div> <!--fim card-->
  </div> <!--fim padding-->  
</div> <!--fim container-->


</body>
@endsection
