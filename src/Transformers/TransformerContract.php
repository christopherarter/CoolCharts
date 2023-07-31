<?php

namespace ChristopherArter\CoolCharts\Transformers;

use ChristopherArter\CoolCharts\Config\Builder;

interface TransformerContract
{
    public function transform(Builder $builder): array;
}