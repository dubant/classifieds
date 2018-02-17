<?php
/**
 * CoController.php
 *
 * Cocontroller always works with the PH base 
 *
 * @author: Tibor Katelbach <tibor@pixelhumain.com>
 * Date: 14/03/2014
 */
class CoController extends CommunecterController {


    protected function beforeAction($action) {
        //parent::initPage();
		return parent::beforeAction($action);
  	}

  	public function actions()
	{
	    return array(
	        'test'  => 'classifieds.controllers.actions.TestAction',
	        'market'  => 'classifieds.controllers.actions.MarketAction'
	    );
	}

	public function actionIndex() 
	{
		CO2Stat::incNbLoad("co2-annonces");
    
    	if(Yii::app()->request->isAjaxRequest)
	        echo $this->renderPartial("../default/index");
	    else
    		$this->render("index");
    	//$this->redirect(Yii::app()->createUrl( "/".Yii::app()->params["module"]["parent"] ));	
  	}
}
