<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','image', 'publication_date','publisher_id','shelf_id','categorie_id','isb'];
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function shelves()
    {
        return $this->belongsTo(Shelve::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categorie::class);
    }
}
