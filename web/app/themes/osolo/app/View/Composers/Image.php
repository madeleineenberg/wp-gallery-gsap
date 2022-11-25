<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Image extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.image'
    ];


    public function with()
    {
        return [
            'image' => get_field('image'),
            'video' => get_field('video')
        ];
    }
}
