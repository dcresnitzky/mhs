<aside>
    <div class="widget">
        <h4 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapdown m-icon-white"></i></span>&nbsp;&nbsp;{{\Lang::get('default.sidebar.about-me')}}</h4>
        <img src="{{asset('assets/img/small-avatar.jpg')}}" class="alignleft" alt="" />
        <h5>Maria Helena</h5>
        <p>{{\Lang::get('default.sidebar.about-description')}}</p>
    </div>
    <div class="clearfix"></div>
    <div class="widget">
        <h4 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapdown m-icon-white"></i></span>&nbsp;&nbsp;{{\Lang::get('default.sidebar.latest')}}</h4>
        <ul class="recent">
            @foreach ($posts as $post)
                <li class="sidebar-posts">
                    <h6><a href="{{ $post->url($tag) }}">{{ $post->title }}</a></h6>
                    @if ($post->page_image)
                        <div class="text-center">
                            <a href="{{ $post->url($tag) }}"><img src="{{ asset($post->page_image) }}" width="80%"></a>
                        </div>
                    @endif
                    <div class="clearfix"></div>
                    <span class="date">{{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} {{\Lang::get('default.post.read-time')}}</span>
                    <p>{{ str_limit($post->subtitle, config('blog.sidebar_trim_width')) }}</p>
                    <a href="{{ $post->url($tag) }}">{{\Lang::get('default.blog.read-more')}}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="clearfix"></div>
    @if($tags)
        <div class="widget">
            <h4 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapdown m-icon-white"></i></span>&nbsp;&nbsp;{{\Lang::get('default.sidebar.tags')}}</h4>
            <ul>
                @foreach($tags as $tag)
                    <li><a href="{{route('canvas.blog.post.index',['tag' => $tag->tag])}}">{{$tag->tag}}</a></li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--<div class="widget">--}}
        {{--<ul id="myTab" class="nav nav-tabs">--}}
            {{--<li class="active"><a href="#recent" data-toggle="tab">Latest</a></li>--}}
            {{--<li><a href="#popular" data-toggle="tab">Popular</a></li>--}}
            {{--<li><a href="#comment" data-toggle="tab">Comment</a></li>--}}
        {{--</ul>--}}
        {{--<div id="myTabContent" class="tab-content">--}}
            {{--<div class="tab-pane fade in active" id="recent">--}}
                {{--<ul class="recent">--}}
                    {{--<li>--}}
                        {{--<a href="#"><img src="assets/img/dummies/80x80/img1.jpg" class="alignleft" alt="" /></a>--}}
                        {{--<h6><a href="#">Adhuc disputando</a></h6>--}}
                        {{--<p>--}}
                            {{--At vero eos et accusam et justo duo dolores et eabum.--}}
                        {{--</p>--}}
                        {{--<a href="#">Read more..</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><img src="assets/img/dummies/80x80/img2.jpg" class="alignleft" alt="" /></a>--}}
                        {{--<h6><a href="#">Duo te enim solum</a></h6>--}}
                        {{--<p>--}}
                            {{--Ei viris latine ullamcorper sed vim ex omnes.--}}
                        {{--</p>--}}
                        {{--<a href="#">Read more..</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><img src="assets/img/dummies/80x80/img3.jpg" class="alignleft" alt="" /></a>--}}
                        {{--<h6><a href="#">Choro scriptorem</a></h6>--}}
                        {{--<p>--}}
                            {{--Fugit choro scriptorem eam at, nusquam consetetur ex.--}}
                        {{--</p>--}}
                        {{--<a href="#">Read more..</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="tab-pane fade" id="popular">--}}
                {{--<ul class="recent">--}}
                    {{--<li>--}}
                        {{--<a href="#"><img src="assets/img/dummies/80x80/img3.jpg" class="alignleft" alt="" /></a>--}}
                        {{--<h6><a href="#">Choro scriptorem</a></h6>--}}
                        {{--<p>--}}
                            {{--Fugit choro scriptorem eam at, nusquam consetetur ex.--}}
                        {{--</p>--}}
                        {{--<a href="#">Read more..</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><img src="assets/img/dummies/80x80/img1.jpg" class="alignleft" alt="" /></a>--}}
                        {{--<h6><a href="#">Adhuc disputando</a></h6>--}}
                        {{--<p>--}}
                            {{--At vero eos et accusam et justo duo dolores et eabum.--}}
                        {{--</p>--}}
                        {{--<a href="#">Read more..</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><img src="assets/img/dummies/80x80/img2.jpg" class="alignleft" alt="" /></a>--}}
                        {{--<h6><a href="#">Duo te enim solum</a></h6>--}}
                        {{--<p>--}}
                            {{--Ei viris latine ullamcorper sed vim ex omnes.--}}
                        {{--</p>--}}
                        {{--<a href="#">Read more..</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</aside>