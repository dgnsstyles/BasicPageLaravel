@extends('layouts.app')

@section('content')

    <h1>Mensajes</h1>
    @if(count($messages) > 0 )
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Nombre: {{$message->name}}</li>
                <li class="list-group-item">Email: {{$message->email}}</li>
                <li class="list-group-item">Mensaje: {{$message->message}}</li>
            </ul>
        @endforeach
    @endif
@endsection
@section('sidebar')
    @parent
    <p>Esto esta añadido al sidebar</p>
@endsection