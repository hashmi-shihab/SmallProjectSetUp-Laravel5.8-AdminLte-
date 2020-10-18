


<!-- Header Section Begin -->
<header class="header-section stickyPadTop" style="padding-top: 60px">
    <div class="top-nav fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <nav class="main-menu" >
                        <ul>
                            <li class="{{  Route::currentRouteName() == ('publicHome')  ? 'active' : '' }}"><a href="{{route('publicHome')}}">Home</a></li>
                            <li class="{{  Route::currentRouteName() == ('property.index')  ? 'active' : '' }}"><a href="{{route('property.index')}}">Property</a></li>
                            <li class="{{  Route::currentRouteName() == ('about')  ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
                            <li class="{{  Route::currentRouteName() == ('contact')  ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-5">
                    <div class="top-right">
                        <a href="{{route('publicSellPosts.create')}}" class="property-sub">Sell Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{route('publicHome')}}">{{--<img src="{{asset('frontend/img/logo.png')}}" alt="">--}}<h4 {{--style="color: #fff0ff"--}}>DDRS</h4></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="nav-logo-right">
                        <ul>
                            <li style="margin-left: 0px!important;float: left!important;">
                                <i class="icon_phone"></i>
                                <div class="info-text">
                                    <span>Hot no:</span>
                                    <p>+88 01790 428 277</p>
                                </div>
                            </li>
                            <li style="margin-left: 10px!important;float: left!important;">
                                <i class="icon_map"></i>
                                <div class="info-text">
                                    <span>Address:</span>
                                    <p>Road 2/1,Block#L,House#4,Banani,Dhaka 1216<span></span></p>
                                </div>
                            </li>
                            <li style="margin-left: 10px!important;float: right!important;">
                                <i class="icon_mail"></i>
                                <div class="info-text">
                                    <span>Email:</span>
                                    <p>info.ddrs.com.bd</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Header End -->
