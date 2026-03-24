<?php

declare(strict_types=1);

namespace BertKoor\WtModule\FixMissingMarriedNames;

use Fisharebest\Webtrees\Services\DataFixService;

require __DIR__ . '/FixMissingMarriedNames.php';

return new FixMissingMarriedNames(new DataFixService());