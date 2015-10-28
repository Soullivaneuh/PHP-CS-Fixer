<?php

namespace Symfony\CS\Tests\Fixer\Symfony;

use Symfony\CS\Tests\Fixer\AbstractFixerTestBase;

/**
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class OrderedMethodFixerTest extends AbstractFixerTestBase
{
    /**
     * @dataProvider provideFixCases
     */
    public function testFix($expected, $input = null)
    {
        $this->makeTest($expected, $input);
    }

    public function provideFixCases()
    {
        return array(
            array(
                '<?php
    function dummy()
    {
        echo "dummy!";
    }

    class DummyClass
    {
        public function realDummy()
        {
            echo "this is dummy";

            $test = function ($dummy) {
                return false;
            };
        }

        protected function sharedDummy()
        {
        }

        private function myDummy()
        {
        }
    }

    class JustAnotherClass
    {
        public function justAnotherMethod()
        {
        }
    }

    function justAnotherFunction()
    {
    }
    ',
            ),
        );
    }
}
