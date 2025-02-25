<?php

namespace aedan\User\Tests\Unit;

use Aedan\User\Rules\VaildPassword;
use PHPUnit\Framework\TestCase;

class PasswordValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_password_should_not_be_less_6_character()
    {
        $result = (new VaildPassword())->passes('' , 'A3s!');
        $this->assertEquals(0 , $result);
    }
    public function test_password_should_include_sign_character()
    {
        $result = (new VaildPassword())->passes('' , 'A3sj4jhs');
        $this->assertEquals(0 , $result);
    }
    public function test_password_should_include_digit_character()
    {
        $result = (new VaildPassword())->passes('' , 'SwwgwwW#@');
        $this->assertEquals(0 , $result);
    }
    public function test_password_should_include_capitial_character()
    {
        $result = (new VaildPassword())->passes('' , '35wwgwws#@');
        $this->assertEquals(0 , $result);
    }
    public function test_password_should_include_small_character()
    {
        $result = (new VaildPassword())->passes('' , '35AAFAFAF#@');
        $this->assertEquals(0 , $result);
    }
}
