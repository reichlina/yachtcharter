<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SegelYachts extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'length', 'width', 'manufacturer', 'crew', 'region', 'country', 'harbour', 'price'];
}
