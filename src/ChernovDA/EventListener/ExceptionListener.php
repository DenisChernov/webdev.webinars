<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 30.09.2015
 * Time: 10:44
 */

namespace ChernovDA\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ExceptionListener {

    public function onKernelException(GetResponseForExceptionEvent $event) {
        $exception = $event->getException();
        $message = sprintf('Error %s: %s', $exception->getMessage(), $exception->getCode());

        $response = new Response();
        $response->setContent($message);

        if ($exception instanceof HttpExceptionInterface) {
            $response->setStatusCode($exception->getStatusCode());
            $response->headers->replace($exception->getHeaders());
        } else {
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $event->setResponse($response);
    }

}