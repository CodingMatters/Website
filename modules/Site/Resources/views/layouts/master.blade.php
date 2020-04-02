<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @yield('title_prefix', '')
            @yield('title', config('app.name', 'AdminLTE 3'))
        </title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
        @stack('css')
    </head>
    <body>
        @yield('content')
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
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('js')
    </body>
</html>
