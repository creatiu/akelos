<?php

require_once(dirname(__FILE__).'/../config.php');

class SupportFunctions_TestCase extends ActiveSupportUnitTest
{
    public function test_for_importing_models() {
        $models = 'ImportTestModelA, import_test_model_b';

        $this->assertEqual(Ak::import($models), array('ImportTestModelA','ImportTestModelB'));

        $this->assertTrue(class_exists('ImportTestModelA'));
        $this->assertTrue(class_exists('ImportTestModelB'));

        $models = array('ImportTestModelB','Import Test Model C');
        $this->assertEqual(Ak::import($models), array('ImportTestModelB','ImportTestModelC'));

        $this->assertTrue(class_exists('ImportTestModelC'));
    }

    public function Test_for_element_size() {
        $element = 'check_this_size';
        $expected_value = 15;
        $this->assertEqual(Ak::size($element), $expected_value);

        $element = '123';
        $expected_value = 3;
        $this->assertEqual(Ak::size($element), $expected_value);

        $element = 123;
        $expected_value = 123;
        $this->assertEqual(Ak::size($element), $expected_value);

        $element = array(0=>'A', 1=>'B', 2=>'C', 3=>'D', 4=>array('E', 'F'));
        $expected_value = 5;
        $this->assertEqual(Ak::size($element), $expected_value);
    }

    public function test_should_convert_between_timestamp_and_date() {
        $iso_date = '2007-10-15 16:30:00';
        $this->assertEqual(Ak::getDate(Ak::getTimestamp($iso_date)), $iso_date);
        $this->assertEqual(Ak::getDate(Ak::getTimestamp('2007-10-15 16:30')), $iso_date);
    }

    public function test_should_pick_parameters() {
        $params = array('id'=>3, 'is_enabled'=>1, 'name'=>'Alicia');
        $this->assertEqual(Ak::pick('id,name',$params), array('id'=>3, 'name'=>'Alicia'));
    }
}

ak_test_case('SupportFunctions_TestCase');

