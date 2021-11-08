@extends('layout.mainlayout')

@section('title', 'Course')

@section('main_content')
<h1 class="mt-5">Edit Course</h1>

<form action="{{ route('courses.update', $course->code) }}" method="POST" class="mt-4">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" name="code" value="{{ $course->code }}" required>
                </div>                
                <div class="form-group">
                    <label for="">Nama Panggilan</label>
                    <input type="text" class="form-control" name="name" value="{{ $course->name }}" required>
                </div>
                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" class="form-control" name="lecturer" value="{{ $course->lecturer }}" required>
                </div>
                <div class="form-group">
                    <label for="">jaga berapa jam</label>
                    <input type="number" class="form-control" name="sks" value="{{ $course->sks }}" required>
                </div>
                <div class="form-group">
                    <label for="">tambahan</label>
                    <input type="text" class="form-control" name="description" value="{{ $course->description }}" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                </div>
            </div>
        </div>        
    </div>
</form>
@endsection

