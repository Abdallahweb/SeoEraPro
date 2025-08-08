<div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="ion ion-navicon-round"></i></a></li>
                    </ul>
                    <div class="search-element">
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">



                        <a href="{{route('profile.edit')}}" class="dropdown-item has-icon">
                                <i class="ion ion-android-person"></i>  {{ __('Profile') }}
                            </a>

                            <form method="POST" action="{{ route('logout') }}"  class="dropdown-item has-icon text-dark" >
                            @csrf

                            <a class="text-dark"  style="text-decoration:none" href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="ion ion-log-out"></i>  {{ __('Log Out') }}
                              </a>
                        </form>

                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                 <a href="/"> <img alt="image" src="https://seoera.net/storage/uczqIOPmJPpa31lH2323N3ISzsWDhUYJYezlsQhv.png" style="margin-top:30px"></a>
                    </div>
                    <div class="sidebar-user">

                        <div class="sidebar-user-details">
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="active">
                            <a href="/"><i class="ion ion-home"></i><span>Home Page</span></a>
                        </li>


                     @if (Auth::user()->usertype == 'admin')

                        <li>
                            <a href="{{url('view_users')}}" class="has-dropdown"><i
                                    class="ion ion-person-stalker"></i><span>Users</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="{{url('view_users')}}"><i class="ion ion-ios-circle-outline"></i> Add New User</a></li>
                            </ul>
                        </li>
                        @endif


                         <li>
                            <a href="{{url('view_posts')}}" class="has-dropdown"><i class="ion ion-clipboard"></i><span> Posts </span></a>
                            <ul class="menu-dropdown">
                                <li><a href="{{url('view_posts')}}"><i class="ion ion-ios-circle-outline"></i> Add New Post</a>
                                </li>
                            </ul>
                        </li>
                                         </ul>
                    {{-- <div class="p-3 mt-4 mb-4">
                            <div class="p-3 mt-4 mb-4">

                            <form method="POST" action="{{ route('logout') }}"  class="dropdown-item has-icon text-dark" >
                            @csrf

                            <a class="btn btn-danger btn-shadow btn-round "  style="text-decoration:none" href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="ion ion-log-out"></i>  {{ __('Log Out') }}
                              </a>
                        </form>

                        </a>
                    </div> --}}
                </aside>
            </div>
