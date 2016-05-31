<?php namespace Acme\BookShop\Models;

use Model;

/**
 * Level Model
 */
class Level extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_bookshop_levels';

    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required|unique:acme_bookshop_levels',
        'ordinal' => 'integer',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = ["books"=>['Acme\Bookshop\Models\Book'] ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}