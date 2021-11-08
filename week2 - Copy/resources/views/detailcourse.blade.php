@extends('layout.mainlayout')

@section('title', 'Detail Course')

@section('main_content')
<h1 class="mt-5">Detail Operator</h1>

<div class="my-4 p-5 bg-primary text-white rounded">
    <h1>{{ $course['name'] }}</h1>
    <p>Nama Lengkap : {{ $course['code'] }}</p>
    <p>No Telpon : {{ $course['lecturer'] }}</p>
    <p>Jaga berapa jam : {{ $course['sks'] }}</p>
    <p>tambahan : {{ $course['description'] }}</p>
</div>

<a class="btn btn-success" href="{{ route('courses.index') }}">Back</a>
@endsection