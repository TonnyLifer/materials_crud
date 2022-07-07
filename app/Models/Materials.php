<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materials extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','category_id','type_id','author','description'];

    public function types()
    {
        return $this->belongsTo('App\Models\Type','type_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
