@extends('layout.app')

@section('title', 'About')

@section('content')

    {{-- Navbar --}}
    @include('component.Navbar')
    <div class="personalBG">
        <div class="overlay">

            {{-- Contents --}}
            @include('component.About')
            
        </div>
    </div>

    {{-- Footer --}}
    @include('component.Footer')

    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
