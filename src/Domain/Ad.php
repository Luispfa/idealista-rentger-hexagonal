<?php

declare(strict_types=1);

namespace App\Domain;

use DateTimeImmutable;

final class Ad
{
    private  $id, $typology, $description, $pictures, $houseSize, $gardenSize, $score, $irrelevantSince;
    const RELEVANT_SCORE = 40;

    public function __construct(
        int $id,
        String $typology,
        String $description,
        array $pictures,
        ?int $houseSize = null,
        ?int $gardenSize = null,
        ?int $score = null,
        ?DateTimeImmutable $irrelevantSince = null
    ) {
        $this->id = $id;
        $this->typology = $typology;
        $this->description = $description;
        $this->pictures = $pictures;
        $this->houseSize = $houseSize;
        $this->gardenSize = $gardenSize;
        $this->score = $score;
        $this->irrelevantSince = $irrelevantSince;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTypology(): string
    {
        return $this->typology;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPictures(): array
    {
        return $this->pictures;
    }

    public function getHouseSize(): ?int
    {
        return $this->houseSize;
    }

    public function getGardensize(): ?int
    {
        return $this->gardenSize;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): void
    {
        $this->score = $score;
    }

    public function getIrrelevantSince(): ?DateTimeImmutable
    {
        return $this->irrelevantSince;
    }

}
