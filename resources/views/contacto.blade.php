@extends('layouts.app')

@section('content')

        <h1>Contacto</h1>
        {!! Form::open(['url' => 'contacto/submit']) !!}
        <div class="form-group">
            {{Form::label('nombre', 'tu nombre')}}
            {{Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Escribe tu nombre'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Tu Correo Electronico')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Tu correo electronico'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Danos tu opinion')}}
            {{Form::textarea('message', '', ['class' => 'form-control' , 'placeholder' => 'Escribenos tu opinion'])}}
        </div>
        <div>
            {{Form::submit('Enviar', ['class' => 'btn  btn-lg btn-danger'])}}
        </div>
        {!! Form::close() !!}

@endsection