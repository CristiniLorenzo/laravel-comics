@extends('layouts.app')

@section('content')
    <div class="jumbo">
    </div>

    <div class="comics-list">
        <div class="container">
            <h2>CURRENT SERIES</h2>
            <div class="comics-container">
                @foreach ($comics as $comic)
                <div class="comic">
                    <div class="image">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>

                    <h5>{{ $comic['title'] }}</h4>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    
@endsection