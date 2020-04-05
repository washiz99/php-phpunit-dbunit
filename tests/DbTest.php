<?php
require_once dirname(__DIR__).'/tests/DatabaseTestCase.php';

class DbTest extends DatabaseTestCase
{
    public function getDataSet()
    {
        return $this->createXMLDataSet(dirname(__DIR__).'/tests/_Fixture/user.xml');
    }

    public function testAdd()
    {
        $this->assertSame(2, $this->getConnection()->getRowCount('user'), 'Pre-Condition');
    }
}