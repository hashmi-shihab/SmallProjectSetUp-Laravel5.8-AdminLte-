<aside class="main-sidebar">

    <section class="sidebar">

        {{--<div class="user-panel">
            <div class="pull-left ">
                --}}{{--<img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">--}}{{--
                <h4 style="color: #fff0ff;margin-top: 0px;margin-left:10px "><i class="fa fa-user-secret" aria-hidden="true"></i></h4>
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>--}}
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview">

                <a href="#">
                    <i class="fa fa-cog"></i> <span>Configuration</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">

                    {{--location--}}
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-map-marker"></i> Location<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href=""><i class="fa fa-plus-square"></i> Add Location</a></li>
                            <li class=""><a href=""><i class="fa fa-table"></i> Location List </a></li>
                        </ul>
                    </li>
                </ul>

            </li>


            {{--sell post--}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-product-hunt"></i> <span>Property</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href=""><i class="fa fa-plus-square"></i> Add Property</a></li>
                    <li class=""><a href=""><i class="fa fa-table"></i> Property List </a></li>
                </ul>
            </li>
            <li class="treeview {{  Route::currentRouteName() == ('register') || Route::currentRouteName() == ('passwordCreate') || Route::currentRouteName() == ('users.index') || Route::currentRouteName() == ('users.edit')  ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-user-circle-o"></i> <span>Users</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{  Route::currentRouteName() == ('users.index') ? 'active' : '' }}"><a href="{{route('users.index')}}"><i class="fa fa-users"></i> List</a></li>
                    <li class="{{  Route::currentRouteName() == ('register') ? 'active' : '' }}"><a href="{{route('register')}}"><i class="fa fa-user-plus"></i> Register</a></li>
                    <li class="{{  Route::currentRouteName() == ('passwordCreate') ? 'active' : '' }}"><a href="{{route('passwordCreate')}}"><i class="fa fa-key"></i> Password Reset </a></li>
                </ul>
            </li>
            <li><a href=""><i class="fa fa-television"></i> <span>Web View</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
