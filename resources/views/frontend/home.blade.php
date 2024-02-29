@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-6">
            test
        </div>
        <div class="col-6">
            test
        </div>
        <div class="col-6">
            test
        </div>
    </div>
    
    @foreach ($events as $event)
        <div>Название ивента - {{$event->name}}</div>
        <div>Дата проведения - {{$event->readableDate()}}</div>
    @endforeach


    <p></p>
    @php
    @endphp
@endsection


