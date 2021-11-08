@extends('layout.mainlayout')

@section('title', 'Projects')

@section('main_content')
<div class="row mt-5">
    <div class="col"><h1>Daftar yang bermain</h1></div>
    <div class="col d-flex align-items-center justify-content-end">
        <a class="btn btn-success mt-2" href="{{ route('projects.create') }}"><i class="bi bi-arrow-right-circle"></i> Create Project</a>
    </div>
</div>

<table class="table table-striped mt-4">            
    <tr>
        <th>No</th>
        <th>user</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Jumlah Waktu Bermain</th>
        <th>Action</th>
    </tr>

    @foreach($projects as $pro)
    <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $pro['code'] }}</td>
        <td>{{ $pro['project'] }}</td>
        <td>{{ $pro['semester'] }}</td>
        <td>{{ $pro['description'] }}</td>
        <td>
            <div class="d-flex gap-1">
                <a class="btn btn-info btn-sm" href="{{ route('projects.show', $pro->code) }}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{ route('projects.edit', $pro->id) }}">Edit</a>
                <form action="{{ route('projects.destroy', $pro->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm ml-1" type="submit">Delete</button>
                </form>
            </div>            
        </td>
    </tr>
    @endforeach
</table>

@endsection

