<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FavoriteTools
 *
 * @ORM\Table(name="favorite_tools", indexes={@ORM\Index(name="IDX_5C72F55312469DE2", columns={"category_id"}), @ORM\Index(name="IDX_5C72F55367B3B43D", columns={"users_id"})})
 * @ORM\Entity
 */
class FavoriteTools
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_broken", type="boolean", nullable=false)
     */
    private $isBroken;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_liked", type="boolean", nullable=false)
     */
    private $isLiked;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_unliked", type="boolean", nullable=false)
     */
    private $isUnliked;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_favorite", type="boolean", nullable=false)
     */
    private $isFavorite;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     */
    private $tags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;


}
