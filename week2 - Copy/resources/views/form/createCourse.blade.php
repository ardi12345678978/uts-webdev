@extends('layout.mainlayout')

@section('title', 'Course')

@section('main_content')
<h1 class="mt-5">penjaga warnet</h1>

<form action="{{ route('courses.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nama lengkap</label>
                    <input type="text" class="form-control" name="code" required>
                </div>                
                <div class="form-group">
                    <label for="">Nama Panggilan</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">no telpon</label>
                    <input type="text" class="form-control" name="lecturer" required>
                </div>
                <div class="form-group">
                    <label for="">jaga berapa jam</label>
                    <input type="number" class="form-control" name="sks" required>
                </div>
                <div class="form-group">
                    <label for="">tambahan</label>
                    <input type="text" class="form-control" name="description" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                </div>
            </div>
        </div>        
    </div>
</form>
@endsection

