<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ServeCommand as BaseServeCommand;

/**
 * Override Laravel's ServeCommand to fix Railway PORT type bug.
 *
 * Railway injects PORT as a string env variable. Laravel 13's ServeCommand
 * tries to do arithmetic (string + int) with it at line 250, causing a TypeError.
 * This override casts the port to integer to fix the issue.
 */
class ServeCommand extends BaseServeCommand
{
    /**
     * Get the port for the command, ensuring it's always an integer.
     */
    protected function port(): int
    {
        $port = $this->input->getOption('port');

        if (is_null($port)) {
            $port = env('SERVER_PORT', env('PORT', 8000));
        }

        return (int) $port;
    }
}
