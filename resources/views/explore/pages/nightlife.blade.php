@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="sliders">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-8">@{{ pageName }}</h2>
                    <div class="filter-bar col-md-4">
                        <span>
                        <select class="pl-3 pr-5" v-model="pageSelector">
                            <option value="Nightlife" selected>Nightlife</option>
                            <option value="DAYCLUBS/PARTIES">DAYCLUBS/PARTIES</option>
                        </select>
                        </span>
                        <a class="filter-btn ml-3 cursor-pointer" @click="changePage" >Find Filter</a>
                    </div>
                </div>
                <div class="row">
                    <div class="default-card col-md-4 mb-4" v-for="(card, key) in cards" :key="key">
                        <div class="default-wrapper">
                            <a :href="card.link">
                                <img :src="'/assets/img/nightlife/nightlife' + card.id + '.png'" />
                                <div class="content">
                                    <h2 class="mb-3">@{{ card.name }}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EVENTS -->
            <events-widget></events-widget>
        </main>
    </explore-page>
@endsection