<auth-menu inline-template v-bind:show-login="{{ request('login') ? 'true' : 'false' }}">
    <div class="auth-menu">
        <div class="auth-btn">
            <i class="fa fa-user" aria-hidden="true" id="dropdownAuthMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAuthMenu">
                <a v-if="$auth.isAuthenticated()" class="dropdown-item" href="{{ route('profile-page') }}">Profile</a>
                <a v-if="$auth.isAuthenticated()" class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                <span v-if="!$auth.isAuthenticated()" class="dropdown-item" @click="showLoginForm">Login</span>
                <span v-if="!$auth.isAuthenticated()" class="dropdown-item" @click="showRegistrationForm">Sign up</span>
            </div>
            <modal v-if="showModal" @close="closeModal">
                <template slot="content">
                    <keep-alive>
                        <component :is="currentComponent" @modal-switch="modalSwitch"></component>
                    </keep-alive>
                </template>
            </modal>
        </div>
        <div class="become-vip">
            <a class="become-vip-btn" href="{{ route('advertise-b-user-page') }}">become a VIP</a>
        </div>
    </div>
</auth-menu>