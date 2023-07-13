<?php

namespace Classes;

abstract class Costs {
    abstract public function cost(Vechle $vechle): int;
    abstract public function chargeType(): string;
    abstract public function getPrice(): int;
}