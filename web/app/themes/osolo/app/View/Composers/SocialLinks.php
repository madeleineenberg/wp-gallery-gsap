<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SocialLinks extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.social'
    ];


    public function with()
    {
        return [
           'links' => get_field('links'),
           'default_icon' => get_field('default_icon'),
        ];
    }

}
