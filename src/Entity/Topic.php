<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TopicRepository")
 */
class Topic
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
  private $title;

  /**
   * @ORM\Column(type="text")
   */
  private $content;

  /**
   * @ORM\Column(type="datetime")
   */
  private $created;

  /**
   * @ORM\Column(type="datetime")
   */
  private $updated;

  /**
   * @ORM\Column(type="smallint", options={"default": 0})
   */
  private $deleted;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getTitle(): ?string
  {
    return $this->title;
  }

  public function setTitle(string $title): self
  {
    $this->title = $title;

    return $this;
  }

  public function getContent(): ?string
  {
    return $this->content;
  }

  public function setContent(string $content): self
  {
    $this->content = $content;

    return $this;
  }

  public function getCreated(): ?\DateTimeInterface
  {
    return $this->created;
  }

  public function setCreated(\DateTimeInterface $created): self
  {
    $this->created = $created;

    return $this;
  }

  public function getUpdated(): ?\DateTimeInterface
  {
    return $this->updated;
  }

  public function setUpdated(\DateTimeInterface $updated): self
  {
    $this->updated = $updated;

    return $this;
  }

  public function getDeleted(): ?int
  {
    return $this->deleted;
  }

  public function setDeleted(int $deleted): self
  {
    $this->deleted = $deleted;

    return $this;
  }
}
