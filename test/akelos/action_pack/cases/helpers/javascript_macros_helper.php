<?php

require_once(dirname(__FILE__).'/../helpers.php');

class JavascriptMacrosHelper_TestCase extends HelperUnitTest
{    
    public function test_setup()
    {
        $this->controller = new AkActionController();
        $this->controller->Request = new MockAkRequest($this);
        $this->controller->controller_name = 'test';
        
        $this->javascript_macros_helper = $this->controller->javascript_macros_helper;
    }

    public function test_in_place_editor()
    {
        $this->assertEqual(
            $this->javascript_macros_helper->in_place_editor('field_id', array('url' => array('controller' => 'foo', 'action' => 'bar', 'id' => 'beer'))),
            "<script type=\"text/javascript\">\n//<![CDATA[\nnew Ajax.InPlaceEditor('field_id', '/foo/bar/beer/')\n//]]>\n</script>"
        );
    }
    
    /**
     * @todo To implement when in_place_editor_field will be updated
     */
    public function test_in_place_editor_field()
    {
    }
    
    public function test_in_auto_complete_field()
    {
        $this->assertEqual(
            $this->javascript_macros_helper->auto_complete_field('field_id', array('url' => array('controller' => 'foo', 'action' => 'bar'))),
            "<script type=\"text/javascript\">\n//<![CDATA[\nvar field_id_auto_completer = new Ajax.Autocompleter('field_id', 'field_id_auto_complete', '/foo/bar/', {})\n//]]>\n</script>"
        );
    }
    
    public function test_in_auto_complete_result()
    {
        $objects = array();
        for($i=0; $i<10; $i++)
        {
            $object = array();
            $object['test'] = $i;
            $objects[] = $object;
        }
        $this->assertEqual(
            $this->javascript_macros_helper->auto_complete_result($objects, 'test'),
            "<ul><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul>"
        );
    }
    
    public function test_text_field_with_auto_complete()
    {
        $style = file_get_contents(HelperUnitTest::getFixturesDir().DS.'javascript_macros_helper_style.txt');
        $code = file_get_contents(HelperUnitTest::getFixturesDir().DS.'javascript_macros_helper_code.txt');

        $this->assertEqual(
            $this->javascript_macros_helper->text_field_with_auto_complete('user', 'login', array(), array('url' => array('controller' => 'foo', 'action' => 'bar'))),
            $style.$code
        );
        $this->assertEqual(
            $this->javascript_macros_helper->text_field_with_auto_complete('user', 'login', array(), array('url' => array('controller' => 'foo', 'action' => 'bar'), 'skip_style' => true)),
            $code
        );
    }
}

ak_test_case('JavascriptMacrosHelper_TestCase');
