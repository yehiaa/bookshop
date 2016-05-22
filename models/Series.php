<?php namespace Acme\BookShop\Models;

use Model;

/**
 * Series Model
 */
class Series extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_bookshop_series';

    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'title' => 'required|unique:acme_bookshop_series',
        'slug' => 'required',
        'price' => 'required',
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
    public $attachOne = ['image' => 'System\Models\File',];
    public $attachMany = [];

}