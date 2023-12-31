<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "total",
        "client_id"
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function Products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('order_id', 'product_id', 'amount');
    }
}
