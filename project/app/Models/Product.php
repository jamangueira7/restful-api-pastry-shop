<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function Orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
