<?php

use ChristopherArter\CoolCharts\Config\Builder;
use ChristopherArter\CoolCharts\Transformers\ChartJsTransformer;

it('transforms chart data for ChartJs', function () {
    $builder = (new Builder())
        ->pie()
        ->title('My Cool Chart')
        ->data([1, 2, 3, 4, 5])
        ->labels(['One', 'Two', 'Three', 'Four', 'Five'])
        ->useChartJs();

    $transformer = new ChartJsTransformer();

    $chart = $transformer->transform($builder);

    expect($chart)->toHaveKey('type');
    expect($chart)->toHaveKey('data');
    expect($chart['data']['datasets'][0]['data'])->toBe([1, 2, 3, 4, 5]);
    expect($chart['type'])->toBe(\ChristopherArter\CoolCharts\Config\ChartType::PIE->value);
});
