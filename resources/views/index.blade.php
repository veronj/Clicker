@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <span><h1>User Resources</h1> <h3>Day : {{ $user->day }}</h3></span>
    
    <hr>
    <ul>
    <li>Food: {{ $user->food }}</li>
    <li>Metal: {{ $user->metal }}</li>
    <li>Coal: {{ $user->coal }}</li>
    </ul>
</div>
</div>
@endsection

@section('scripts')

    <script type="text/javascript">
    setTimeout(function(){
        location.reload();
    },50000);
    </script>

@endsection