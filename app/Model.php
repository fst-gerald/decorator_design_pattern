<?php

namespace App;

class Model implements CollectionInterface
{
    const BASE_PAGE_LIMIT = 10;

    public function getCountPerPage(): int
    {
        return self::BASE_PAGE_LIMIT;
    }
}