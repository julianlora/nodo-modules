<?php

namespace Modules\Product\Providers;

use Modules\Product\Contracts\ProductRepository;
use Nwidart\Modules\Support\ModuleServiceProvider;

class ProductServiceProvider extends ModuleServiceProvider
{
    protected string $name = 'Product';

    protected string $nameLower = 'product';
}