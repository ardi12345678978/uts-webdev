@extends('layout.mainlayout')

@section('title', 'Project')

@section('main_content')
<h1 class="mt-5">Edit Data</h1>

<form action="{{ route('projects.update', $project->id) }}" method="POST" class="mt-4">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="project" value="{{ $project->project }}" required>
                </div>                
                <div class="form-group">
                    <label for="">Jenis</label>
                    <select name="semester" class="form-control" id="">
                        <option value="{{ $project->semester }}">{{ $project->semester }}</option>
                        @if ($project->semester == "vip")
                            <option value="regular">regular</option>
                        @else
                            <option value="regular">regular</option>
                        @endif                                             
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nomer Komputer</label>
                    <input type="text" class="form-control" name="mata_kuliah" value="{{ $project->mata_kuliah }}" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Waktu Bermain</label>
                    <input type="text" class="form-control" name="description" value="{{ $project->description }}" required>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                </div>
            </div>
        </div>        
    </div>
</form>
@endsection

