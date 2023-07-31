<?php

namespace ChristopherArter\CoolCharts\Config;

enum ChartType: string {
    case LINE = 'line';
    case BAR = 'bar';
    case PIE = 'pie';
}