@extends('layouts.default')

@section('header')
<h1>咕嚕靈波~</h1>
@endsection
        
@section('maincontent')
<a href="{{route('contact')}}">Contact me!</a>
<form action="{{route("formsubmitted")}}" method="POST">
    @csrf
    <label for="fullname">Full name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Type your full name!" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" placeholder="Type your e-mail!" required>
    <br>
    <button type="submit">Submit</button>
</form>
@endsection
    
@section('footer')
    <h1>this is the footer!</h1>
@endsection