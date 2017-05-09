<?php  
/**
*Index控制器
*/
namespace App\Controller;
class IndexController extends \Z\Base\Controller{
	public function index(){


		//$db = new \Z\Base\Db();
		//echo $db->insert('insert into art (title,cat_id)values(?,?)',['tesertests',5]);
		//exit;
		//print_r($db->getAll("select * from php",[]));
		$db = new \Z\Base\Db();
		//print_r($db->getOne('select * from art where art_id=?',[57]));
		$artmodel = new \App\Model\ArtModel();
		//$artmodel->resolveTable();
			
		//$artmodel->find(57);
		//echo $artmodel->add(['title'=>'frwerqrqwe','cat_id'=>5]);

		$this->assign('title','爽');
		$this->display('index');

		//throw new \Exception("Error Processing Request", 1);
		

	}
}



?>