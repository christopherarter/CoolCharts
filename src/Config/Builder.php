<?php

namespace ChristopherArter\CoolCharts\Config;

use ChristopherArter\CoolCharts\Transformers\TransformerContract;

class Builder
{
    public ?string $title;
    public ChartType $type;
    public array $data;
    public ?array $labels;
    public TransformerContract $transformer;

    public function pie(): self {
        $this->type = ChartType::PIE;
        return $this;
    }

    public function bar(): self {
        $this->type = ChartType::BAR;
        return $this;
    }

    public function line(): self {
        $this->type = ChartType::LINE;
        return $this;
    }

    public function title(string $title): self {
        $this->title = $title;
        return $this;
    }

    public function data(array $data): self {
        $this->data = $data;
        return $this;
    }

    public function labels(array $labels): self {
        $this->labels = $labels;
        return $this;
    }

    public function transformer(TransformerContract $transformer): self {
        $this->transformer = $transformer;
        return $this;
    }

    public function useHighCharts(): self {
        $this->transformer = new \ChristopherArter\CoolCharts\Transformers\HighChartsTransformer();
        return $this;
    }

    public function useChartJs(): self {
        $this->transformer = new \ChristopherArter\CoolCharts\Transformers\ChartJsTransformer();
        return $this;
    }

    public function build(): array {
        return $this->transformer->transform($this);
    }
}