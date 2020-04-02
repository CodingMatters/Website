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
                        <a class="navbar-item" href="{{route('site.about')}}">Get to know us</a>
                        <a class="navbar-item" href="#">Resources</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns is-vcentered">
                <div class="column is-two-fifths">
                    <h1 class="title is-size-1 has-text-success has-text-weight-bold">Building identities and strategies in acquiring customers and managing your resources</h1>
                    <h6 class="subtitle is-size-6 has-text-grey-dark">Focused | Agile | Automated</h6>
                    <h2 class="subtitle is-size-4 has-text-grey-darker">We love to work with you and share our experiences in solving complex problems</h2>
                    <div class="buttons">
                        <a href="#freelancer" class="button is-success is-rounded has-text-weight-semibold is-outlined">For Freelancers</a>
                        <a href="#team" class="button is-info is-rounded has-text-weight-semibold is-outlined">For Students</a>
                        <a href="#business" class="button is-danger is-rounded has-text-weight-semibold is-outlined">For Businesses</a>
                    </div>
                </div>
                <div class="column">
                    <figure class="image">
                        <img src="{{asset('images/organization.svg')}}">
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
                    <h2 class="is-size-1 has-text-weight-bold has-text-grey-dark"> As Freelancer</h2>
                    <span class="subtitle is-size-5 has-text-weight-semibold has-text-white-bis">What's your goal?</span>
                </div>
                <div class="row" id="goals">
                    <div class="media">
                        <div class="media-content">
                            <div class="content">
                                <h3 class="title is-size-3 has-text-weight-bold has-text-white-ter is-capitalized">Mastery</h3>
                                <p class="subtitle has-text-grey-darker">Being good at what you do and make you stand out from your competitions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media">
                        <div class="media-content">
                            <div class="content">
                                <h3 class="title is-size-3 has-text-weight-bold has-text-white-ter is-capitalized">Versatility</h3>
                                <p class="subtitle has-text-grey-darker">One aspect on enhancing your skills is to learn and adapt with new technologies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="call-to-action">
                    <div class="media">
                        <div class="media-content">
                            <a href="https://www.youtube.com/channel/UCSQKqC_FqY0RB7mKiuX9bZA" class="button is-outlined is-dark is-rounded is-medium has-text-weight-bold is-uppercase">Learn something new today!</a>
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
                    <h2 class="is-size-1 has-text-weight-bold has-text-info">As Student</h2>
                    <span class="subtitle is-size-5 has-text-weight-semibold has-text-success">
                    What's your goal?
                </span>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h3 class="title is-size-3 has-text-weight-bold is-capitalized has-text-info">Building your career</h3>
                                <p class="subtitle has-text-grey-dark">Mentoring and guiding you with your path in mastering your skills and talent. Start small yet dream big.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="call-to-action">
                    <div class="media">
                        <div class="media-content">
                            <a href="https://www.youtube.com/channel/UCSQKqC_FqY0RB7mKiuX9bZA" class="button is-success is-outlined is-rounded is-medium has-text-weight-bold is-uppercase">Start Your Journey Now!</a>
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
                    <h2 class="is-size-1 has-text-weight-bold has-text-info"> As Business Owner</h2>
                    <span class="subtitle is-size-5 has-text-weight-semibold has-text-danger">
                    What's your goal?
                </span>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h3 class="title is-size-3 is-capitalized has-text-weight-bold has-text-info">Business Strategy</h3>
                                <p class="subtitle has-text-grey-darker">Aligning your business to what's new/trending.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h3 class="title is-size-3 is-capitalized has-text-weight-bold has-text-info">Building a Team</h3>
                                <p class="subtitle has-text-grey-dark">Individual wins are great but <strong>TEAM</strong> wins are better. A dynamic team doing <strong>collaboration</strong> and has <strong>empathy</strong> with each other.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h3 class="title is-size-3 is-capitalized has-text-weight-bold has-text-info">Automation</h3>
                                <p class="subtitle has-text-grey-darker">Ease of processing by using a tool that will give immediate, in-near realtime, feedback with issues and concerns.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="goals">
                    <div class="media is-vcentered">
                        <div class="media-content">
                            <div class="content">
                                <h3 class="title is-size-3 is-capitalized has-text-weight-bold has-text-info">Superb Customer Relations</h3>
                                <p class="subtitle has-text-grey-darker">Making sure that your customers are satisfied and enjoys patronizing your products and services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="call-to-action">
                    <div class="media">
                        <div class="media-content">
                            <a href="https://www.youtube.com/channel/UCSQKqC_FqY0RB7mKiuX9bZA" class="button is-outlined is-danger is-rounded is-medium has-text-weight-bold is-uppercase">Let's build your strategy now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
