<div class="header header-transparent dark-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="/assets/images/brand/main.png" class="logo" alt="{{config('app.name')}}" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li class="active"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="" style="background: #ff0000"><a class="text-white" href="{{route('marketplace')}}">Marketplace</a></li>
                            <li class=""><a href="{{route('contact-us')}}">Contact us</a></li>
                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">

                            <li>
                                <a href="{{route('homepage')}}/#download-app">
                                    <i class="ti-apple mr-1"></i>Download App
                                </a>
                            </li>
                            <li class="add-listing dark-bg">
                                <a href="{{route('login')}}" >
                                    <i class="ti-lock mr-1"></i> Login
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}" >
                                    <i class="ti-tag mr-1"></i>Start Trial
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
