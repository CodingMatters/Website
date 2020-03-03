@extends('site::layouts.master')

@section('content')
<section class="hero is-fullheight" id="home">
    <div class="hero-head">
        <nav class="navbar is-transparent" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('site.index')}}">
{{--                        <h2 class="has-text-weight-bold is-size-1">Coding Matters</h2>--}}
                    </a>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
{{--                        <a class="navbar-item">Home</a>--}}
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container is-fluid has-text-centered">
            <p class="is-size-4">Sorry for inconvenience. Site under construction.</p>
        </div>
    </div>
</section>
@endsection
