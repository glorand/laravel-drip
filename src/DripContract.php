<?php

namespace Glorand\Drip\Laravel;

use Glorand\Drip\Api\Accounts;
use Glorand\Drip\Api\Events;
use Glorand\Drip\Api\Subscribers;

interface DripContract
{
    /**
     * @return \Glorand\Drip\Api\Events
     */
    public function events(): Events;

    /**
     * @return \Glorand\Drip\Api\Subscribers
     */
    public function subscribers(): Subscribers;

    /**
     * @return \Glorand\Drip\Api\Accounts
     */
    public function accounts(): Accounts;
}
