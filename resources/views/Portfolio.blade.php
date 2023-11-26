@extends('layout.app')

@section('title', 'Portfolio')

@section('content')

    {{-- Navbar --}}
    @include('component.Navbar')

    <div class="personalBG">

        {{-- Contents --}}
        @include('component.Portfolio')

    </div>

    {{-- Footer --}}
    @include('component.Footer')
    
    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
