<?php

namespace Dv\Blocks\Studios;

use Dv\View\BlockAbstract;
use Dv\Models\DropDownListStudios;

class DropDownList extends BlockAbstract
{
    public function getDropDownListStudios()
    {
        $model = new DropDownListStudios();
        return $model->getDropDownListStudios();
    }
}