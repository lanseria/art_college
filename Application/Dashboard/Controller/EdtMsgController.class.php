<?php
namespace Dashboard\Controller;
use Think\Controller;
class EdtMsgController extends Controller {
	public function index(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			$this->assign('d7','active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function survey(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			$this->assign('d7','active');
			$this->assign('d71','open active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function survey_photo(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			$this->assign('d7','active');
			$this->assign('d71','open active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function survey_campus(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			$this->assign('d7','active');
			$this->assign('d71','open active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
}