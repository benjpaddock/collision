<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'tests')
    ->notPath(__DIR__ . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'laravel')
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'src')
    ->append(['.php_cs']);

$rules = [
    '@Symfony'               => true,
    'phpdoc_no_empty_return' => false,
    'array_syntax'           => ['syntax' => 'short'],
    'yoda_style'             => false,
    'declare_strict_types'   => true,
    'braces'                 => false,
    'phpdoc_indent'          => false,
    'binary_operator_spaces' => [
        'operators' => [
            '=>' => 'align',
            '='  => 'align',
        ],
    ],
    'concat_space'            => ['spacing' => 'one'],
    'not_operator_with_space' => false,
];

$rules['increment_style'] = ['style' => 'post'];

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRules($rules)
    ->setFinder($finder);
