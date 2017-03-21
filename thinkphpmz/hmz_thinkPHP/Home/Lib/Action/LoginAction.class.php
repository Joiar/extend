<?php
/**
 * 登录控制器
 */
Class LoginAction extends Action {

	/**
	 * 登录页视图
	 */
	Public function index () {
		$this->display();
	}

	/**
	 * 登录表单处理
	 */
	Public function login () {
		if (!$this->isPost()) halt('页面不存在');

		if ($_SESSION['verify'] != $this->_post('code', 'md5')) {
			$this->error('验证码错误');
		}

		$account = $this->_post('username');
		$pwd = $this->_post('password', 'md5');
		$where = array('account' => $account);
		
		$db = M('admin');
		$user = $db->where($where)->find();

		if (!$user || $user['password'] != $pwd) {
			$this->error('帐号或密码错误');
		}

		if ($user['lock']) {
			$this->error('帐号被锁定');
		}

		$data = array(
			'id' => $user['id'],
			'logintime' => time(),
			'loginip' => get_client_ip()
			);
		$db->save($data);

		session('uid', $user['id']);
		session('uname', $user['account']);
		session('logintime', date('y-m-d H:i', $user['logintime']));
		session('loginip', $user['loginip']);

		redirect(__APP__);
	}

	/**
	 * 异步验证管理员帐号
	 */
	Public function checkAccount () {
		if (!$this->isAjax()) halt('页面不存在');
		$account = $this->_post('username');
		$where = array('account' => $account);

		if (M('admin')->where($where)->count('id')) {
			echo 1;
		} else {
			echo 0;
		}
	}

	/**
	 * 异步验证密码
	 */
	Public function checkPwd () {
		if (!$this->isAjax()) halt('页面不存在');
		$account = $this->_post('username');
		$pwd = $this->_post('password', 'md5');
		$where = array('account' => $account);

		$password = M('admin')->where($where)->getField('password');
		if ($password && $password == $pwd) {
			echo 1;
		} else {
			echo 0;
		}
	}

	/**
	 * 异步验证验证码
	 */
	Public function checkVerify () {
		if (!$this->isAjax()) halt('页面不存在');

		if ($_SESSION['verify'] == $this->_post('code', 'md5')) {
			echo 1;
		} else {
			echo 0;
		}
	}

	/**
	 * 验证码图片
	 */
	Public function verify () {
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
}
?>