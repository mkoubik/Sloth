<?php

declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';

Tester\Environment::setup();
class_alias(Tester\Assert::class, 'Assert');
