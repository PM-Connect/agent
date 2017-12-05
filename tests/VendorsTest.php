<?php

require __DIR__ . '/../vendor/mobiledetect/mobiledetectlib/tests/VendorsTest_tmp.php';

use Jenssegers\Agent\Agent;

class VendorsTestExtended extends VendorsTest
{
    /**
     * @var Agent
     */
    protected $detect;

    public function setUp()
    {
        $this->detect = new Agent;
    }
}
