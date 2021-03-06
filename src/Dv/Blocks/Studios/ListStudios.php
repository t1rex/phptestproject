<?php

namespace Dv\Blocks\Studios;

use Dv\View\BlockAbstract;
use Dv\Models\Studio;

class ListStudios extends BlockAbstract
{
    private $arguments = null;

    public function __construct($arguments = null)
    {
        if (isset($arguments)) {
            $this->arguments = $arguments;
        }
    }

    public function getStudiosList()
    {
        $model = new Studio();
            return $model->getActorInfo($this->arguments);
    }
}