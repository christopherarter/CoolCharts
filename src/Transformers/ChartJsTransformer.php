<?php

namespace ChristopherArter\CoolCharts\Transformers;

use ChristopherArter\CoolCharts\Config\Builder;

class ChartJsTransformer implements TransformerContract
{
    public function transform(Builder $builder): array {
        return [
            'type' => $builder->type->value,
            'data' => [
                'labels' => $builder->labels,
                'datasets' => [
                    [
                        'label' => $builder->title,
                        'data' => $builder->data,
                    ],
                ],
            ],
        ];
    }

}