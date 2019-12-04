<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meta_title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $meta_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="integer")
     */
    private $brand_id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $volume_value;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $volume_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $discount_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $status_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock_id;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="boolean")
     */
    private $show;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getMetaTitle(): ?string
    {
        return $this->meta_title;
    }

    public function setMetaTitle(string $meta_title): self
    {
        $this->meta_title = $meta_title;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->meta_description;
    }

    public function setMetaDescription(?string $meta_description): self
    {
        $this->meta_description = $meta_description;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getBrandId(): ?int
    {
        return $this->brand_id;
    }

    public function setBrandId(int $brand_id): self
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getVolumeValue(): ?int
    {
        return $this->volume_value;
    }

    public function setVolumeValue(?int $volume_value): self
    {
        $this->volume_value = $volume_value;

        return $this;
    }

    public function getVolumeId(): ?int
    {
        return $this->volume_id;
    }

    public function setVolumeId(?int $volume_id): self
    {
        $this->volume_id = $volume_id;

        return $this;
    }

    public function getDiscountId(): ?int
    {
        return $this->discount_id;
    }

    public function setDiscountId(?int $discount_id): self
    {
        $this->discount_id = $discount_id;

        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->status_id;
    }

    public function setStatusId(int $status_id): self
    {
        $this->status_id = $status_id;

        return $this;
    }

    public function getStockId(): ?int
    {
        return $this->stock_id;
    }

    public function setStockId(int $stock_id): self
    {
        $this->stock_id = $stock_id;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getShow(): ?bool
    {
        return $this->show;
    }

    public function setShow(bool $show): self
    {
        $this->show = $show;

        return $this;
    }
}
