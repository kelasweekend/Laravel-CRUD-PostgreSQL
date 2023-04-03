<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded;

    public function category()
    {
        $this->belongsTo(Categorie::class, 'category_id');
    }

    public function product()
    {
        $this->belongsTo(Product::class, 'product_id');
    }
}