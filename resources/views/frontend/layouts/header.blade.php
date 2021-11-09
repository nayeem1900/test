<section class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                {{--<a class="navbar-brand" href="{{url('')}}"><img src="{{asset('frontend/image/' .$logo->image)}}" style="height: 93px;  "></a>--}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ar me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('')}}" style="color: white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('detail_aboutus')}}"style="color: white">About Us</a>
                        </li>
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: white">--}}
                                {{--About US--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style=" background-color: #99ccff">--}}
                                {{--<li><a class="dropdown-item" href="{{route('objective')}}">Objective</a></li>--}}
                                {{--<li><a class="dropdown-item" href="business_strt.html">Board of Governance </a></li>--}}
                                {{--<li><a class="dropdown-item" href="business_strt.html">Officers and Staf Information </a></li>--}}

                                {{--<!--<li><hr class="dropdown-divider"></li>--}}
                                {{--<li><a class="dropdown-item" href="#">Something else here</a></li>-->--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: white">
                                Academic
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style=" background-color: #99ccff">
                                {{--<li><a class="dropdown-item" href="permit.html">Year Final Examination</a></li>--}}
                                <li><a class="dropdown-item" href="{{route('teacherinfo')}}">Teacher Information </a></li>
                                <li><a class="dropdown-item" href="business_strt.html">Student Information </a></li>

                                <!--<li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                            </ul>
                        </li>
                       {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: white">
                                Administration
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style=" background-color: #99ccff">
                                <li><a class="dropdown-item" href="permit.html">Publication</a></li>
                                <li><a class="dropdown-item" href="business_strt.html">Booklist </a></li>


                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admission')}}"style="color: white">Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html"style="color: white">Result</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('gallarey')}}"style="color: white">Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: white">
                                Notice
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style=" background-color: #99ccff">
                                {{--<li><a class="dropdown-item" href="permit.html">Year Final Examination</a></li>--}}
                                <li><a class="dropdown-item" href="{{route('latest_notice')}}">Latest Notice</a></li>
                                <li><a class="dropdown-item" href="business_strt.html">Examination Notice </a></li>
                                <li><a class="dropdown-item" href="{{route('office_notice')}}">Office Notice </a></li>
                                <li><a class="dropdown-item" href="business_strt.html">News/Press Release </a></li>

                                <!--<li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                            </ul>
                        </li>
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{route('notice')}}"style="color: white">Notice</a>--}}
                        {{--</li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}"style="color: white">Contact Us</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>



    </div>



</section>