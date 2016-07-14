<?php

/*
 * This file is part of the Active Collab Object project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

namespace ActiveCollab\Object\Test;

use ActiveCollab\Object\Test\Base\TestCase;
use ActiveCollab\Object\Test\Fixtures\FirstClass;
use ActiveCollab\Object\Test\Fixtures\SecondClass;

/**
 * @package ActiveCollab\Object\Test
 */
class IsTest extends TestCase
{
    public function testTypeMismatch()
    {
        $object_of_first_class = new FirstClass(1);

        $this->assertFalse($object_of_first_class->is(null));
        $this->assertFalse($object_of_first_class->is(true));
        $this->assertFalse($object_of_first_class->is(1));
        $this->assertFalse($object_of_first_class->is('string'));
    }

    public function testClassMismatching()
    {
        $object_of_first_class = new FirstClass(1);
        $object_of_second_class = new SecondClass(1);

        $this->assertFalse($object_of_first_class->is($object_of_second_class));
        $this->assertFalse($object_of_second_class->is($object_of_first_class));
    }

    public function testIdMismatching()
    {
        $first_object_of_first_class = new FirstClass(1);
        $second_object_of_first_class = new FirstClass(2);

        $this->assertFalse($first_object_of_first_class->is($second_object_of_first_class));
        $this->assertFalse($second_object_of_first_class->is($first_object_of_first_class));
    }

    public function testIdTypeMismatching()
    {
        $first_object_of_first_class = new FirstClass(1);
        $second_object_of_first_class = new FirstClass('1');

        $this->assertFalse($first_object_of_first_class->is($second_object_of_first_class));
        $this->assertFalse($second_object_of_first_class->is($first_object_of_first_class));
    }

    public function testMatching()
    {
        $first_object_of_first_class = new FirstClass(1);
        $second_object_of_first_class = new FirstClass(1);

        $this->assertTrue($first_object_of_first_class->is($second_object_of_first_class));
        $this->assertTrue($second_object_of_first_class->is($first_object_of_first_class));
    }
}
