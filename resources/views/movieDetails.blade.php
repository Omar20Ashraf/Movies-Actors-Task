@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$movie->name}}</div>
                <div class="card-body">

                    {{-- check to see if there is actors added for this mpvie or not --}}
                    @if(count($movie->actors) > 0)
                        <h2>Actors Name</h2>
                        @foreach($movie->actors as $actor)
                            <h2>
                                <a href="{{ route('actorDetails',$actor->id) }}">{{$actor->name}}</a>
                            </h2>
                        @endforeach
                    @else
                        <h2>No Actors Has Been Added Yet</h2>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
