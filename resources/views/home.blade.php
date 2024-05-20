@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <h1>DC COMICS HOMEPAGE</h1>
    </div>

    <div class="container d-flex justify-content-center">
        {{-- <button href="{{ route('comics')}}" class="btn btn-primary">CLICK HERE TO SEE COMICS</button> --}}
        <a href="{{ route('comics')}}" class="d-flex justify-content-center">CLICK HERE TO SEE COMICS</a>

    </div>
@endsection