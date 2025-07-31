<?php

namespace App\Models;

class Book extends TenantScopedModel
{
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'publisher',
        'year',
        'quantity',
        'shelf_location',
        'status',
        'tenant_id'
    ];
}
