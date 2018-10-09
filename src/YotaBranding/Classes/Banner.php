<?php

namespace YotaBranding\Classes;

use YotaBranding\Utils\Assets;


class Banner
{
    use Assets;

    public function __construct()
    {
        $this->addCss(
                "Yota-banner-style",
                'header',
                [],
            '1.0.0',
            $this->url() . $this->css_patch . "Banner.css"
        );
        add_action('BroDude__theme-content-area-before', [$this, 'image']);
    }

    public function image()
    {
        ?>
        <div class="yota-banner__wrapper">
            <div class="yota-banner__wrap">
                <img class="yota-banner__image" src="<?php echo $this->url() . "public/images/banner.png"; ?>"/>
            </div>
        </div>
        <?php
    }
}