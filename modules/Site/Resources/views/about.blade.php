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
                    <h2 class="title is-size-2 has-text-success">Making it work by doing it right</h2>
                    <p class="subtitle is-size-5 has-text-grey has-text-weight-semibold">Strategist <span class="has-text-grey-lighter">|</span> Specialist <span class="has-text-grey-lighter">|</span> Technologist</p>
                    <p class="subtitle is-size-4 has-text-grey-darker">Improving your strategies and building identity without losing its core values</p>
                    <div class="buttons">
                        <a href="#core-values" class="button is-dark is-rounded  has-text-weight-semibold is-outlined">more ...</a>
                        <a href="/contact-us" class="button is-success is-rounded has-text-weight-semibold is-medium">Get Connected Today!</a>
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
                    <div class="row" style="padding-bottom: 20px;">
                        <h1 class="has-text-weight-light is-size-1 has-text-white">What <span class="has-text-weight-bold has-text-warning">Coding Matters</span> is about?</h1>
                        <p class="subtitle has-text-dark">We are formed to help businesses, <strong>MSMEs</strong>, with their identity and strategies in providing value to their customers and managing their resources by integrating automated tools and digital processes that are more productive and have less work effort.</p>
                        <p class="subtitle has-text-dark"> Also, we would like to train, mentor and enhance the skills and talents of the student interns and freelancers.</p>
                    </div>
                    <div class="row">
                        <h2 class="title is-size-2 has-text-warning is-uppercase">Mission</h2>
                    </div>
                    <div class="row" id="goals">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="subtitle has-text-dark">To capacitate the community, individuals and teams, to improve and innovate by harnessing available information and technology and accustom them with tools that empower them to have a competitive advantage by working smart.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="title is-size-2 has-text-warning is-uppercase">Vision</h2>
                    </div>
                    <div class="row" id="goals">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p class="subtitle has-text-dark">Inter-connectivity of individual skills and talent where the value of one another matters to the organization and the community.</p>
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
