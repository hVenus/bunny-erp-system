<?php /* Smarty version 2.6.26, created on 2013-09-17 11:21:59
         compiled from simpla/member/group.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_url', 'simpla/member/group.html', 28, false),array('modifier', 'cat', 'simpla/member/group.html', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main-content">
  <h2>欢迎您 <?php echo $this->_tpl_vars['_adminname']; ?>
</h2>
  <p id="page-intro">用户组管理。</p>
  <div class="clear"></div>
  <div class="content-box">
    <div class="content-box-header">
      <h3>用户组管理</h3>
      <div class="clear"></div>
    </div>
    <div class="content-box-content">
      <div class="tab-content default-tab" id="tab1">
        <?php if ($this->_tpl_vars['groupone']['mgid'] == 0): ?>
        <table>
          <thead>
            <tr>
              <th>用户组名称</th>
              <th>折扣(单位%)</th>
              <th>管理</th>
            </tr>
          </thead>
          <tbody>
          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['group']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
          <tr>
            <td><?php echo $this->_tpl_vars['group'][$this->_sections['i']['index']]['mgroup_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['group'][$this->_sections['i']['index']]['discount']; ?>
%</td>
            <td><a href="<?php echo smarty_function_get_url(array('rule' => '/member/group','data' => ((is_array($_tmp='mgid=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['group'][$this->_sections['i']['index']]['mgid']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['group'][$this->_sections['i']['index']]['mgid']))), $this);?>
" title="编辑"><img src="<?php echo $this->_tpl_vars['root_dir']; ?>
/assets/simpla/images/icons/pencil.png" alt="编辑" /></a></td>
          </tr>
          <?php endfor; endif; ?>
            </tbody>
        </table>
        <hr />
        <?php endif; ?>
        <div class="form">
          <form action="<?php echo smarty_function_get_url(array('rule' => '/member/group'), $this);?>
" method="post" id="js-form">
            <fieldset class="clearfix">
            <input type="hidden" name="mgid" value="<?php echo $this->_tpl_vars['groupone']['mgid']; ?>
" />
              <p><label>用户组名称：</label><span>
                <input type="text" value="<?php echo $this->_tpl_vars['groupone']['mgroup_name']; ?>
" class="text-input small-input" name="mgroup_name" /></span></p>
              <p><label>折扣：</label><span>
                <input type="text" value="<?php echo $this->_tpl_vars['groupone']['discount']; ?>
" class="text-input min-input" name="discount" />%</span><font class="red">注意这里单位是百分之，如果是八折请填80</font></p>
              <p><input type="submit" name="" class="button" value="<?php if ($this->_tpl_vars['groupone']['mgid']): ?>编辑用户组<?php else: ?>添加用户组<?php endif; ?>" /></p>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/copy.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simpla/common/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>