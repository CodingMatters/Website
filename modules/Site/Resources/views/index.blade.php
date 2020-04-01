@extends('site::layouts.master')

@push('css')
    <style type="text/css">
        #goals {
            padding-bottom: 20px;
        }
    </style>
@endpush

@section('content')
<section class="hero is-fullheight" id="home">
    <div class="hero-head">
        <nav class="navbar is-transparent" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('site.index')}}">
                        <h2 class="has-text-weight-bold is-size-2">Coding Matters
                        </h2>
                    </a>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item" href="#freelancer">For Freelancers</a>
                        <a class="navbar-item" href="#team">For Teams</a>
                        <a class="navbar-item" href="#business">For Businesses</a>
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
                    <h2 class="subtitle is-size-4 has-text-grey-darker">Improving your code without losing its functionality</h2>
                    <h4 class="subtitle is-size-6 has-text-grey-dark">Aesthetics | Readability | Cognitive Structure</h4>
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
<section id="freelancer" class="hero is-fullheight has-background-primary" style="padding-top: 30px">
    <div class="container is-fluid">
        <div class="columns is-vcentered">
            <div class="column">
                <figure class="image is-1by1">
                    <img src="{{asset('images/freelancer.svg')}}">
                </figure>
            </div>
            <div class="column">
                <div class="row  has-text-centered" style="padding-bottom: 30px">
                    <h2 class="is-size-1 has-text-weight-bold has-text-white-ter"> As a Freelancer</h2>
                    <span class="subtitle is-size-5 has-text-weight-semibold has-text-grey-darker">
                    What's your goal?
                </span>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-white">Craftsmanship</h5>
                                <p class="subtitle">Being good at what you do and make you stand out from your competitions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-white">Learn new technologies</h5>
                                <p class="subtitle">One aspect on enhancing your skills is to learn new technologies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team" class="hero is-fullheight has-background-white-bis" style="padding-top: 30px">
    <div class="container is-fluid">
        <div class="columns is-vcentered">
            <div class="column">
                <div class="row  has-text-centered" style="padding-bottom: 30px">
                    <h2 class="is-size-1 has-text-weight-bold has-text-warning">Building a Team</h2>
                    <span class="subtitle is-size-5 has-text-weight-semibold has-text-grey">
                    What's your goal?
                </span>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h4 class="title is-size-4 has-text-weight-bold has-text-warning">Collaboration</h4>
                                <p class="subtitle has-text-grey">Individual wins are great but TEAM wins are better.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h4 class="title is-size-4 has-text-weight-bold has-text-warning">Continuous Delivery</h4>
                                <p class="subtitle has-text-grey">Being good is not enough if you miss the deadline. You must deliver incrementally and to have immediate feedback loop in order for you to improve the quality of your products and services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <figure class="image is-1by1">
                    <img src="{{asset('images/teams.svg')}}">
                </figure>
            </div>
        </div>
    </div>
</section>
<section id="business" class="hero is-fullheight has-background-warning" style="padding-top: 30px">
    <div class="container is-fluid">
        <div class="columns is-vcentered">
            <div class="column">
                <figure class="image is-1by1">
                    <img src="{{asset('images/business.svg')}}">
                </figure>
            </div>
            <div class="column">
                <div class="row  has-text-centered" style="padding-bottom: 30px">
                    <h2 class="is-size-1 has-text-weight-bold has-text-info"> As a Business Owner</h2>
                    <span class="subtitle is-size-5 has-text-weight-semibold has-text-grey">
                    What's your goal?
                </span>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-info">Business Strategy</h5>
                                <p class="subtitle has-text-grey">Aligning your business to what's new/trending and to what's the customers satisfaction is.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-info">Automation</h5>
                                <p class="subtitle has-text-grey">Having immediate, in-near real time, feedback with issues and concerns can now be achieve using resource management tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h5 class="title is-size-4 has-text-weight-bold has-text-info">Improved Customer Relations</h5>
                                <p class="subtitle has-text-grey">Making sure that your customers are satisfied and enjoys patronizing your products and services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
