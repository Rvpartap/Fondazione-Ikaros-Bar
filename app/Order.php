<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['data', 'nome', 'classe', 'prodotto', 'prezzo', 'quantity', 'subtotale', 'conferma'];
}
