<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {   	
    	if ($exception instanceof NotFoundHttpException) {
        return response()->view('errors.404', [], 404);
    	}

    	if ($exception instanceof HttpException && $exception->getStatusCode() == 401) {
        return response()->view('errors.401', [], 401);
    	}

    	if ($exception instanceof HttpException && $exception->getStatusCode() == 403) {
        return response()->view('errors.403', [], 403);
    	}

    	if ($exception instanceof HttpException && $exception->getStatusCode() == 419) {
        return response()->view('errors.419', [], 419);
    	}

    	if ($exception instanceof HttpException && $exception->getStatusCode() == 429) {
        return response()->view('errors.429', [], 429);
    	}

    	if ($exception instanceof HttpException && $exception->getStatusCode() == 500) {
        return response()->view('errors.500', [], 500);
    	}

    	if ($exception instanceof HttpException && $exception->getStatusCode() == 503) {
        return response()->view('errors.503', [], 503);
    	}
    	
    	return parent::render($request, $exception);
    }
}