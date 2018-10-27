@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h1>User Resources</h1>
    
    <hr>
    <ul>
    <li>Food: {{ $user->food }}</li>
    <li>Metal: {{ $user->metal }}</li>
    <li>Coal: {{ $user->coal }}</li>
    </ul>
</div>
</div>
@endsection