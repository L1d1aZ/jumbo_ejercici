@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Formulario  de horas</h2>
    <form action="{{route('hora_grupo.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">hora_lunes:</label>
            <input type="text" name="lunes" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">hora_martes:</label>
            <input type="text" name="martes" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">hora_miercoles</label>
            <input type="text" name="miercoles" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">hora_jueves:</label>
            <input type="text" name="jueves" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">hora_viernes:</label>
            <input type="text" name="viernes" class="form-control" id="">
        </div>


        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection

