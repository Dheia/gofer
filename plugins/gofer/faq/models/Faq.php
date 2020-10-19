<?php namespace Gofer\Faq\Models;

use Model;

/**
 * Model
 */
class Faq extends Model
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
    public $table = 'gofer_faq_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany =[
        'categories' =>[
            'Gofer\Faq\Models\Category',
            'table' => 'gofer_faq_faq_category',
            'order' => 'category_title'
        ]
    ];
}
