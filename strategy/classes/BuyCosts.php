<?php

namespace Classes;

final class BuyCosts extends Costs {
    private int $price = 13650;

    public function cost(Vechle $vechle): int
    {
        return $vechle->getValue() * $this->price;
    }

    public function chargeType(): string
    {
        return 'Fixed price';
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}