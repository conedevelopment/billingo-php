<?php

/**
 * @generated
 * @link https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/HEAD/doc/config.rst
 */
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('test')
    ->exclude('tests')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
        'phpdoc_order' => true,
        'array_syntax' => [ 'syntax' => 'short' ],
        'single_line_comment_style' => [ 'comment_types' => [ 'hash' ] ],
        'strict_comparison' => true,
        'strict_param' => true,
        'phpdoc_indent' => true,
        'phpdoc_no_package' => true,
        'phpdoc_scalar' => true,
        'trailing_comma_in_multiline' => [ 'elements' => [ 'arrays' ] ],
    ])
    ->setFinder($finder)
;
