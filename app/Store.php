<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['owner', 'book_id', 'borrower', 'available'];
}
