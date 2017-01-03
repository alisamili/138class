<?php
namespace Home\Controller;
use Think\Controller;
 
class MessageboardController extends Controller {

	//操作名称
    Public function index(){

					
		$this->assign('wish',M('wish')->select())->display('index');	//分配方法3，推荐
    
	}

	Public function handle(){
			
		$data = array(
			'username' => I('username'),
			'content' => I('content'),
			'time' => time()
		
	);		
		
		if(M('wish')->data($data)->add()){
			$this->success('发布成功',U('index'));	//转跳回当前目录下的当前页面
		}
		else{
			$this->error('发布失败,请重试......');
		}






	}
     
}