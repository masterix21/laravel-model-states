<?php

namespace Spatie\ModelStates\Tests\Dummy;

use Spatie\ModelStates\Tests\Dummy\States\ModelState;
use Spatie\ModelStates\Tests\Dummy\States\StateA;
use Spatie\ModelStates\Tests\Dummy\States\StateB;
use Spatie\ModelStates\Tests\Dummy\States\StateC;

class TestModelWithMultipleFromTransitions extends TestModel
{
    public function registerStates(): void
    {
        $this
            ->addState('state', ModelState::class)
            ->allowTransition([StateA::class, StateB::class], StateC::class);
    }
}