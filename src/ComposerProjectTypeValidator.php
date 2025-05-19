<?php declare(strict_types=1);

namespace AlanVdb\Composer;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Validator\AbstractValidator;

class ComposerProjectTypeValidator
    extends AbstractValidator
    implements ValidatorInterface
{
    const TYPES = [
        'library',
        'project',
        'metapackage',
        'composer-plugin',
        'wordpress-plugin',
        'wordpress-theme',
        'phpcodesniffer-standard',
        'drupal-module',
        'drupal-theme',
        'drupal-profile',
        'drupal-drush',
    ];

    public function __construct(string $errorMessage = '')
    {
        if (empty($errorMessage)) {
            $errorMessage = "Invalid project type provided. Valid types are: " . implode(', ', self::TYPES) . ".";
        }
        parent::__construct($errorMessage);
    }

    public function isValid(mixed $value) : bool
    {
        return is_string($value) ? in_array($value, self::TYPES) : false;
    }
}
