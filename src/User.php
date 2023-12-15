<?php

declare(strict_types=1);

namespace App;

class User
{
    public $first_name;

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setFirstName(string $firstName): void
    {
        $this->first_name = trim($firstName);
    }
}