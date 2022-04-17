<?php

declare(strict_types=1);

namespace App\Domain\Score;

use App\Domain\Ad;

abstract class ScoreAbstract
{
    protected $ad;

    public function __construct(Ad $ad)
    {
        $this->ad = $ad;
    }
}
