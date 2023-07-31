<?php

namespace ChristopherArter\CoolCharts;

class Chart
{
    public static function make(): ChartBuilder
    {
        return new ChartBuilder();
    }
}