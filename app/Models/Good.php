<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Good extends Model
{
    use HasFactory;

    public static array $relationships = ['warehouse', 'goodsCatalog'];

    protected $fillable = [
        'code',
        'description',
        'warehouse_id',
        'goods_catalog_id',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
    ];

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id');
    }

    public function goodsCatalog(): BelongsTo
    {
        return $this->belongsTo(GoodsCatalog::class, 'goods_catalog_id');
    }
}
