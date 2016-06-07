<?php

class NhieuTest extends PHPUnit_Framework_TestCase
{
    public function test_nhieu_to_return_zero_count()
    {
        $this->assertEquals("không người", nhieu("người", 0));
    }

    public function test_nhieu_to_return_singular()
    {
        $this->assertEquals("một người",  nhieu("người", 1));
        $this->assertEquals("hai người",  nhieu("người", 2));
        $this->assertEquals("ba người",   nhieu("người", 3));
        $this->assertEquals("bốn người",  nhieu("người", 4));
        $this->assertEquals("năm người",  nhieu("người", 5));
        $this->assertEquals("sáu người",  nhieu("người", 6));
        $this->assertEquals("bảy người",  nhieu("người", 7));
        $this->assertEquals("tám người",  nhieu("người", 8));
        $this->assertEquals("chín người", nhieu("người", 9));
        $this->assertEquals("mười người", nhieu("người", 10));
    }

    public function test_nhieu_to_return_plural()
    {
        $this->assertEquals("nhiều người", nhieu("người", 11));
    }

    public function test_nhieu_to_return_default_plural()
    {
        $this->assertEquals("nhiều xe", nhieu("xe"));
    }
}