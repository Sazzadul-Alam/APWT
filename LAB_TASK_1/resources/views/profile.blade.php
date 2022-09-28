@extends('layouts.app')
@section('content')

<h1>Welcome to our company</h1>
<p>ID: {{$id}}</p>
<p>product name: {{$p_name}}</p>

<h2>Company Name</h2>
@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection