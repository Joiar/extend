<?php
/**
 * 用户管理控制器
 */
Class UserAction extends CommonAction {

	//用户列表
	Public function index () {
		$where = array();

		if (isset($_GET['filter'])) {
			$where['lock'] = 1;
		}

		$db = M('user');
		import('ORG.Util.Page');
		$count = $db->count();
		$page = new Page($count, 20);
		$limit = $page->firstRow . ',' . $page->listRows;
		$field = array('account', 'password', 'face');
		$this->user = $db->where($where)->field($field, true)->limit($limit)->order('registime DESC')->select();
		
		$this->page = $page->show();
		$this->display();
	}

	//锁定用户
	Public function lockUser () {
		$data = array(
			'id' => $this->_get('id', 'intval'),
			'lock' => $this->_get('lock', 'intval')
			);
		$msg = $data['lock'] ? '锁定' : '解锁';
		if (M('user')->save($data)) {
			$this->success($msg . '成功', U('index'));
		} else {
			$this->error($msg . '失败');
		}
	}

	//添加用户
	Public function addUser () {
		$this->display();
	}

	//添加用户表单处理
	Public function runAddUser () {
		if ($_POST['password'] != $_POST['pwded']) {
			$this->error('两次密码不一致');
		}

		$data = array(
			'account' => $this->_post('account'),
			'password' => $this->_post('password', 'md5'),
			'username' => $this->_post('username'),
			'logintime' => time(),
			'loginip' => get_client_ip(),
			'registime' => time()
			);

		if (M('user')->data($data)->add()) {
			$this->success('添加成功', U('index'));
		} else {
			$this->error('添加失败');
		}
	}
}
?>