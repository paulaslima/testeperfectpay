@extends('Layouts.layout')

@section('conteudo')

           
<div class="container pt-4">
    <form method="POST" action="{{route('customer.store')}}" 
            class="form-horizontal form-validate">
            {{csrf_field()}}
                            
        <div class="form-group">

            <label>
                NOME:
            </label></br>
            <input id="name" name="name" type="text" class='form-control' required value='{{old("name")}}'> <br>

            <label>
            TIPO IDENTIFICAÇÃO:
            </label></br>
            <input id="identification_type" name="identification_type" class="form-control" type="text" required value='{{old("identification_type")}}'> </br>

            <label>
            NÚMERO DE IDENTIFICAÇÃO:
            </label></br>
            <input id="identification_number" name="identification_number" class="form-control" type="text"value='{{old("identification_number")}}'> </br>

            <label>
            EMAIL:
            </label></br>
            <input id="email" name="email" class="form-control" type="text"value='{{old("email")}}'> </br>

    
            <br> <br>

            <input type="submit" class="btn btn-success btn" value="Enviar"> 

               
        </div>
    </form>
    </div>
    @endsection