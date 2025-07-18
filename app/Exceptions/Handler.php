<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            $code = $exception->getStatusCode();
            $message = $exception->getMessage() ?: 'An unexpected error occurred';

            return response()->view('pages/frontend/errors/error', compact('code', 'message'), $code);
        }

        return parent::render($request, $exception);
    }
    // public function render($request, Throwable $exception)
    // {
    //     if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
    //         return response()->view('pages/frontend/errors.error', [], 404);
    //     }

    //     return parent::render($request, $exception);
    // }

}
