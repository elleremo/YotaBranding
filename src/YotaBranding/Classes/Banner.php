<?php

namespace YotaBranding\Classes;

use YotaBranding\Utils\Assets;


class Banner
{
    use Assets;

    public $banner_url='http://www.yota.ru/voice?utm_source=brodude&utm_medium=branding&utm_campaign=yota_brandig&utm_content=top_banner&utm_term=voice';

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
        <a
                href="<?php echo $this->banner_url;?>"
                target="_blank"
                rel="noopener"
                class="yota-banner__wrapper">
            <div class="yota-banner__wrap">
                <img class="yota-banner__image" src="<?php echo $this->url() . "public/images/banner2x.png"; ?>"/>
            </div>
        </a>
        <?php
    }
}