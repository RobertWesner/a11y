<?php

declare(strict_types=1);

use RobertWesner\SimpleMvcPhp\Configuration;
use RobertWesner\SimpleMvcPhp\Handler\PrintThrowableHandler;
use RobertWesner\SimpleMvcPhp\Handler\ThrowableHandlerInterface;

/** @noinspection PhpUnhandledExceptionInspection */
Configuration::CONTAINER
    ::instantiate(ThrowableHandlerInterface::class, PrintThrowableHandler::class);
