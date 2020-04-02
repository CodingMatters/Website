@extends('site::layouts.master')

@push('css')
    <style type="text/css">
        #goals {
            padding-bottom: 20px;
        }
    </style>
@endpush

@section('title_prefix', "About Us | ")

@section('content')
<section class="hero is-fullheight" id="home">
    <div class="hero-head">
        <nav class="navbar is-transparent" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('site.index')}}">
                        <h2 class="has-text-weight-bold is-size-2">Coding Matters</h2>
                    </a>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item" href="{{route('site.index')}}">Back To Home</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns is-vcentered">
                <div class="column is-two-fifths">
                    <h1 class="title is-size-2 has-text-success">Making it work by doing it right</h1>
                    <h6 class="subtitle is-size-6 has-text-grey-dark">Strategist | Specialist | Technologist</h6>
                    <h2 class="subtitle is-size-4 has-text-grey-darker">Improving your strategies and identity without losing its core values</h2>
                    <div class="buttons">
                        <a href="#core-values" class="button is-dark is-rounded  has-text-weight-semibold is-outlined">more ...</a>
                        <a href="#freelancer" class="button is-success is-rounded has-text-weight-semibold is-medium">Get Connected Today!</a>
                    </div>
                </div>
                <div class="column">
                    <figure class="image">
                        <img src="{{asset('images/developer.svg')}}">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="core-values" class="hero is-fullheight has-background-success" style="padding-top: 30px">
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns is-vcentered">
                <div class="column is-two-fifths">
                    <figure class="image">
                        <img src="{{asset('images/ideas.svg')}}">
                    </figure>
                </div>
                <div class="column">
                    <div class="row">
                        <h2 class="title is-size-2 has-text-warning">Mission</h2>
                    </div>
                    <div class="row" id="goals">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="subtitle has-text-white">To capacitate the community, individuals and teams, to improve and innovate by harnessing available information and technology and accustom them with tools that are currently available and/or being developed for them to have a competitive advantage.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="title is-size-2 has-text-warning">Vision</h2>
                    </div>
                    <div class="row" id="goals">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="subtitle has-text-white">Inter-connectivity of individual skills and talent where the value of one another matters to the organization and the community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
