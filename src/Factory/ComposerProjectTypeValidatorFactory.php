<?php declare(strict_types=1);

namespace AlanVdb\Composer\Factory;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Composer\Definition\ComposerProjectTypeValidatorFactoryInterface;
use AlanVdb\Composer\ComposerProjectTypeValidator;

class ComposerProjectTypeValidatorFactory implements ComposerProjectTypeValidatorFactoryInterface
{
    public function create(string $errorMessage = '') : ValidatorInterface
    {
        return new ComposerProjectTypeValidator($errorMessage);
    }
}
