<?php

namespace App\Exceptions;

use BadFunctionCallException;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use InvalidArgumentException;
use Throwable;
use function PHPUnit\Framework\isInstanceOf;

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
        if($exception instanceof InvalidArgumentException) {
            return response()->json(["Internal Error" => $exception->getMessage()], 500);
        }

        if($exception instanceof ValidationException) {
            return response()->json(["Error" => $exception->errors()], 422);
        }

        return response()->json(["Erro" => $exception->getMessage()], $exception->getCode());

    }
}
