<?php


require_once(dirname(__FILE__).'/../config.php');

class PHP_Bug_33595_A
{
    public $two = null;
    public $data = null;
}


class PHP_Bug_33595_B
{
    public $one = null;
}

class PHP_Bug_33595_TestCase extends ActiveSupportUnitTest
{

    public function test_should_increase_memory() {
        $this->log_memory(true);

        for($i = 0; $i<2; $i++) {
            $this->instantiate_grow_and_unset(false);
            $this->log_memory();
        }
        $bytes = $this->log_memory();
        $this->assertTrue($bytes > 100000, 'PHP_Bug_33595 not detected,
        memory increase was '.$bytes.' bytes but should be higher than 100000 bytes');

    }

    public function test_should_not_increase_memory() {
        $this->log_memory(true);

        for($i = 0; $i<20; $i++) {
            $this->instantiate_grow_and_unset();
            $this->log_memory();
        }
        $bytes = $this->log_memory();
        $this->assertTrue($bytes < 500, 'PHP_Bug_33595 not fixed,
        memory increase was '.$bytes.' bytes but should be lower than 500 bytes');
    }

    public function instantiate_grow_and_unset($use_free_memory_hack = true) {
        $One = new PHP_Bug_33595_A();
        $Two = new PHP_Bug_33595_B();

        $One->two =& $Two;
        $Two->one =& $One;

        $One->data = str_repeat('One',10000);
        $Two->data = str_repeat('Two',10000);

        if($use_free_memory_hack){
            Ak::unsetCircularReferences($One);
            Ak::unsetCircularReferences($Two);
        }

        unset($One);
        unset($Two);
    }

    public function log_memory($reset = false, $vervose = false) {
        if($reset || empty($this->initial)) $this->initial = memory_get_usage();
        $this->current = memory_get_usage();
        $this->difference = $this->current - $this->initial;
        $this->difference && $vervose && Ak::trace(($this->difference/1048576).' MB increased');
        return $this->difference;
    }
}

ak_test_case('PHP_Bug_33595_TestCase');
