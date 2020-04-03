<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sorry, Page Not Found | Coding Matters</title>
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    @if( \Illuminate\Support\Facades\App::environment('production'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-W7KPW02Q7T"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-W7KPW02Q7T');
        </script>
    @endif
</head>
<body>
<section class="hero is-fullheight" id="home">
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns is-vcentered">
                <div class="column is-two-fifths">
                    <h1 class="title is-size-1 has-text-success has-text-weight-bold">How we can help you?</h1>
                    <h6 class="subtitle is-size-6 has-text-grey-dark">Sorry, we haven't created this page yet.</h6>
                    <p class="subtitle is-size-4 has-text-grey-darker">We would love to know why you end up in this page and how we can help you.</p>
                    <div class="buttons">
                        <a href="{{route('site.index')}}" class="button is-dark is-small is-rounded  has-text-weight-semibold is-outlined">No, take me back HOME</a>
                        <a href="/contact-us" class="button is-success is-rounded has-text-weight-semibold is-medium">YES, I need help</a>
                    </div>
                </div>
                <div class="column">
                    <figure class="image">
                        <img src="{{asset('images/reading.svg')}}">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer has-background-black">
    <div class="columns">
        <div class="column is-two-fifths">
            <h2 class="is-size-3 has-text-weight-bold has-text-white-ter is-uppercase">Coding Matters</h2>
            <p class="subtitle is-size-6">Specializes in business resource management and brand strategy.</p>
            <div class="row">
                <nav class="breadcrumb has-dot-separator" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="{{route('site.about')}}">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Get Connected</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <div class="columns">
                    <div class="column">
                        <h5 class="has-text-grey-dark">Legal</h5>
                        <div class="row">
                            <nav class="breadcrumb has-dot-separator" aria-label="breadcrumbs">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="column">
                        <h5 class="has-text-grey-dark">Resources</h5>
                        <div class="row">
                            <nav class="breadcrumb has-dot-separator" aria-label="breadcrumbs">
                                <ul>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Workshops</a></li>
                                    <li><a href="#">Books</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <p class="is-size-7 is-pulled-right">Copyright &copy; @php echo date('Y'); @endphp. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
