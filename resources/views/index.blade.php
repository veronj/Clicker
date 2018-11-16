@extends('layouts.master')

@section('content')
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <span><h1>User Resources</h1> <h3>Day : {{ $user->day }}</h3> {{ date("H:i:s") }}</span>
        <hr>
        @if(Session('success'))
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div id="charge-message" class="alert alert-success">
                    {{ Session('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if(Session('error'))
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div id="charge-message" class="alert alert-danger">
                {{ Session('error') }}
                </div>
            </div>
        </div>
    @endif
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
                @csrf
            </form>
        </div>
    </div>

    @foreach($sectors->chunk(3) as $sectorChunk)
    <div class="row">
        @foreach($sectorChunk as $sector)
        <div class="col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>{{ $sector->name }}</h3>
              <a href="{{ route('attackSector', ['id' => $sector->id ]) }}" class="btn btn-primary pull-right" role="button">Attack</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    @endforeach
    
<div class="row">
<form id="endTurn" action="{{ route('endTurn') }}" method="post" >
    @csrf
    <button type="submit">endTurn</button>
</form>
</div>
@endsection

@section('scripts')

    <script type="text/javascript">
    setTimeout(function(){
        document.getElementById("endTurn").submit();
        
    },10000);
    </script>

@endsection