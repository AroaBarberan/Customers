<?php
/**
 * Created by PhpStorm.
 * User: aroabarberan
 * Date: 10/13/2017
 * Time: 4:31 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['name', 'lastname', 'avatar'];

    public function products()
    {
        return $this->hasMany('App\Product', 'customer_id', 'id');
    }
}