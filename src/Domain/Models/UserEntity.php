<?php

namespace MyClinicPay\Domain\Models;

final class UserEntity
{
    protected string $userName;

    protected string $user;

    protected string $password;

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}
