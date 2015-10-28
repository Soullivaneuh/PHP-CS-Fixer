<?php

namespace Symfony\CS\Fixer\Symfony;

use Symfony\CS\AbstractFixer;
use Symfony\CS\Tokenizer\Tokens;

/**
 * Declare public methods first, then protected ones and finally private ones.
 *
 * The exceptions to this rule are the class constructor and the setUp and tearDown methods of PHPUnit tests,
 * which should always be the first methods to increase readability;
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class OrderedMethodFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function fix(\SplFileInfo $file, $content)
    {
        $tokens = Tokens::fromCode($content);
        $methodDeclarations = $tokens->getMethodDeclarationIndexes();

        var_dump($methodDeclarations);

        return $tokens->generateCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return 'Declare public methods first, then protected ones and finally private ones. Exception for setUp and tearDown methods of PHPUnit tests.';
    }
}
