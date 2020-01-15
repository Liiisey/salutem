<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OpeningHourRepository")
 */
class OpeningHour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dayname;

    /**
     * @ORM\Column(type="integer")
     */
    private $daynumber;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $openingtime;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $closingtime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayname(): ?string
    {
        return $this->dayname;
    }

    public function setDayname(string $dayname): self
    {
        $this->dayname = $dayname;

        return $this;
    }

    public function getDaynumber(): ?int
    {
        return $this->daynumber;
    }

    public function setDaynumber(int $daynumber): self
    {
        $this->daynumber = $daynumber;

        return $this;
    }

    public function getOpeningtime(): ?\DateTimeInterface
    {
        return $this->openingtime;
    }

    public function setOpeningtime(?\DateTimeInterface $openingtime): self
    {
        $this->openingtime = $openingtime;

        return $this;
    }

    public function getClosingtime(): ?\DateTimeInterface
    {
        return $this->closingtime;
    }

    public function setClosingtime(?\DateTimeInterface $closingtime): self
    {
        $this->closingtime = $closingtime;

        return $this;
    }
}
