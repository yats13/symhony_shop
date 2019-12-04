<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryParentRepository")
 */
class CategoryParent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $category_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $category_parent;

    /**
     * @ORM\Column(type="smallint")
     */
    private $category_sort;

    /**
     * @ORM\Column(type="smallint")
     */
    private $category_level;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getCategoryParent(): ?int
    {
        return $this->category_parent;
    }

    public function setCategoryParent(int $category_parent): self
    {
        $this->category_parent = $category_parent;

        return $this;
    }

    public function getCategorySort(): ?int
    {
        return $this->category_sort;
    }

    public function setCategorySort(int $category_sort): self
    {
        $this->category_sort = $category_sort;

        return $this;
    }

    public function getCategoryLevel(): ?int
    {
        return $this->category_level;
    }

    public function setCategoryLevel(int $category_level): self
    {
        $this->category_level = $category_level;

        return $this;
    }
}
