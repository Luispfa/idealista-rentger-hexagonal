<?php

declare(strict_types=1);

namespace App\Domain\Score;

class ScoreGarageComplete extends ScoreCompleteAbstract
{
    public function __invoke(): int
    {
        if ($this->ad->getTypology() != 'GARAGE') {
            return 0;
        }

        return  $this->hasPictures() ? 40 : 0;
    }
}
