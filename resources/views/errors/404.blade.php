@extends('layout')

@section('og-title', '')
@section('twitter-title', '')
@section('og-description', '')
@section('twitter-description', '')
@section('title', '404'))
@section('og-type','blog')
@if (true == false)
    @section('og-image', url(''))
@section('twitter-image', url(''))
@endif
@section('sh-title', \Lang::get('default.blog.sh-title'))
@section('sh-description', \Lang::get('default.blog.sh-description'))
@section('content')
    @include('components.subheader')
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="login-container">
                    <p class="f-20 f-300 text-center">404 - Page Not Found</p>
                    <p class="text-muted text-center">Sorry, but nothing exists here.</p>

                    <div style="text-align: center">
                        {{--            <a href="{!! redirect()->back() !!}" class="btn btn-link m-t-10">Back to Blog</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
