<?php

use Illuminate\Database\Seeder;
use App\Page;

class StaticPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'slug' => 'privacy_policy',
            'title' => 'Privacy policy',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere ex sit amet lorem aliquet, nec molestie diam viverra. Donec volutpat, tortor eget fringilla facilisis, tortor purus pharetra elit, et posuere massa augue sit amet lectus. Pellentesque tempor in eros sit amet sodales. Vivamus sed eros vitae lacus sodales ultrices. Vivamus vitae mauris aliquet, hendrerit odio a, imperdiet velit. Aenean libero ex, iaculis eget ex congue, porta mattis lacus. Etiam ut ligula accumsan, eleifend ante nec, blandit diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi fermentum justo ipsum, ut feugiat justo ultrices vitae. Sed iaculis, nunc id pulvinar commodo, orci neque euismod dui, in ornare dui arcu eget tellus. Nullam viverra nisi sem, at rutrum mauris rutrum sed. Suspendisse potenti. Praesent massa augue, dapibus in sem vitae, condimentum rutrum orci. Suspendisse mattis interdum nunc, a tincidunt magna vulputate non. Proin ullamcorper imperdiet pretium.</p>
<hr>
Donec a erat sit amet lectus finibus tincidunt in sit amet justo. Praesent iaculis sit amet mi vitae tincidunt. Phasellus dapibus nisi id varius rhoncus. Etiam posuere diam sed ligula dapibus, efficitur commodo erat tincidunt. Nullam nec nibh vel velit lacinia finibus. Vivamus justo turpis, dignissim a ligula nec, dictum convallis orci. Aenean eget tempor sapien. Quisque posuere facilisis auctor. Praesent eget ullamcorper leo. Donec consequat nisl dolor, vel iaculis tellus sodales non. Quisque imperdiet ipsum leo. Integer vel accumsan sapien, non tempus augue.
<hr>
<h3>Proin dolor leo, tincidunt ut lacinia id, laoreet ac dui.</h3>
<ul>
<li>Aenean elementum arcu massa, gravida tincidunt metus aliquet et.</li>
<li>Fusce accumsan purus semper elementum congue.</li>
<li>Interdum et malesuada fames ac ante ipsum primis in faucibus.</li>
<li>Vestibulum viverra consequat mi, id suscipit enim porttitor ac.</li>
<li>Curabitur quis fermentum libero. Etiam accumsan tortor ac rhoncus bibendum.</li>
</ul>
Nam pretium mattis leo, nec dictum justo feugiat ac. Nam sit amet bibendum elit. Nulla in ipsum eget ipsum efficitur fermentum. Etiam viverra tincidunt porta. Proin tempus, risus sit amet dapibus gravida, nibh enim hendrerit erat, vel egestas nibh ipsum in nibh. Morbi lacinia leo nulla, in interdum ex viverra sed. Maecenas hendrerit risus laoreet ligula dapibus porttitor. Nulla facilisi. Nunc condimentum orci sed eros tristique tempor.

Cras consectetur, neque vel pretium ultrices, ligula sapien consectetur justo, sed ultrices eros ligula at libero. Maecenas luctus dui lorem, non porttitor dolor varius id. Mauris efficitur, nisi id mattis placerat, mi augue vehicula nisl, ut feugiat nibh nisl id nibh. Mauris enim quam, pellentesque ac nisi consectetur, consectetur vestibulum risus. Sed vulputate, quam at feugiat hendrerit, sapien eros sagittis urna, eu elementum mi arcu eu nunc. Nunc maximus lectus arcu, et bibendum metus malesuada sit amet. Nulla facilisi.

Proin ut erat in sem viverra mollis in sed eros. Aliquam erat volutpat. Mauris blandit orci finibus egestas ultricies. Praesent in metus pharetra, venenatis nisi vel, luctus felis. Maecenas bibendum congue urna eget accumsan. Maecenas nec lacinia ex, non accumsan libero. Nam non libero mi. Mauris ac sodales nunc. Pellentesque mattis mi a purus dictum mollis. In ultrices dignissim nisl in sodales.'
        ]);
    }
}
