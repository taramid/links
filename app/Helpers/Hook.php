<?php

namespace App\Helpers;

use Hidehalo\Nanoid\Client as Nanoid;


class Hook
{
    private Nanoid $nanoid;

    public function __construct()
    {
        $this->nanoid = new Nanoid();
    }

    public function generate(): string
    {
        return $this->nanoid->generateId(env('HOOK_LEN', 5));
    }
}
