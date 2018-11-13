@section('menu')
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- logo -->
                <a class="brand logo" href="{{route('home')}}">
                    <img src="{{asset("assets/img/logo_mhs.png")}}" alt="" />
                </a>
                <!-- end logo -->

                <!-- top menu -->
                <div>
                    <nav>
                        <ul class="nav topnav menu">
                            <li class="home @yield('active-home')">
                                <a href="{{route('home')}}" class="home"><i class="icon-home icon-white"></i>&nbsp;&nbsp;{{\Lang::get('default.menu.home')}}</a>
                            </li>
                            <li class="about @yield('active-about')">
                                <a href="{{route('about')}}"><i class="icon-heart icon-white"></i>&nbsp;&nbsp;{{\Lang::get('default.menu.about')}}</a>
                            </li>
                            <li class="services @yield('active-services')">
                                <a href="{{route('services')}}"><i class="icon-cog icon-white"></i>&nbsp;&nbsp;{{\Lang::get('default.menu.services')}}</a>
                            </li>
                            <li class="customers @yield('active-customers')">
                                <a href="{{route('customers')}}"><i class="icon-star icon-white"></i>&nbsp;&nbsp;{{\Lang::get('default.menu.customers')}}</a>
                            </li>
                            <li class="news @yield('active-news')">
                                <a href="{{route('canvas.blog.post.index')}}"><i class="icon-bullhorn icon-white"></i>&nbsp;&nbsp;{{\Lang::get('default.menu.news')}}</a>
                            </li>
                            <li class="contact @yield('active-contact')">
                                <a href="{{route('contact')}}"><i class="icon-envelope icon-white"></i>&nbsp;&nbsp;{{\Lang::get('default.menu.contact')}}</a>
                            </li>

                            <li class="language">
                                <ul class="menu-social ">
                                    @if(App::getLocale() === 'en')
                                        <li class="eu-to-pt"><a href="{{ LaravelLocalization::getLocalizedURL('pt-BR', null, [], true) }}" title="{{\Lang::get('default.menu.portuguese')}}">https://www.linkedin.com/in/mariahelenaresnitzky</a></li>
                                    @else
                                        <li class="pt-to-eu"><a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"  title="{{\Lang::get('default.menu.english')}}">https://www.linkedin.com/in/mariahelenaresnitzky</a></li>
                                    @endif
                                    <li class="linkedin"><a href="#" title="LinkedIn">https://www.linkedin.com/in/mariahelenaresnitzky</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!-- end menu -->
            </div>
        </div>
    </div>
@endsection