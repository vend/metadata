<?php

class Foo
{
    public function foo() {
        echo 'Foo';
    }

    public function baz() { }
    public function addsAnotherMethod() { }

    public function bar()
    {
        echo 'Adds another function';

        return true; // and another coding style issue
    }
}
