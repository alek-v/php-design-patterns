<?php

namespace Classes;

abstract class Vechle {
    public function __construct(private int $value, private Costs $costs) {}

    public function cost(): int
    {
        return $this->costs->cost($this);
    }

    public function chargeType(): string
    {
        return $this->costs->chargeType();
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getPrice(): int
    {
        return $this->costs->getPrice();
    }
}