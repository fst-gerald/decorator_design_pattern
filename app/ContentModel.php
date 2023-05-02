<?php

namespace App;

class ContentModel extends ModelDecorator
{
    const MODEL_NAME = 'Content';

    const ADDITIONAL_PAGE_COUNT = 10;

    public function getCountPerPage(): int
    {
        return $this->collection->getCountPerPage() + self::ADDITIONAL_PAGE_COUNT;
    }

    public function getModelName(): string
    {
        return self::MODEL_NAME;
    }
}
