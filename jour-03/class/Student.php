<?php
class Student {
  private $id;
  private $grade_id;
  private $email;
  private $fullname;
  private $birthdate;
  private $gender;

  public function __construct(
    int $id = null,
    int $grade_id = null,
    string $email = null,
    string $fullname = null,
    DateTime $birthdate = null,
    string $gender = null
  ) {
    $this->id = $id;
    $this->grade_id = $grade_id;
    $this->email = $email;
    $this->fullname = $fullname;
    $this->birthdate = $birthdate ?? new DateTime();
    $this->gender = $gender;
  }

  public function getGrade_id(): ?int
  {
    return $this->grade_id;
  }

  public function setGrade_id(int $grade_id): self
  {
    $this->grade_id = $grade_id;
    return $this;
  }

  public function getEmail(): ?string
  {
    return $this->email;
  }

  public function setEmail(string $email): self
  {
    $this->email = $email;
    return $this;
  }

  public function getFullname(): string
  {
    return $this->fullname;
  }

  public function setFullname(string $fullname): self
  {
    $this->fullname = $fullname;
    return $this;
  }

  public function getBirthdate(): ?DateTime
  {
    return $this->birthdate;
  }

  public function setBirthdate(?DateTime $birthdate): self
  {
    $this->birthdate = $birthdate;
    return $this;
  }

  public function getGender(): ?string
  {
    return $this->gender;
  }

  public function setGender(string $gender): self
  {
    $this->gender = $gender;
    return $this;
  }
}
?>
