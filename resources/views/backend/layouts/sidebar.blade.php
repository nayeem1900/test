@php
$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();
@endphp



<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if(Auth::user()->usertype=='admin')
        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open': ''}}  ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('users.view')}}" class="nav-link {{($route=='users.view')?'active': ''}} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                </li>



            </ul>
        </li>
        @endif


        <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open': ''}} ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Profile
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active': ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Your Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='profiles.password.view')?'active': ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Your password</p>
                    </a>
                </li>



            </ul>
        </li>


            <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Logo
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('logos.view')}}" class="nav-link  {{($route=='logos.view')?'active': ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Logo</p>
                        </a>
                    </li>




                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Slider
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('sliders.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Slider</p>
                        </a>
                    </li>




                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Latest Notice
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('latest_notice.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Latest Notice</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('missions.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About_School</p>
                        </a>
                    </li>




                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('principals.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Principal Message</p>
                        </a>
                    </li>


                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('facilities.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Facility</p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('about_us.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About US</p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admissions.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Admission</p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('office_notice.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Office Notice</p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('gallareys.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gallarey</p>
                        </a>
                    </li>

                </ul>
            </li>





    </ul>
</nav>