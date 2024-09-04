<?php
class Room {
  private $id;
  private $floor_id;
  private $name;
  private $capacity;

  public function __construct(
    int $id = null,
    int $floor_id = null,
    string $name = null,
    int $capacity = null
  ) {
    $this->id = $id;
    $this->floor_id = $floor_id;
    $this->name = $name;
    $this->capacity = $capacity;
  }

  public function getFloor_id(): ?int
  {
    return $this->floor_id;
  }

  public function setFloor_id(int $floor_id): self
  {
    $this->floor_id = $floor_id;

    return $this;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getCapacity(): ?int
  {
    return $this->capacity;
  }

  public function setCapacity(int $capacity): self
  {
    $this->capacity = $capacity;

    return $this;
  }
}
