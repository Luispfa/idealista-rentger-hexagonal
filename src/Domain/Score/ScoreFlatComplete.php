<?php

declare(strict_types=1);

namespace App\Domain\Score;

class ScoreFlatComplete extends ScoreCompleteAbstract
{
    public function __invoke(): int
    {
        if ($this->ad->getTypology() != 'FLAT') {
            return 0;
        }

        return $this->hasDescription() && $this->hasPictures() && $this->hasHouseSize() ? 40 : 0;
    }
}
