<?php

declare(strict_types=1);

namespace App;

use App\Tasks\IndexTask;
use App\Tasks\OtherTask;

return [
    '/' => IndexTask::class,
    '/other' => OtherTask::class,
];
