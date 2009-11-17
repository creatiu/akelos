<?php

require_once(dirname(__FILE__).'/../../../fixtures/config/config.php');

class HasMany_table_inheritance_TestCase extends AkUnitTest
{
    public function test_start()
    {
        $this->rebaseAppPaths();
        $this->installAndIncludeModels(array('ExtendedPost','ExtendedComment','Comment','Tag','User'));
    }

    public function test_normal_post_no_inheritance()
    {
        $this->installAndIncludeModels(array('Post', 'Comment'));

        $Post = new Post(array('title' => 'Post for unit testing', 'body' => 'This is a post for testing the model'));
        $Post->comment->create(array('body' => 'hello', 'name' => 'Aditya'));
        $Post->save();
        $Post->reload();

        $expected_id = $Post->getId();

        $this->assertTrue($Result = $Post->find($expected_id, array('include' => array('comments'), 'conditions' => "name = 'Aditya'")));
        $this->assertEqual($Result->comments[0]->get('name'), 'Aditya');
    }

    /**
     * Creates an ExtendedPost with type value 'ExtendedPost'
     *
     */
    public function test_has_many_inheritance()
    {
        $this->installAndIncludeModels(array('ExtendedPost', 'ExtendedComment'));

        $Post = new ExtendedPost(array('title' => 'Post for unit testing', 'body' => 'This is a post for testing the model','type' => 'Extended post'));
        $Post->extended_comment->create(array('body' => 'hello', 'name' => 'Aditya'));
        $Post->save();
        $Post->reload();

        $expected_id = $Post->getId();
        $Result = $Post->find($expected_id, array('include' => array('extended_comments'), 'conditions' => "name = 'Aditya'"));
        $this->assertTrue($Result);
        if ($Result) {
            $this->assertEqual($Result->extended_comments[0]->get('name'), 'Aditya');
        }
    }

    public function test_cleanup()
    {
        @Ak::file_delete(AkConfig::getDir('models').DS.'group_user.php');
    }
}

ak_test_run_case_if_executed('HasMany_table_inheritance_TestCase');

