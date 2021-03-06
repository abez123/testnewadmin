<?php
/**
 * Model genrated using LaravelVueAdmin
 * Help: https://github.com/razzul/laravel-vue-admin
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sucursal extends Model
{
    use SoftDeletes;
	
	protected $table = 'sucursals';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];
}
