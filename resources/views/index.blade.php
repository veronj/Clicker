@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <span><h1>User Resources</h1> <h3>Day : {{ $user->day }}</h3> {{ date("H:i:s") }}</span>
    
    <hr>
    <ul>
    <li>Food: {{ $user->food }}</li>
    <li>Metal: {{ $user->metal }}</li>
    <li>Coal: {{ $user->coal }}</li>
    <li>Soldiers: {{ $user->soldier }}</li>
    </ul>
</div>
</div>
<div class="row">
<div class="col-md-4 col-md-offset-4">
<form action="{{ route('buyUnits') }}" method="post">
<label for="soldier">Soldier</label>
<input type="text" name="soldier" required>
<button type="submit">Buy</button>
{{ csrf_field() }}
</form>
</div>
</div>
@endsection

@section('scripts')

    <script type="text/javascript">
    setTimeout(function(){
        location.reload();
    },10000);
    </script>

@endsection