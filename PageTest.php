<?php 

require_once __DIR__ . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class PageTest extends TestCase
{
    public function testModelPageCount() : void
    {
        $model = new \App\Model();

        $userModel = new \App\UserModel($model);
        $this->assertEquals(15, $userModel->getCountPerPage());

        $contentModel = new \App\ContentModel($model);
        $this->assertEquals('Content', $contentModel->getModelName());
        $this->assertEquals(20, $contentModel->getCountPerPage());
    }
}