<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PageFooter extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.page-footer'
    ];


    public function with()
    {
        return [
           'mode_settings' => get_field('mode_settings'),
           
        ];
    }

}
