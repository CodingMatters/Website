@extends('site::layouts.master')

@push('css')
<style type="text/css">
    #value-proposition {
        background-image: url("/images/bg-workstation.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
@endpush

@section('content')
<section class="hero is-fullheight is-fullwidth" id="value-proposition">
    <div class="hero-body">
        <div class="container is-fluid has-text-centered">
            <h1 class="is-size-1 has-text-weight-bold has-text-white">Just don’t make it work, build it right!</h1>
            <p class="is-size-5 has-text-grey-lighter">Improving code quality: readability and cognitive in structure</p>
        </div>
    </div>
</section>
@endsection
