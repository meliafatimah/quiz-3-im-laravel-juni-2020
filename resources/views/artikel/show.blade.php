@extends('layouts.master')

@section('content')
    
    <div class="m-5">
        <h1>Judul : {{$artikel[0]->judul}}</h1>
        <p>slug : {{$artikel[0]->slug}}</p>
        <p>{{$artikel[0]->isi}}</p>
        <p>
            @foreach(explode(" ",$artikel[0]->tag) as $ids)
                <a href="" class="btn btn-sm btn-info">{{$ids}}</a>
            @endforeach
        </p>
    </div>
@endsection