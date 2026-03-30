<?php

namespace Modules\Product\Services;

use Illuminate\Support\Collection;
use Modules\Product\Models\Product;

class ProductService
{
    public function __construct(
        protected Product $model,
    ) {
    }

    public function all(): Collection
    {
        return $this->model->query()->get();
    }
}