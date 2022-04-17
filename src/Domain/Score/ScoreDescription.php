<?php

declare(strict_types=1);

namespace App\Domain\Score;

final class ScoreDescription extends ScoreAbstract
{
    public function __invoke(): int
    {
        return strlen($this->ad->getDescription()) > 0 ? 5 : 0;
    }
}
