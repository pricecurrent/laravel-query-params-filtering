<?php

namespace App;

class ProductsFilter extends QueryFilter
{
    public function price($value)
    {
        $this->builer->where('price', '>', $value);
    }

    public function name($value)
    {
        $this->builer->where('name', 'like', $value);
    }
}
