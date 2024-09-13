@extends('layouts.base')
@section('head-links')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    <main>
        <div class="intro">
            <div class="contents">
                <h3>Hello! I'm Sanchez, Leonard Paulo</h3>
                <h5>I'm a Software Developer</h5>
            </div>
        </div>
        <div class="person">
            <img src="{{ asset('images/sample-person.png') }}" alt="">
        </div>
    </main>
@endsection
