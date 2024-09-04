<?php
class Grade {
  private $id;
  private $room_id;
  private $name;
  private $year;

  public function __construct(
    int $id = null,
    int $room_id = null,
    string $name = null,
    DateTime $year = null
  ) {
    $this->id = $id;
    $this->room_id = $room_id;
    $this->name = $name;
    $this->year = $year ?? new DateTime();
  }

  public function getRoom_id(): ?int
  {
    return $this->room_id;
  }

  public function setRoom_id(?int $room_id): self
  {
    $this->room_id = $room_id;

    return $this;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function setName(?string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getYear(): ?DateTime
  {
    return $this->year;
  }

  public function setYear(?DateTime $year): self
  {
    $this->year = $year;

    return $this;
  }
}