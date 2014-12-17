<?php

namespace Dv\Blocks\Studios;

use Dv\View\BlockAbstract;
use Dv\Models\Studio;

class ListStudios extends BlockAbstract
{
    public function getStudiosList()
    {
        $model = new Studio();
        return $model->getActorInfo();
    }
}