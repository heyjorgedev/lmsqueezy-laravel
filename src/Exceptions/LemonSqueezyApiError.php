<?php

namespace LemonSqueezy\Laravel\Exceptions;

use Exception;
use Illuminate\Http\Response;

class LemonSqueezyApiError extends Exception
{
    public function badRequest(): bool
    {
        return $this->getCode() === Response::HTTP_BAD_REQUEST;
    }

    public function unauthorized(): bool
    {
        return $this->getCode() === Response::HTTP_UNAUTHORIZED;
    }

    public function forbidden(): bool
    {
        return $this->getCode() === Response::HTTP_FORBIDDEN;
    }

    public function notFound(): bool
    {
        return $this->getCode() === Response::HTTP_NOT_FOUND;
    }

    public function methodNotAllowed(): bool
    {
        return $this->getCode() === Response::HTTP_METHOD_NOT_ALLOWED;
    }

    public function unprocessableEntity(): bool
    {
        return $this->getCode() === Response::HTTP_UNPROCESSABLE_ENTITY;
    }

    public function tooManyRequests(): bool
    {
        return $this->getCode() === Response::HTTP_TOO_MANY_REQUESTS;
    }
}
