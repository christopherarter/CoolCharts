Hey, cool charts.
=======================
![Tests](https://github.com/christopherarter/coolcharts/actions/workflows/ci.yml/badge.svg)

This PHP package provides a flexible and convenient way to transform your data into different chart formats. It provides a fluent interface to build charts and supports different chart libraries, such as ChartJS and HighCharts.

Installation
------------

Use [Composer](https://getcomposer.org/) to install this package. Run the following command:


`composer require christopherarter/cool-charts`

Usage
-----

### Basic Usage

First, you need to use the Builder class to construct your chart.

```php 
use ChristopherArter\CoolCharts\Chart;

$chart = Chart::make()
               ->pie()
               ->title('My Cool Chart')
               ->data([1, 2, 3, 4, 5])
               ->labels(['One', 'Two', 'Three', 'Four', 'Five'])
               ->useChartJs()
               ->build();

```
### Builder Methods

The `Builder` class provides a fluent interface to build your charts:

-   `pie()`: Use this method to specify that you want to create a pie chart.
-   `bar()`: Use this method to specify that you want to create a bar chart.
-   `line()`: Use this method to specify that you want to create a line chart.
-   `title(string $title)`: Use this method to set the title of the chart.
-   `data(array $data)`: Use this method to set the data for the chart. The data should be an array of numbers.
-   `labels(array $labels)`: Use this method to set the labels for the chart data. The labels should be an array of strings.
-   `useHighCharts()`: Use this method to specify that you want to use the HighCharts library to render the chart.
-   `useChartJs()`: Use this method to specify that you want to use the ChartJs library to render the chart.
-   `build()`: Finally, use this method to build the chart. This method returns an array representing the chart.

### Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

### License

MIT