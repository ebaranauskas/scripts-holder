<?php

declare(strict_types=1);

namespace App\Tasks;

class OtherTask implements TaskInterface
{
    public function execute()
    {
        echo "Other hi!";
    }
}
