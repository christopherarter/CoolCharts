<?php

namespace ChristopherArter\CoolCharts;

use ChristopherArter\CoolCharts\Config\Builder;

class Chart
{
    public static function make(): Builder
    {
        return new Builder();
    }
}
