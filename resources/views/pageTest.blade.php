






<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Clicker</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::to('css/mycss.css') }}">

@yield('styles')
</head>
<body>


<div class="container-fluid">
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



</div>



  



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@yield('scripts')
</body>
</html>