<?php

namespace YotaBranding\Classes;

use YotaBranding\Utils\Assets;

class Reset
{

    use Assets;

    /**
     *
     * @param object $state
     */
    public function __construct()
    {
        $this->router();
        add_filter('body_class', [$this, 'body_class']);
    }

    public function body_class($classes)
    {
        $classes[]= 'yota-branding';

        return $classes;

    }

    public function router()
    {

        $this->addCss(
            "Yota-reset-style",
            "header",
            [],
            '1.0.0',
            $this->url() . $this->css_patch . "Branding.css"
        );

    }

}
