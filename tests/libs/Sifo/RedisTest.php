<?php
ini_set("include_path", "../libs/Sifo".PATH_SEPARATOR."../../../libs/Sifo".PATH_SEPARATOR.ini_get("include_path"));
require_once 'PHPUnit/Framework.php';

require_once '/var/www/seoframework/libs/Sifo/Redis.php';

/**
 * Test class for Redis.
 * Generated by PHPUnit on 2009-11-01 at 12:16:56.
 */
class RedisTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Redis
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Redis;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement testDebug().
     */
    public function testDebug()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testSetIsUTF8().
     */
    public function testSetIsUTF8()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testSetTimeout().
     */
    public function testSetTimeout()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement test__call().
     */
    public function test__call()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testStrlen().
     */
    public function testStrlen()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement test__destruct().
     */
    public function test__destruct()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
?>
