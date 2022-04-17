<?php

declare(strict_types=1);

namespace App\Domain\Score;

use App\Domain\Picture;
use function Lambdish\Phunctional\search as PhunctionalSearch;

final class ScorePicture extends ScoreAbstract
{
    public function __invoke(array $pictures): int
    {
        if (!count($this->ad->getPictures())) {
            return -10;
        }

        $score = 0;
        foreach ($this->ad->getPictures() as $pictureId) {
            $pic = PhunctionalSearch(function (Picture $picture) use ($pictureId) {
                return $pictureId == $picture->getId();
            }, $pictures);

            if ($pic->getQuality() == 'SD') {
                $score = $score + 10;
            } else if ($pic->getQuality() == 'HD') {
                $score = $score + 20;
            }
        }

        return $score;
    }
}
