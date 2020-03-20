@extends('Layouts.layout')



@section('conteudo')
<div class="container pt-4">

<a href="{{route('customer.create')}}" class="btn btn-secondary">Adicionar</a> <br><br>

<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>TIPO IDENTIFICAÇÃO</th>
                        <th>NÚMERO DE IDENTIFICAÇÃO</th>
                        <th>EMAIL</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>    
 

</table>

</div>   
    @endsection
    




  <script>
  $('.deleteButton').on('click', function (e) {
        var url = $(this).data('url');
        var idCustomer = $(this).data('idCustomer');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            method: 'DELETE',
            url: url
        });
        $.ajax({
            data: {
                'idCustomer': idCustomer,
            },
            success: function (data) {
                console.log(data);
                if (data['status'] ?? '' == 'success') {
                    if (data['reload'] ?? '') {
                        location.reload();
                    }
                } else {
                   console.log('error');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
      });  
  </script>
  

 