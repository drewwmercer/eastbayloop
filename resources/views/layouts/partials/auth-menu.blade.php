<auth-menu inline-template>
    <div class="auth-btn">
        <i class="fa fa-user" aria-hidden="true" id="dropdownAuthMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAuthMenu">
            @auth
                <a class="dropdown-item" href="{{ route('profile-page') }}">Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            @endauth
            @guest
                <span class="dropdown-item" @click="showLoginForm">Login</span>
                <span class="dropdown-item" @click="showRegistrationForm">Sign up</span>
            @endguest
        </div>
        <modal v-if="showModal" @close="closeModal">
            <template slot="content">
                <keep-alive>
                    <component :is="currentComponent" @modal-switch="modalSwitch"></component>
                </keep-alive>
            </template>
        </modal>
    </div>
</auth-menu>