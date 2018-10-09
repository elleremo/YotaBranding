<?php

namespace YotaBranding\Classes;

use YotaBranding\Utils\Assets;


class Banner
{
    use Assets;

    public function __construct()
    {
        add_action('BroDude__theme-main-before', [$this, 'image']);
    }

    public function image()
    {
        ?>
        <div class="yota-banner__wrapper">
            <div class="yota-banner__wrap">
                <img class="yota-banner__image" src="<?php echo $this->url() . "images/home.php"; ?>"/>
            </div>
        </div>
        <?php
    }
}