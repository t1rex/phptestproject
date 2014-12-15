<?php
namespace Dv\Blocks;

use Dv\Core\Kernel;

abstract class BlockAbstract
{
    protected function getLayout()
    {
        return Kernel::$container->layout;
    }

    protected function getTemplate()
    {

    }
}