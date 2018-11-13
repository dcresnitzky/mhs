@extends('layout')

@section('title', \Lang::get('default.menu.news'))
@section('og-title', '')
@section('twitter-title', '')
@section('og-description', '')
@section('twitter-description', '')
@section('og-type','blog')
@section('active-news','active')
@if (true == false)
    @section('og-image', url(''))
    @section('twitter-image', url(''))
@endif
@section('sh-title', \Lang::get('default.blog.sh-title'))
@section('sh-description', \Lang::get('default.blog.sh-description'))
@section('content')
    @include('components/subheader')

    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span8">
                    @foreach ($posts as $post)
                        <article class="blog-post">
                            <div class="tooltip-demo headline">
                                <h4>
                                    <a href="{{ $post->url($post->tag) }}">{{ $post->title }}</a>
                                </h4>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    @if ($post->page_image)
                                        <div class="text-center">
                                            <img src="{{ asset($post->page_image) }}" width="100%">
                                        </div>
                                    @else
                                    <blockquote>
                                        <p>{{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}</p>
                                    </blockquote>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <span class="comment">{{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} {{\Lang::get('default.post.read-time')}}</span>
                                    @if ($post->tags->count())
                                        <ul class="post-meta">
                                            <li class="first"><i class="icon-tags"></i>
                                                <span>{!! join(', ', $post->tagLinks()) !!}</span>
                                            </li>
                                        </ul>
                                    @endif
                                    <div class="clearfix"></div>
                                    <p>{{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}</p>
                                    <a href="{{  $post->url($post->tag) }}" ><button class="btn btn btn-success" type="button">{{\Lang::get('default.blog.read-more')}}</button></a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    @include('components/paginator')

                </div>

                <div class="span4">
                    @include('components/sidebar')
                </div>
            </div>


        </div>
    </section>

@stop