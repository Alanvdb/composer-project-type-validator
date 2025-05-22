<?php declare(strict_types=1);

namespace AlanVdb\Composer;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Validator\AbstractValidator;

class ComposerProjectTypeValidator
    extends AbstractValidator
    implements ValidatorInterface
{
    public function __construct(string $errorMessage = '')
    {
        if (empty($errorMessage)) {
            $errorMessage = "The project type must be a valid string containing only lowercase letters, numbers, and hyphens.";
        }
        parent::__construct($errorMessage);
    }

    public function isValid(mixed $value) : bool
    {
        return (bool) preg_match('/^[a-z0-9-]+$/', $value);
    }
}
