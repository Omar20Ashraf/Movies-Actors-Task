@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$actor->name}}</div>
                <div class="card-body">


                    <h2> Movies Name</h2>
                    @foreach($actor->movies as $movie)
                        <h3><a href="{{ route('movies.show',$movie->id) }}">{{$movie->name}}</a></h3>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
