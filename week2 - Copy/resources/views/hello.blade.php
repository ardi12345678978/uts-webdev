@extends('layout.mainlayout')

@section('title', 'Contact')

@section('main_content')
    <h1 class="mt-5">CONTACT</h1>
    <h3>Hello My Name is <?= $myname ?></h3>
    <h4>Contact me at <a class="text-primary"><?= $email ?></a></h4>
@endsection

