<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PageHero extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.page-hero'
    ];


    public function with()
    {
        return [
           'image' => get_field('image'),
           'title' => get_field('title'),
        ];
    }

}
