<?php
class TestAction extends CAction
{
    public function run()
    {
    	$this->getController()->render("index");
    }
}