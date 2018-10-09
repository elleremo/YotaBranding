<?php
/**
 * User: vladimir rambo petrozavodsky
 * Date: 09.10.2018
 */

namespace YotaBranding\Classes;


class Relay
{

    public function __construct()
    {
        if (isset($_REQUEST['branding']) && 'yota' == $_REQUEST['branding']) {
            if(current_time('mysql') < "2018-10-30 13:49:05" ){
                $this->router();
            }
        }
    }

    public function router()
    {
        new Banner();
        new Reset();
    }

}