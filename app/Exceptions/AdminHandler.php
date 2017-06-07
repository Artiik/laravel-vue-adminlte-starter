<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class AdminHandler extends ExceptionHandler
{
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // ajax 404 json feedback
        if ($request->ajax()) {
            return response()->json(['error' => 'Not Found'], 404);
        }

        // normal 404 view page feedback
        return response()->view('errors.admin.404', [], 404);
    }
}
