<?php

namespace App\Entity;

use App\Repository\CardValueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CardValueRepository::class)
 * TODO:erstelle mehrere Value klassen
 */
class CardValue
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\Card", inversedBy="cardvalues")
     */
    private $card;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\CardAttribute", inversedBy="cardvalues")
     */
    private $cardAttribute;


    /**
     * @ORM\Column(type="string", length=60)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="editCardValues")
     */
    private $lockUser;



    /**
     * @return User|null
     */
    public function getLockUser(): ?User
    {
        return $this->lockUser;
    }

    /**
     * @param User|null $lockUser
     * @return $this
     */
    public function setLockUser(?User $lockUser): self
    {
        $this->lockUser = $lockUser;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }





    /**
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * @param Card|null $card
     * @return $this
     */
    public function setCard(?Card $card): self
    {
        $this->card = $card;

        return $this;
    }
    /**
     * @return CardAttribute|null
     */
    public function getCardAttribute(): ?CardAttribute
    {
        return $this->cardAttribute;
    }

    /**
     * @param CardAttribute|null $cardAttribute
     * @return $this
     */
    public function setCardAttribute(?CardAttribute $cardAttribute): self
    {
        $this->cardAttribute = $cardAttribute;

        return $this;
    }




}
