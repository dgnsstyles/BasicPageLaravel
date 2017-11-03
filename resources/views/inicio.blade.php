@extends('layouts.app')

@section('content')

        <h1>hello world</h1>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequuntur cumque deserunt dicta dolorem exercitationem explicabo facilis illum inventore libero modi nisi nulla, omnis quae quibusdam quis voluptatibus voluptatum.</p>
 @endsection
@section('sidebar')
    @parent
    <p>Esto esta añadido al sidebar</p>
@endsection