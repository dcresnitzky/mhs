@extends('layout')
@section('title',$post->title)
@section('og-title', $post->title)
@section('twitter-title', $post->title)
@section('og-description', $post->meta_description)
@section('twitter-description', $post->meta_description)
@section('og-type','blog')
@section('active-news','active')
@if ($post->page_image)
    @section('og-image', url( $post->page_image ))
    @section('twitter-image', url( $post->page_image ))
@endif
@section('sh-title',\Lang::get('default.post.reading',['title' => $post->title]))
@section('sh-description',$post->meta_description)
@section('content')
    @include('components/subheader')
    <section id="maincontent">
    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- start article full post -->
                <article class="blog-post">
                    <div class="tooltip-demo headline">
                        <h4>{{ $post->title }}</h4>
                        <span class="comment">{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }} &#183; {{ $post->readingTime() }}  {{\Lang::get('default.post.read-time')}}</span>
                    </div>
                    <div class="clearfix"></div>
                    @if ($post->page_image)
                        <div class="text-center">
                            <img src="{{ asset($post->page_image) }}" class="post-hero" width="100%">
                        </div>
                    @endif
                    @if ($post->tags->count())
                        <ul class="post-meta">
                            <li class="first"><i class="icon-tags"></i>
                                <span>{!! join(', ', $post->tagLinks()) !!}</span>
                            </li>
                        </ul>
                    @endif
                    <div class="clearfix"></div>
                    {!! $post->content_html !!}
                </article>
                <!-- end article full post -->
            </div>
        </div>
    </div>
</section>
@include('canvas::frontend.blog.partials.paginate-post')
@stop