<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\AdResponse;
use App\Domain\AdsResponse;
use App\Domain\QualityAd;
use App\Domain\ScoreAd;
use App\Domain\SystemPersistenceRepository;
use function Lambdish\Phunctional\map as PhunctionalMap;

final class QualityListing
{
    private $repository;

    public function __construct(SystemPersistenceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): AdsResponse
    {
        $scoreAd = new ScoreAd($this->repository->getAds(), $this->repository->getPictures());
        $ads = $scoreAd->calculate();

        $publicAd = new QualityAd($ads);

        return new AdsResponse(...PhunctionalMap(AdResponse::toResponse(), $publicAd->listing()));
    }
}
