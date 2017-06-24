<?php
namespace Home\Controller;
use Think\Controller;
class GalleryController extends Controller {
	public function photo(){
		$gallery = D('gallery')->where(array('g_type'=>'校园风光'))->order('g_ctime DESC')->select();
		$this->assign('gallery',$gallery);
		$gallery1 = D('gallery')->where(array('g_type'=>'最新作品'))->order('g_ctime DESC')->select();
		$this->assign('gallery1',$gallery1);
		$gallery2 = D('gallery')->where(array('g_type'=>'最佳作品'))->order('g_ctime DESC')->select();
		$this->assign('gallery2',$gallery2);
		$this->display();
	}
}