<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">

        <span class="logo-mini" style="font-size: 12px">DEMO</span>

        <span class="logo-lg">Demo</span>
    </a>

    <nav class="navbar navbar-static-top">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">


                {{--<li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                        --}}{{--<img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">--}}{{--
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="user-header">
                            --}}{{--<img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">--}}{{--
                            <br><br>

                            <p>
                                {{ Auth::user()->name }}
                                <small>Member since {{date('d-m-Y', strtotime(Auth::user()->created_at))}}</small>
                            </p>
                        </li>


                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route('register')}}" class="btn btn-default btn-flat" style="color: rebeccapurple">Register</a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" style="color: rebeccapurple" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </li>--}}

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="user-header">
                            <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::user()->name }}
                                <small>Member since {{date('d-m-Y', strtotime(Auth::user()->created_at))}}</small>
                            </p>
                        </li>


                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

            </ul>
        </div>
    </nav>
</header>

