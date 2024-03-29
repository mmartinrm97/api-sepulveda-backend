<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsCatalog extends Model
{
    use HasFactory;

    public static array $relationships = ['goodsGroup','goodsClass','warehouse'];

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

    public function goodsClass(){
        return $this->belongsTo(GoodsClass::class, 'goods_class_id');
    }

    public function goodsGroup(){
        return $this->belongsTo(GoodsGroup::class, 'goods_group_id');
    }

    public function goods(){
        return $this->hasMany(Good::class, 'goods_catalog_id');
    }
}
