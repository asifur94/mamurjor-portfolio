<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-img" alt="Logo">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Maxton</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">

            @auth
                @if (Auth::user()->hasVerifiedEmail())
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('hero') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">border_all</i></div>
                            <div class="menu-title">Hero Area</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">apps</i></div>
                            <div class="menu-title">About</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('resume') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">attachment</i></div>
                            <div class="menu-title">Resume</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('portfolio') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">art_track</i></div>
                            <div class="menu-title">Portfolio</div>
                        </a>
                    </li>


                    <li class="">
                        <a href="javascript:;" class="has-arrow" aria-expanded="false">
                          <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
                          </div>
                          <div class="menu-title">Blogs</div>
                        </a>
                        <ul class="mm-collapse" style="height: 0px;">
                          <li><a href="{{ route('blogs') }}"><i class="material-icons-outlined">arrow_right</i>Add Product</a>
                          </li>
                          <li><a href="{{ route('blogCategories') }}"><i class="material-icons-outlined">arrow_right</i>Products</a>
                          </li>
                        </ul>
                      </li>



                    <li>
                        <a href="{{ route('counter') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">av_timer</i></div>
                            <div class="menu-title">Counter</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i></div>
                            <div class="menu-title">Services</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contacts') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">contact_mail</i></div>
                            <div class="menu-title">Contact</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('package') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">account_balance_wallet</i></div>
                            <div class="menu-title">Package</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('skill') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">traffic</i></div>
                            <div class="menu-title">Skill</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('setting') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">settings</i></div>
                            <div class="menu-title">Setting</div>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('verification.notice') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">mail</i></div>
                            <div class="menu-title">Verify Your Email</div>
                        </a>
                    </li>
                @endif
            @else
                <li>
                    <a href="{{ route('login') }}">
                        <div class="parent-icon"><i class="material-icons-outlined">login</i></div>
                        <div class="menu-title">Login</div>
                    </a>
                </li>
            @endauth

        </ul>
        <!--end navigation-->
    </div>
</aside>
<!--end sidebar-->
