@extends('layouts.app')

@section('content')
    <main>

        @include('home.partials.slider')
        @include('home.partials.clients')
        @include('home.partials.services')
        @include('home.partials.subscripe')

    </main>
@endsection
