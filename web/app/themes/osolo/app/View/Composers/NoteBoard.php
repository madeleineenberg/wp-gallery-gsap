<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class NoteBoard extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.note-board'
    ];


    public function with()
    {
        return [
           'heading' => get_field('heading'),
           'id' => get_field('ninja_forms_id'),
        ];
    }

}
