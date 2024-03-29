<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // gatau bisa engga ini
    // public function render($request, Exception $e)
    // {
    //     if ($this->isHttpException($e)) {
    //         switch (intval($e->getStatusCode())) {
    //         // not found
    //         case 404:
    //             return redirect()->route('/error/page_404');
    //             // return redirect()->route('/admin/error/page_404');
    //             break;
    //         // internal error
    //         // case 500:
    //         //     return \Response::view('custom.500', array(), 500);
    //         //     break;

    //         default:
    //             return $this->renderHttpException($e);
    //             break;
    //         }
    //     }
    // }
}
