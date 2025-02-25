<?php

namespace aedan\User\Tests\Unit;

use Aedan\User\Rules\VaildMobile;
use PHPUnit\Framework\TestCase;

class MobileValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_mobile_can_not_be_less_than_9_character()
    {
        $result = (new VaildMobile())->passes('' , '939147896');
        $this->assertEquals(0 , $result);

    }
    public function test_mobile_can_not_be_more_than_9_character()
    {
        $result = (new VaildMobile())->passes('' , '939147892526');
        $this->assertEquals(0 , $result);

    }
}
