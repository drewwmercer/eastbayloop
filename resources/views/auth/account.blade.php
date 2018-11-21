@extends('layouts.main-page')

@section('content')
    <account-page inline-template>
        <div class="container account-wrapper mt-5 mb-5">
            <div class="account-sidebar">
                <ul class="account-sidebar__menu-list">
                    <li class="account-sidebar__menu-item" :class="getActiveMenuItemClass(componentNames.DETAILS)" @click="selectComponent(componentNames.DETAILS)">Details</li>
                    <li class="account-sidebar__menu-item" :class="getActiveMenuItemClass(componentNames.SECURITY)" @click="selectComponent(componentNames.SECURITY)">Security</li>
                </ul>
            </div>
            <div class="account-content">
                <keep-alive>
                    <div :is="selectedPage"></div>
                </keep-alive>
            </div>
        </div>
    </account-page>
@endsection