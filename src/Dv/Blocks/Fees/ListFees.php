<?php

namespace Dv\Blocks\Fees;

use Dv\View\BlockAbstract;
use Dv\Models\Fees;

class ListFees extends BlockAbstract
{
    public function getFeesList()
    {
        $model = new Fees();
        return $model->getFeesList();
    }
}