<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('main-page');

Route::get('/admin', 'Admin\DashboardController@index');
Route::get('/home', 'Admin\DashboardController@index');

Route::get('/login', array('as' => 'login','uses' => 'HomeController@login'));
Route::post('/login', ['uses' => 'Auth\LoginController@login']);
Route::get('/logout', ['uses' => 'Auth\LoginController@logout']);
Route::get('/register', ['uses' => 'HomeController@register']);
Route::post('/register', ['uses' => 'Auth\RegisterController@create']);

Auth::routes();

Route::get('/redirect/{service}', 'SocialAuthController@redirect');

/* Pages */
Route::get('/profile', 'ProfileController@index')->name('profile-page');
Route::get('/explore', 'ExploreController@index')->name('explore-page');
Route::get('/explore/{category}', 'ExploreController@show')->name('explore-subpage');
Route::get('/explore/profile', 'ExploreController@showProfile')->name('explore-profile-page');
Route::get('/explore/nightlife/profile', 'ExploreController@showNightLifeProfile')->name('explore-nightlife-profile-page');
Route::get('/explore/dayclubs/profile', 'ExploreController@showDayClubsProfile')->name('explore-dayclubs-profile-page');
Route::get('/explore/nightlife/{category}', 'ExploreController@showNightlifeCategory')->name('explore-nightlfie-subpage');
Route::get('/explore/store', 'ExploreController@showStore')->name('explore-store-page');
Route::get('/explore/store/products', 'ExploreController@showStoreProducts')->name('explore-store-products-page');
Route::get('/explore/store/product', 'ExploreController@showStoreProduct')->name('explore-store-product-page');
Route::get('/events', 'EventsController@index')->name('events-page');
Route::get('/events/more', 'EventsController@showMore')->name('events-more-page');
Route::get('/events/profile', 'EventsController@showProfile')->name('events-profile-page');
Route::get('/events/products', 'EventsController@showProducts')->name('events-products-page');
Route::get('/events/product', 'EventsController@showProduct')->name('events-product-page');
Route::get('/fashion', 'FashionController@index')->name('fashion-page');
Route::get('/fashion/local-designer-houses', 'FashionController@designerLocalHouseShow')->name('fashion-local-designer-page');
Route::get('/fashion/designer-house', 'FashionController@designerHouseShow')->name('fashion-designer-page');
Route::get('/fashion/haute-coutre', 'FashionController@showHautreCoutre')->name('fashion-hautre-coutre-page');
Route::get('/fashion/must-haves', 'FashionController@showMustHaves')->name('fashion-must-haves-page');
Route::get('/fashion/spotlight-on', 'FashionController@showSpotlightOn')->name('fashion-spotlight-on-page');
Route::get('/fashion/products', 'FashionController@showProducts')->name('fashion-product-page');
Route::get('/fashion/product', 'FashionController@showProduct')->name('fashion-per-product-page');
Route::get('/market-place', 'MarketPlaceController@index')->name('market-place-page');
Route::get('/market-place/more', 'MarketPlaceController@showMore')->name('market-place-more-page');
Route::get('/market-place/retails', 'MarketPlaceController@showRetails')->name('market-place-retails-page');
Route::get('/market-place/products', 'MarketPlaceController@showProducts')->name('market-place-product-page');
Route::get('/market-place/product', 'MarketPlaceController@showProduct')->name('market-place-per-product-page');
Route::get('/music', 'MusicController@index')->name('music-page');
Route::get('/music/radio', 'MusicController@showRadio')->name('music-radio-page');
Route::get('/music/products', 'MusicController@showProducts')->name('music-product-page');
Route::get('/music/product', 'MusicController@showProduct')->name('music-per-product-page');
Route::get('/music/artist', 'MusicController@show')->name('music-artist-page');
Route::get('/music/band', 'MusicController@show')->name('music-band-page');
Route::get('/music/dj', 'MusicController@show')->name('music-dj-page');
Route::get('/music/artists-bands-djs', 'MusicController@showArtistBandDjs')->name('music-artist-band-dj-page');
Route::get('/music/loop-entertainment', 'MusicController@showLoopEntertainment')->name('music-loop-entertainment-page');
Route::get('/music/venues', 'MusicController@showVenues')->name('music-venues-page');
Route::get('/music/venues/profile', 'MusicController@showVenuesProfile')->name('music-venues-profile-page');
Route::get('/taste', 'TasteController@index')->name('taste-page');
Route::get('/taste/bars-breweries-distilleries', 'TasteController@showBars')->name('taste-bars-page');
Route::get('/taste/bars-breweries-distilleries/bar', 'TasteController@showBar')->name('taste-bar-page');
Route::get('/taste/bars-breweries-distilleries/bar/profile', 'TasteController@showBarProfile')->name('taste-bar-profile-page');
Route::get('/taste/bars-breweries-distilleries/distilleries', 'TasteController@showDistilleries')->name('taste-distilleries-page');
Route::get('/taste/bars-breweries-distilleries/distilleries/profile', 'TasteController@showDistilleriesProfile')->name('taste-distilleries-profile-page');
Route::get('/taste/bars-breweries-distilleries/breweries', 'TasteController@showBrewerie')->name('taste-breweries-page');
Route::get('/taste/bars-breweries-distilleries/breweries/profile', 'TasteController@showBrewerieProfile')->name('taste-brewerie-profile-page');
Route::get('/taste/bars-breweries-distilleries/to-visit', 'TasteController@showWinery')->name('taste-winery-page');
Route::get('/taste/bars-breweries-distilleries/community-partner', 'TasteController@showPartner')->name('taste-c-partner-page');
Route::get('/taste/bars-breweries-distilleries/events', 'TasteController@showWineryEvents')->name('taste-winery-events-page');
Route::get('/taste/bars-breweries-distilleries/contact', 'TasteController@showBarWineLoopContact')->name('taste-bar-w-l-contact-page');
Route::get('/taste/chefs-corner', 'TasteController@showChefsCorner')->name('taste-chefs-corner-page');
Route::get('/taste/chefs-corner-profile', 'TasteController@showChefsCornerProfile')->name('taste-chefs-corner-profile-page');
Route::get('/taste/mixology', 'TasteController@showMixology')->name('taste-mixology-page');
Route::get('/taste/coffee-shops', 'TasteController@showCoffeeShops')->name('taste-coffee-shops-page');
Route::get('/taste/coffee-shops/profile', 'TasteController@showCoffeeShopsProfile')->name('taste-coffee-shops-profile-page');
Route::get('/taste/food-truck', 'TasteController@showFoodTruck')->name('taste-food-truck-page');
Route::get('/taste/food-truck/profile', 'TasteController@showFoodTruckProfile')->name('taste-food-truck-profile-page');
Route::get('/taste/private-event-book', 'TasteController@showBarWineLoopContact')->name('taste-private-event-book-page');
Route::get('/taste/restaurants', 'TasteController@showRestaurants')->name('taste-restaurants-page');
Route::get('/taste/restaurants/profile', 'TasteController@showGallery')->name('taste-gallery-page');
Route::get('/taste/wine-loop', 'TasteController@showWineLoop')->name('taste-wine-loop-page');
Route::get('/taste/wine-loop/buy-wine', 'TasteController@showBuyWine')->name('taste-buy-wine-page');
Route::get('/taste/wine-loop/wine-club', 'TasteController@showWineClub')->name('taste-wine-club-page');
Route::get('/taste/wine-loop/contact', 'TasteController@showWineContact')->name('taste-wine-contact-page');
Route::get('/taste/wine-loop/winery-to-visit', 'TasteController@showWineVisit')->name('taste-wine-visit-page');
Route::get('/taste/wine-loop/community-partner', 'TasteController@showWinePartner')->name('taste-wine-partner-page');
Route::get('/taste/wine-loop/experience-events', 'TasteController@showExpEvents')->name('taste-wine-events-page');
Route::get('/taste/wine-loop/book-your-tasting', 'TasteController@showBookTasting')->name('taste-book-tasting-page');
Route::get('/taste/wine-loop-contact', 'TasteController@showWineLoopContact')->name('taste-wine-loop-contact-page');
Route::get('/stay', 'StayController@index')->name('stay-page');
Route::get('/stay/sell', 'StayController@showSell')->name('stay-sell-page');
Route::get('/stay/sell/vendor', 'StayController@showVendor')->name('stay-sell-vendor-page');
Route::get('/stay/sell/vendor/profile', 'StayController@showProfile')->name('stay-sell-vendor-profile-page');
Route::get('/advertise-with-us', 'AdvertiseController@index')->name('advertise-page');
Route::get('/advertise-with-us/business-list', 'AdvertiseController@showList')->name('advertise-b-list-page');
Route::get('/advertise-with-us/event-list', 'AdvertiseController@showEventList')->name('advertise-e-list-page');
Route::get('/advertise-with-us/event-list/contact', 'AdvertiseController@showEventContact')->name('advertise-event-contact-page');
Route::get('/advertise-with-us/become-vip-user', 'AdvertiseController@showBecomeUser')->name('advertise-b-user-page');
Route::get('/advertise-with-us/sell-products', 'AdvertiseController@showSellProducts')->name('advertise-sell-products-page');
Route::get('/advertise-with-us/sell-products/contact', 'AdvertiseController@showSellProductsContact')->name('advertise-sell-products-contact-page');
Route::get('/advertise-with-us/feature-talent', 'AdvertiseController@showFeatureTalent')->name('advertise-feature-talent-page');
Route::get('/advertise-with-us/feature-talent/contact', 'AdvertiseController@showFeatureTalentContact')->name('advertise-feature-talent-contact-page');
Route::get('/advertise-with-us/become-vip-business', 'AdvertiseController@showBecomeBusiness')->name('advertise-b-business-page');
Route::get('/advertise-with-us/business-contact-details', 'AdvertiseController@showBusinessContact')->name('advertise-business-contact-d-page');
Route::get('/advertise-with-us/business-events-contact', 'AdvertiseController@showBusinessEventsContact')->name('advertise-business-events-contact-page');
Route::get('/advertise-with-us/business-contact-details/submit', 'AdvertiseController@showBusinessContactSubmit')->name('advertise-business-contact-d-s-page');
Route::get('/store/products/more', 'ProductsController@showMore')->name('products-more');
//Route::get('/home', 'HomeController@index')->name('home');
