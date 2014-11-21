<?php

class Foo
{
    public function foo() {
        echo 'Foo';
    }

    public function bar()
    {
        echo 'Adds another function';

        return true; // and another coding style issue
    }

    public function baz()
    {
        echo 'adds baz';

        return false;
    }
}
