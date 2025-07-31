<?php

namespace App\Models;

class Book extends TenantScopedModel
{
    protected $fillable = [
        'tenant_id',
        'title',
        'author_id',
        'isbn',
        'publisher',
        'year',
        'quantity',
        'shelf_location',
        'status',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
