<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodotti extends Model
{
    protected $fillable = ['nome_prod', 'url_img', 'prezzo', 'active'];
}
