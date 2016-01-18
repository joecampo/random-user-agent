<?php
namespace Campo\UserAgent\Test;

use Campo\UserAgent;

class UserAgentTest extends \PHPUnit_Framework_TestCase
{
    public function testUserAgent()
    {
        $this->assertNotEmpty(UserAgent::random());
    }

    public function testGetDeviceTypes()
    {
        $deviceTypes = UserAgent::getDeviceTypes();
        $this->assertInternalType('array', $deviceTypes);
        $this->assertNotEmpty($deviceTypes);
    }

    public function testGetAgentTypes()
    {
        $agentTypes = UserAgent::getAgentTypes();
        $this->assertInternalType('array', $agentTypes);
        $this->assertNotEmpty($agentTypes);
    }

    public function testGetAgentNames()
    {
        $agentNames = UserAgent::getAgentNames();
        $this->assertInternalType('array', $agentNames);
        $this->assertNotEmpty($agentNames);
    }

    public function testGetOSTypes()
    {
        $OSTypes = UserAgent::getOSTypes();
        $this->assertInternalType('array', $OSTypes);
        $this->assertNotEmpty($OSTypes);
    }

    public function testGetOSNames()
    {
        $OSNames = UserAgent::getOSNames();
        $this->assertInternalType('array', $OSNames);
        $this->assertNotEmpty($OSNames);
    }
}
