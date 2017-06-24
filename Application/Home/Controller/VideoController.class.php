<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
	public function film(){
		$video = D('video')->order('v_ctime DESC')->select();
		$this->assign('video',$video);
		$this->assign('parentsname','上传视频');
		$sub = I('get.sub');
		$this->assign('subname',$sub);
		$this->assign('d6','active');
		$this->display();
	}
	public function video(){
		$vid = I('get.v_id');
		$video = D('video')->where(array('v_id'=>$vid))->select();
		$this->assign('video',$video[0]);
		$this->assign('parentsname','上传视频');
		$sub = I('get.sub');
		$this->assign('subname',$sub);
		$this->assign('d6','active');
		$this->display();
	}
}