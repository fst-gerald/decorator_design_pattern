<?php

namespace App;

class UserModel extends ModelDecorator
{
    const ADDITIONAL_PAGE_COUNT = 5;

    public function getCountPerPage(): int
    {
        return $this->collection->getCountPerPage() + self::ADDITIONAL_PAGE_COUNT;
    }
}
