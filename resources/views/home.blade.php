@extends('layouts.app')

@section('maincontent')

<main>
    <h1>ciao</h1>
    <ul>
        @foreach ($movies as $movie)
           <li>{{}}</li>
        @endforeach
   </ul>
</main>

@endsection
