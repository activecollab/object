<?php

/*
 * This file is part of the Active Collab Object project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

namespace ActiveCollab\Object\Test\Fixtures;

use ActiveCollab\Object\ObjectInterface;
use ActiveCollab\Object\ObjectInterface\Implementation as ObjectInterfaceImplementation;

/**
 * @package ActiveCollab\Object\Test\Fixtures
 */
class SecondClass implements ObjectInterface
{
    use ObjectInterfaceImplementation;

    /**
     * @var int
     */
    private $id;

    /**
     * @param int $id
     */
    public function __construct($id = 1)
    {
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
}
