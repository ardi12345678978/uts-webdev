@extends('layout.mainlayout')

@section('title', 'Course')

@section('main_content')
<div class="row mt-5">
    <div class="col"><h1>Data Operator</h1></div>
    <div class="col d-flex align-items-center justify-content-end">
        <a class="btn btn-success mt-2" href="{{ route('courses.create') }}"><i class="bi bi-arrow-right-circle"></i> Create Course</a>
    </div>
</div>
<table class="table table-striped mt-4">            
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Nama Panggilan</th>
        <th>Nomer Telepon</th>  
        <th>jaga berapa jam</th>       
        <th>deskripsi</th>
        <th>Action</th>
    </tr>

    @foreach($courses as $cou)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $cou['code'] }}</td>
        <td>{{ $cou['name'] }}</td>
        <td>{{ $cou['lecturer'] }}</td>
        <td>{{ $cou['sks'] }}</td>        
        <td>{{ $cou['description'] }}</td>
        <td>
            <div class="d-flex gap-1">
                <a class="btn btn-info btn-sm" href="{{ route('courses.show', $cou->code) }}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{ route('courses.edit', $cou->code) }}">Edit</a>
                <form action="{{ route('courses.destroy', $cou->code) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </div>            
        </td>
    </tr>
    @endforeach
</table>

@endsection

