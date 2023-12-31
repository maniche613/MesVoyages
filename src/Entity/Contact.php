<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Description of Contact
 *
 * @author hmagn
 */
class Contact {
    /**
     * @var string|null
     * @assert\NotBlank()
     * @assert\Length(min=2, max=100)
     */
    private $nom;
    
    /**
     * @var string|null
     * @assert\NotBlank()
     * @assert\Email()
     */
    private $email;
    
    /**
     * @var string|null
     * @assert\NotBlank
     */
    private $message;
    
    function getNom(): ?string {
        return $this->nom;
    }

    function getEmail(): ?string {
        return $this->email;
    }

    function getMessage(): string {
        return $this->message;
    }

    function setNom(?string $nom) {
        $this->nom = $nom;
        return $this;
    }

    function setEmail(?string $email) {
        $this->email = $email;
        return $this;
    }

    function setMessage(string $message) {
        $this->message = $message;
        return $this;
    }


}
