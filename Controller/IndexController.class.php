<?php  
/**
*Index控制器
*/
namespace App\Controller;
class IndexController extends \Z\Base\Controller{
	public function index(){
		$this->assign('title','爽');
		$this->display('index');
	}
}



?>