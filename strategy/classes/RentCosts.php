<?php

namespace Classes;

final class RentCosts extends Costs {
    private int $price = 35;

    public function cost(Vechle $vechle): int
    {
        return $vechle->getValue() * $this->price;
    }

    public function chargeType(): string
    {
        return 'Hourly rate';
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}