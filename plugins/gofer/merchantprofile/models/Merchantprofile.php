<?php namespace Gofer\MerchantProfile\Models;

use Model;

/**
 * Model
 */
class Merchantprofile extends Model
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
    public $table = 'gofer_merchantprofile_';

    /**
     * @var array Validation rules
     */

    protected $guarded = ['*'];


    public $rules = [
    ];

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User']
    ];

    public static function getFromUser($user)
    {
        if ($user->merchantprofile)
            return $user->merchantprofile;

        $merchantprofile = new static;
        $merchantprofile->user = $user;
        $merchantprofile->save();

        $user->merchantprofile = $merchantprofile;

        return $merchantprofile;
    }
}
