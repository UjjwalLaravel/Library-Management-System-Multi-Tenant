<?php

namespace App\Models;

class Author extends TenantScopedModel
{
    protected $fillable = [
        'tenant_id',
        'name',
        'biography',
        'birthdate',
        'nationality',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
