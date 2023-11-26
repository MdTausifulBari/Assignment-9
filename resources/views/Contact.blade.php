@extends('layout.app')

@section('title', 'Contact')

@section('content')

    {{-- Navbar --}}
    @include('component.Navbar')

    <div class="personalBG">

        {{-- Contents --}}
        @include('component.Contact')

    </div>

    {{-- Footer --}}
    @include('component.Footer')
    
    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
