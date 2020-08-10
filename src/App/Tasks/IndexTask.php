<?php

declare(strict_types=1);

namespace App\Tasks;

class IndexTask implements TaskInterface
{
    public function execute()
    {
        echo 'Hi!';
    }
}
