<navbar inline-template>
    <div class="custom-navbar">
        <div class="navbar-wrapper">
            <a class="logo" href="{{ route('main-page') }}">
                <img alt="logo" src="{{ asset('assets/img/logo.png') }}">
            </a>
            <div class="navbar-content">
                <div class="auth-btn">
                    <i class="fa fa-user" aria-hidden="true" id="dropdownAuthMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAuthMenu">
                        <a class="dropdown-item" href="{{ route('profile-page') }}">Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('profile-page') }}">Sign up</a>
                    </div>
                </div>
                <span class="menu" @click="toogleMenu">
                    <template v-if="isToogleNavbar">
                        <i class="fa fa-close" aria-hidden="true"></i>
                        Close
                    </template>
                    <template v-else>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        Menu
                    </template>
                </span>
                <ul class="navigation">
                    <li><a href="{{ route('main-page') }}">HOME</a></li>
                    <li><a href="{{ route('explore-page') }}">EXPLORE</a></li>
                    <li><a href="{{ route('fashion-page') }}">FASHION</a></li>
                    <li><a href="taste.html">TASTE</a></li>
                    <li><a href="market-place.html">LOCAL MARKETPLACE</a></li>
                    <li><a href="music.html">MUSIC</a></li>
                    <li><a href="stay-page.html">STAY</a></li>
                    <li><a href="{{ route('events-page') }}">EVENTS</a></li>
                    <li><a href="are-you-in-loop-step-1.html">ADVERISE WITH US!</a></li>
                </ul>
            </div>
        </div>
    </div>
</navbar>