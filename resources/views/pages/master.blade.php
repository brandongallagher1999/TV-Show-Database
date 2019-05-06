<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
            <title>Favourite TV show</title>
            <base href="{{ URL::asset('/') }}" target="_top">
            <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ url('css/ytproject-style.css') }}">
            <script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
    </head>
    <body>
        
        <a class="btn btn-primary" href="{{ url('special')}}" role="button">Special</a>

        @section('content')
        <div class="container">
            <h4>
                <div class="row">
                    <div class="col-sm">
                        TV Show Name
                    </div>
                    <div class="col-sm">
                        Episode 
                    </div>
                    <div class="col-sm">
                        Season
                    </div>
                    <div class="col-sm">
                        Quote 
                    </div>
                    <div class="col-sm">
                        Photo
                    </div>
                    <div class="col-sm">
                        Options
                    </div>
                </div>           
                @if(count($movies) > 0)
                    @foreach($movies as $movie)
                    <div class="row">
                        <div class="col-sm">
                            <small>{{$movie->tvName}}</small>
                        </div>
                        <div class="col-sm">
                            <small>{{$movie->episode}}</small>
                        </div>
                        <div class="col-sm">
                            <small>{{$movie->season}}</small>
                        </div>
                        <div class="col-sm">
                            <small>{{$movie->quote}}</small>
                        </div>
                        <div class="col-sm">
                            Photo
                        </div>
                        <div class="col-sm">
                            <a href="" class="btn btn-primary" role="button">Delete</a>
                            <a href="" class="btn btn-primary" role="button">Update</a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>Nothing found</p>
                @endif

                @endsection
                <div class="row">
                    <div class="col-sm">
                    <a href="" class="btn btn-primary" role="button">Add New</a>
                    </div>
                </div>
            </h4>
        </div>
        @yield('content')



        <!--Scripts for import--> 
        <script src = " {{ url('js/popper.min.js') }}"> </script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        
    </body>
</html>