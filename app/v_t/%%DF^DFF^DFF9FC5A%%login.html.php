<?php /* Smarty version 2.6.26, created on 2013-09-17 09:59:50
         compiled from simpla/main/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_url', 'simpla/main/login.html', 17, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['head_title']; ?>
</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/simpla/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/simpla/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/simpla/css/invalid.css" type="text/css" media="screen" />
</head>

<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>管理登录</h1>
    <br/><br/><br/><br/> </div>
  <div id="login-content">
    <form action="<?php echo smarty_function_get_url(array('rule' => '/main/index'), $this);?>
" name="form1" method="post">
      <p>
        <label>用户名</label>
        <input class="text-input" name="username" type="text" />
      </p>
      <div class="clear"></div>
      <p>
        <label>密码</label>
        <input class="text-input" name="pwd" type="password" />
      </p>
      <div class="clear"></div>
      <p>
        <input class="button" type="submit" value="登录" />
      </p>
    </form>
  </div>
</div>
</body>
</html>