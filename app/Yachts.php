<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yachts extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'length', 'width', 'manufacturer', 'crew', 'region', 'country', 'harbour', 'price'];
}
