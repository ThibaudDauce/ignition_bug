<?php

namespace App\Exceptions;

use Exception;

class TestRenderableException extends Exception
{
    public function render()
    {
        return redirect('/other');
    }
}
