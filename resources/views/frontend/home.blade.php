@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-6 pb3">
            test
        </div>
        <div class="col-6 pb3">
            test
        </div>
        <div class="col-6 pb3">
            test
        </div>
    </div>
    @php
        dd($merchendise)
    @endphp
@endsection

{{-- 
    СОДЕРЖАНИЕ
1) Блейд с мини анонсом следующей тусовки -> подключить
2) блок с информацией, типа о нас, опционально сделать контент с админки
3) блок ивентов -> вытащить с контроллера
4) блок контента -> вытащить с контроллера
5) блок мерча -> вытащить с контроллера
--}}