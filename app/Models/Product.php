<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'merk_id', 'image'];

    public function merk(): BelongsTo
    {
        return $this->belongsTo(Merk::class)->withTrashed();
    }
}
