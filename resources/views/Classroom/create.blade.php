@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="{{route('Classroom.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">lunes:</label>
            <input type="text" name="aula_lunes" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">martes:</label>
            <input type="text" name="aula_martes" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">miercoles</label>
            <input type="text" name="aula_miercoles" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">jueves:</label>
            <input type="text" name="aula_jueves" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="" class="form.label">viernes:</label>
            <input type="text" name="aula_viernes" class="form-control" id="">
        </div>


        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
