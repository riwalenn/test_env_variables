<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersCategories
 *
 * @ORM\Table(name="users_categories", indexes={@ORM\Index(name="IDX_ED98E9FC67B3B43D", columns={"users_id"}), @ORM\Index(name="IDX_ED98E9FCA21214B7", columns={"categories_id"})})
 * @ORM\Entity
 */
class UsersCategories
{
    /**
     * @var int
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $usersId;

    /**
     * @var int
     *
     * @ORM\Column(name="categories_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoriesId;


}
