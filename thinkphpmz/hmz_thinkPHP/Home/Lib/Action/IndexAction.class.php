<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function checkout(){
        $Data = M('tinyphp'); // 实例化Data数据模型,这行的tinyphp为数据表后缀名称
        $this->data = $Data->select();
   
        $arr=array();
        $subs=array();
        $boardDao=M('board');
        $topicDao=M('topic');
        $userDao=M('user');
        $lstBoard=$boardDao->where('parentID=0')->select();
        foreach ($lstBoard as $key=>$value){
            $arr[$key]['boardName']=$value['boardName'];
            $lstSubBoard=$boardDao->where(array('parentID'=>$value['boardid']))->select();
            foreach ($lstSubBoard as $subKey=>$subValue){
                $subs[$subKey]['board']=$subValue;
                $boardId=$subValue['boardid'];
                $subs[$subKey]['count']=$topicDao->where(array('boardid'=>$boardId))->count();
                $subs[$subKey]['lastTopic']=$topicDao->where(array('boardid'=>$boardId))->order('publishTime desc')->find();
                $subs[$subKey]['uName']=$userDao->where(array('uID'=>$subs[$subKey]['lastTopic']['uID']))->getField('uName');
            }
            $arr[$key]['subs']=$subs;
        }
        $this->assign('lstBoard', $arr);
	$this->display();
    }
    
    public function doReg(){//注册处理函数
        $m=M('user');
        $m->uName=$_POST['uName'];//获取表单信息，方法1
        $m->uPass=$_POST['uPass'];
        $ret=$m->add();
        if($ret){
            $this->success('新增成功！', U('index'));
        }else{
            $this->error('新增失败！', U('login'));
            }
    }
    
    public function reguser(){
        $this->display();//调用注册模板文件
    }
    
    public function doLogin(){//登录处理函数
        $m=M('user');
        $m->create();//获取表单信息，方法2
       $cond=array('uName'=>$m->uName,'uPass'=>$m->uPass);
       $ret=$m->where($cond)->find();//条件查询
       if($ret){
           session('curUser', $ret);
           $this->success('登录成功！', U('index'));  
       }else{
           $this->error('登录失败！', U('login'));
       }
    }
    
    public function login(){//调用登录模板文件
        $this->display();
    }
    public function doLogout() {
        header('Content-type:text/html;charset=utf-8');
        $_SESSION = array();
        $this->success('登出成功！', U('index'));
    }
    
}