<?php

declare(strict_types=1);

namespace Odiseo\SyliusBannerPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\TranslationInterface;
use Symfony\Component\HttpFoundation\File\File;

interface BannerTranslationInterface extends
    ResourceInterface,
    TranslationInterface,
    TimestampableInterface
{
    /**
     * @param File|null $file
     */
    public function setImageFile(?File $file): void;

    /**
     * @return File|null
     */
    public function getImageFile(): ?File;

    /**
     * @param string|null $imageName
     */
    public function setImageName(?string $imageName): void;

    /**
     * @return string|null
     */
    public function getImageName(): ?string;

    /**
     * @param File|null $file
     */
    public function setMobileImageFile(?File $file): void;

    /**
     * @return File|null
     */
    public function getMobileImageFile(): ?File;

    /**
     * @param string|null $mobileImageName
     */
    public function setMobileImageName(?string $mobileImageName): void;

    /**
     * @return string|null
     */
    public function getMobileImageName(): ?string;

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void;

    /**
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @return File|null
     */
    public function getBackgroundImageFile(): ?File;

    /**
     * @param File|null $file
     */
    public function setBackgroundImageFile(?File $file): void;

    /**
     * @return string|null
     */
    public function getBackgroundImageName(): ?string;

    /**
     * @param string|null $backgroundImageName
     */
    public function setBackgroundImageName(?string $backgroundImageName): void;

    /**
     * @return string|null
     */
    public function getShortDescription(): ?string;

    /**
     * @param string|null $shortDescription
     */
    public function setShortDescription(?string $shortDescription): void;

    /**
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void;
}
