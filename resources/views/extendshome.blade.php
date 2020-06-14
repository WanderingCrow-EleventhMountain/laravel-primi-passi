@extends('home')

@section('header')
  <header>
    HEADER IMPORTATO CON YELD
    <a href="{{Route('about')}}">Vai ad ABOUT</a>
    <a href="{{Route('contacts')}}">Vai ad CONTACTS</a>
  </header>
@endsection

@section('pory')
  <div class="pory">
    @for ($i = 0; $i < 13; $i++)
      HOME<br>
    @endfor
    (stampato con un for)
  </div>
@endsection
