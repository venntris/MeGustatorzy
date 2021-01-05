<?php

namespace App\DeGustator\Gateway;

use App\DeGustator\Repository\Repository;

class Gateway {


    public function __construct(Repository $R )
    {
        $this->R = $R;
    }

    /**
     * @return Repository
     */
    public function test()
    {
        echo $this->R->test();
        return "Gateway dziala";
    }
}


