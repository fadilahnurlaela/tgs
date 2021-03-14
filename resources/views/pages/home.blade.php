@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    Ini adalah halaman home <br/>
    Hello, {!! $name[0] !!} <br/>

    <x-alert theme="success" closeable="true">
        Ini adalah alert
    </x-alert>

    <br/>

    @foreach($fruits as $fruit)
        @if($loop->first)
            Ini adalah pengulangan pertama <br/>
        @endif
        {{ $fruit }} <br/>
        @if($loop->last)
            Ini adalah pengulangan terakhir <br/>
        @endif
    @endforeach
    
@stop

@section('js')
    <script>
        console.log('Hello');
    </script>
@stop