<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'pubdate', 'publisher', 'rating', 'isbn', 'author_intro', 'image', 'catalog', 'summary'];

    public function Stores()
    {
        return $this->hasMany('App\Store');
    }
}
