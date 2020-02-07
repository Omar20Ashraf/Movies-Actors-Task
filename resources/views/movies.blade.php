@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @foreach($movies as $movie)
                        <h2>
                            <a href="{{ route('movies.show',$movie->id) }}">{{$movie->name}}</a>
                        </h2>

                    @endforeach

                    {{-- check the user is auth or not --}}
                    @if(auth()->check())
                        <form action="{{route('movies.store')}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Movie Name">
                            <button type="submit">Add Movie</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
