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

        $expectedDeviceTypes = [
            'Console',
            'Crawler',
            'Desktop',
            'Mobile',
            'Tablet'
        ];

        $this->assertInternalType('array', $deviceTypes);
        $this->assertNotEmpty($deviceTypes);
        $this->assertEquals(count($expectedDeviceTypes), count($deviceTypes));

        foreach ($expectedDeviceTypes as $type) {
            $this->assertContains($type, $expectedDeviceTypes);
        }
    }

    public function testGetAgentTypes()
    {
        $agentTypes = UserAgent::getAgentTypes();

        $expectedAgentTypes = [
            'Browser',
            'Console',
            'Crawler'
        ];

        $this->assertInternalType('array', $agentTypes);
        $this->assertNotEmpty($agentTypes);
        $this->assertEquals(count($expectedAgentTypes), count($agentTypes));

        foreach ($expectedAgentTypes as $type) {
            $this->assertContains($type, $agentTypes);
        }
    }

    public function testGetAgentNames()
    {
        $agentNames = UserAgent::getAgentNames();

        $expectedAgentNames = [
            'Baiduspider',
            'Bingbot',
            'Bunjalloo',
            'Chrome',
            'Chromium',
            'Epiphany',
            'Firefox',
            'Googlebot',
            'Googlebot-Image',
            'Iceweasel',
            'IE Mobile',
            'Internet Explorer',
            'Konqueror',
            'konqueror',
            'Midori',
            'Mobile Safari',
            'NetFront',
            'Opera',
            'Pale Moon',
            'PlayStation 3',
            'PlayStation Portable',
            'QupZilla',
            'rekonq',
            'Safari',
            'Seamonkey',
            'Teoma',
            'Xbox One',
            'Yahoo! Slurp China',
            'Yahoo! Slurp',
            'YahooSeeker',
            'YahooSeeker-Testing',
            'YandexBot',
            'YandexImages'
        ];

        $this->assertInternalType('array', $agentNames);
        $this->assertNotEmpty($agentNames);
        $this->assertEquals(count($expectedAgentNames), count($agentNames));

        foreach ($expectedAgentNames as $name) {
            $this->assertContains($name, $agentNames);
        }
    }

    public function testGetOSTypes()
    {
        $OSTypes = UserAgent::getOSTypes();

        $expectedOSTypes = [
            'unknown',
            'Android',
            'BSD',
            'Firefox OS',
            'iOS',
            'Linux',
            'Nintendo DS',
            'Nintendo Wii',
            'OS X',
            'PlayStation',
            'Windows',
            'Xbox'
        ];

        $this->assertInternalType('array', $OSTypes);
        $this->assertNotEmpty($OSTypes);
        $this->assertEquals(count($expectedOSTypes), count($OSTypes));

        foreach ($expectedOSTypes as $type) {
            $this->assertContains($type, $OSTypes);
        }
    }

    public function testGetOSNames()
    {
        $OSNames = UserAgent::getOSNames();

        $expectedOSNames = [
            'unknown',
            'Android',
            'Firefox OS',
            'FreeBSD',
            'iPhone OS',
            'Linux',
            'NetBSD',
            'Nintendo DS',
            'Nintendo Wii',
            'OpenBSD',
            'OS X',
            'Playstation 3',
            'PlayStation 3',
            'PlayStation 4',
            'PlayStation Portable',
            'PlayStation Vita',
            'Ubuntu',
            'Windows 7',
            'Windows 8',
            'Windows NT',
            'Windows Phone',
            'Xbox One'
        ];

        $this->assertInternalType('array', $OSNames);
        $this->assertNotEmpty($OSNames);
        $this->assertEquals(count($expectedOSNames), count($OSNames));

        foreach ($expectedOSNames as $name) {
            $this->assertContains($name, $OSNames);
        }
    }

    /**
     * @expectedException Exception
     */
    public function testException()
    {
        UserAgent::random([
            'os_type' => 'DOS',
            'os_name' => 'MS-DOS 6.2',
            'device_type' => 'unknown'
        ]);
    }

    public function testFilterAcceptsArrays()
    {
        $userAgent = UserAgent::random([
            'os_type' => ['Xbox', 'NA', ''],
            'agent_name' => ['Xbox One', 'NA', '']
        ]);

        $this->assertContains('Xbox One', $userAgent);
    }
}
