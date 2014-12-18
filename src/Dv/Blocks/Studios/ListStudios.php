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
        if (isset($this->arguments)) {
            return $model->getActorInfo($this->arguments);
        } else {
            return $model->getActorInfo();
        }
    }
}