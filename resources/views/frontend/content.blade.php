@extends('layouts.app')

@section('content')
    <div class="row mt-5 mx-auto">
        @foreach ($contents as $content)
            <div class="col-4 pb-3">
                <img src="{{$content->url}}" alt="">
                <div class="card-title">{{$content->name}}</div>
            </div>
        @endforeach
    </div>
    <div class="mx-auto" style="width: max-content">{{ $contents->links() }}</div>
@endsection