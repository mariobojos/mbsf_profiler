<?php

namespace App\Entity;

use App\Repository\EducationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EducationRepository::class)]
class Education
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $course = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $year_begin = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $year_end = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $is_graduate = 0;

    #[ORM\Column(length: 255)]
    private ?string $school = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): static
    {
        $this->course = $course;

        return $this;
    }

    public function getYearBegin(): ?int
    {
        return $this->year_begin;
    }

    public function setYearBegin(int $year_begin): static
    {
        $this->year_begin = $year_begin;

        return $this;
    }

    public function getYearEnd(): ?int
    {
        return $this->year_end;
    }

    public function setYearEnd(int $year_end): static
    {
        $this->year_end = $year_end;

        return $this;
    }

    public function getIsGraduate(): ?int
    {
        return $this->is_graduate;
    }

    public function setIsGraduate(int $is_graduate): static
    {
        $this->is_graduate = $is_graduate;

        return $this;
    }

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): static
    {
        $this->school = $school;

        return $this;
    }
}
