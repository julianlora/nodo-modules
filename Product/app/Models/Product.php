<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'name',
		'sku',
		'description',
		'price',
		'stock',
		'is_active',
	];

	protected function casts(): array
	{
		return [
			'price' => 'decimal:2',
			'is_active' => 'boolean',
		];
	}
}
