<?php

namespace ChristopherArter\CoolCharts\Transformers;

use ChristopherArter\CoolCharts\Config\Builder;

class HighChartsTransformer implements TransformerContract
{
    public function transform(Builder $builder): array
    {
        return [
            'chart' => [
                'type' => $builder->type->value,
            ],
            'title' => [
                'text' => $builder->title,
            ],
            'series' => [
                [
                    'data' => $builder->data,
                ],
            ],
            'xAxis' => [
                'categories' => $builder->labels,
            ],
        ];
    }
}