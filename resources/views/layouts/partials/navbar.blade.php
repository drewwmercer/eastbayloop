<navbar inline-template>
    <div class="custom-navbar">
        <div class="navbar-wrapper">
            <a class="logo" href="{{ route('main-page') }}">
                <img alt="logo" src="{{ asset('assets/img/logo.png') }}">
            </a>
            <div class="navbar-content">
                @include('layouts.partials.auth-menu')
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
                    <li><a href="{{ route('taste-page') }}">TASTE</a></li>
                    <li><a href="{{ route('market-place-page') }}">LOCAL MARKETPLACE</a></li>
                    <li><a href="{{ route('music-page') }}">MUSIC</a></li>
                    <li><a href="{{ route('stay-page') }}">STAY</a></li>
                    <li><a href="{{ route('events-page') }}">EVENTS</a></li>
                    <li><a href="{{ route('advertise-page') }}">ADVERTISE WITH US!</a></li>
                </ul>
            </div>
        </div>
    </div>
</navbar>
