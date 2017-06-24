<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function news(){
		$a_id = I('get.aid');
		if(empty($a_id))
		{
			$a_id=6;
		}
		$new = D('article')->where(array('a_id'=>$a_id))->select();
		$this->assign('new',$new[0]);
		$this->display();
	}
	public function notice(){
		$a_id = I('get.aid');
		if(empty($a_id))
		{
			$a_id=6;
		}
		$new = D('article')->where(array('a_id'=>$a_id))->select();
		$this->assign('new',$new[0]);
		$this->display();
	}
	public function dynamic(){
		$a_id = I('get.aid');
		if(empty($a_id))
		{
			$a_id=6;
		}
		$new = D('article')->where(array('a_id'=>$a_id))->select();
		$this->assign('new',$new[0]);
		$this->display();
	}
}