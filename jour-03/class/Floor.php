<?php
class Floor {
  private $id;
  private $name;
  private $level;

  public function __construct(
    int $id = null,
    string $name = null,
    int $level = null
  ) {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
  }



  public function getLevel(): ?int
  {
    return $this->level;
  }

  public function setLevel(int $level): self
  {
    $this->level = $level;

    return $this;
  }
}
