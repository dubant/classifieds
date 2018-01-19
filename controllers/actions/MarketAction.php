<?php
class MarketAction extends CAction
{
    public function run()
    {
    	echo $this->getController()->renderPartial("search",array("type"=>"classified"));
    }
}

