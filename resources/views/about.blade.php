@extends('layouts/main')

@section('container')
    <h3>{{ $name }}</h3>
    <h3>{{ $email }}</h3>
    <img src={{ $image }} alt={{ $image }} width="200">
@endsection
