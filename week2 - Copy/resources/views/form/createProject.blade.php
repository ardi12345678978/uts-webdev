@extends('layout.mainlayout')

@section('title', 'Project')

@section('main_content')
<h1 class="mt-5">Main</h1>

<form action="{{ route('projects.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="project" required>
                </div>
                <div class="form-group">
                    <label for="">Main Berapa Jam</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis</label>
                    <select name="semester" class="form-control" id="">
                        <option value="regular">regular</option>
                        <option value="vip">vip</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">komputer berapa</label>
                    <input type="text" class="form-control" name="mata_kuliah" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark" required>
                </div>
            </div>
        </div>        
    </div>
</form>
@endsection

