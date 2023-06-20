<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/public',
        __DIR__ . '/tests',
    ])
;

return (new PhpCsFixer\Config())->setRules([
    '@PER' => true,
    'strict_param' => true,
    'declare_strict_types' => true,
    'concat_space' => ['spacing' => 'one'],
])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
;
