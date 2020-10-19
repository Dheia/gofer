<?php namespace Gofer\Faq\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gofer_faq_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany =[
        'faqs' =>[
            'Gofer\Faq\Models\Faq',
            'table' => 'gofer_faq_faq_category',
            'order' => 'question'
        ]
    ];
}
