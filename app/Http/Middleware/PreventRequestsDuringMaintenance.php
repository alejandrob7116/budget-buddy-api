<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * Las URI a las que se debe poder acceder mientras el modo de mantenimiento está habilitado.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
