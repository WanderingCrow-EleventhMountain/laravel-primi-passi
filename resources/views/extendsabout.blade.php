@extends('about')

@section('header')
  <header>
    HEADER IMPORTATO CON YELD
    <a href="{{Route('home')}}">Vai ad HOME</a>
    <a href="{{Route('contacts')}}">Vai ad CONTACTS</a>
  </header>
@endsection

@section('pory')
  <div class="pory">
    @for ($i = 0; $i < 13; $i++)
      ABOUT<br>
    @endfor
    (stampato con un for)
  </div>
@endsection
