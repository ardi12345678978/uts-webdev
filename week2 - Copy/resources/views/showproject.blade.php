@extends('layout.mainlayout')

@section('title', 'Detail Projects')

@section('main_content')
<h1 class="mt-5">Data Detail</h1>

<div class="my-4 p-5 bg-primary text-white rounded">
    <h1>{{ $project['project'] }}</h1>    
    <p>User: {{ $project['code'] }}</p>
    <p>Jenis: {{ $project['semester'] }}</p>
    <p>Tambahan: {{ $project['description'] }}</p>
</div>

<a class="btn btn-success" href="{{ route('projects.index') }}">Back</a>
@endsection