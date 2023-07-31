<?php

use ChristopherArter\CoolCharts\Config\Builder;
use ChristopherArter\CoolCharts\Transformers\HighChartsTransformer;

it('transforms chart data for HighCharts', function () {
    $builder = (new Builder())
        ->bar()
        ->title('My Cool Chart')
        ->data([1, 2, 3, 4, 5])
        ->labels(['One', 'Two', 'Three', 'Four', 'Five'])
        ->useHighCharts();

    $transformer = new HighChartsTransformer();

    $chart = $transformer->transform($builder);
    expect($chart)->toHaveKey('chart');
    expect($chart)->toHaveKey('title');
    expect($chart['chart']['type'])->toBe(\ChristopherArter\CoolCharts\Config\ChartType::BAR->value);
});
