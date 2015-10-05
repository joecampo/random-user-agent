<?php
namespace Campo\UserAgent\Test;

use Campo\UserAgent;

class UserAgentTest extends \PHPUnit_Framework_TestCase
{
    public function testUserAgent()
    {
        $this->assertNotEmpty(UserAgent::random());
    }

}