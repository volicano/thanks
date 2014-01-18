<?php /* Smarty version 2.6.18, created on 2014-01-18 04:08:12
         compiled from home/index1.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>

<body>
此页面的标题是： <?php echo $this->_tpl_vars['title']; ?>
<br />
此页面测内容是：<?php echo $this->_tpl_vars['content']; ?>
<br />
<br />
测试Smarty数组循环：<?php echo $this->_tpl_vars['testarray']; ?>
<br />
<?php unset($this->_sections['testas']);
$this->_sections['testas']['name'] = 'testas';
$this->_sections['testas']['loop'] = is_array($_loop=$this->_tpl_vars['testarray']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['testas']['show'] = true;
$this->_sections['testas']['max'] = $this->_sections['testas']['loop'];
$this->_sections['testas']['step'] = 1;
$this->_sections['testas']['start'] = $this->_sections['testas']['step'] > 0 ? 0 : $this->_sections['testas']['loop']-1;
if ($this->_sections['testas']['show']) {
    $this->_sections['testas']['total'] = $this->_sections['testas']['loop'];
    if ($this->_sections['testas']['total'] == 0)
        $this->_sections['testas']['show'] = false;
} else
    $this->_sections['testas']['total'] = 0;
if ($this->_sections['testas']['show']):

            for ($this->_sections['testas']['index'] = $this->_sections['testas']['start'], $this->_sections['testas']['iteration'] = 1;
                 $this->_sections['testas']['iteration'] <= $this->_sections['testas']['total'];
                 $this->_sections['testas']['index'] += $this->_sections['testas']['step'], $this->_sections['testas']['iteration']++):
$this->_sections['testas']['rownum'] = $this->_sections['testas']['iteration'];
$this->_sections['testas']['index_prev'] = $this->_sections['testas']['index'] - $this->_sections['testas']['step'];
$this->_sections['testas']['index_next'] = $this->_sections['testas']['index'] + $this->_sections['testas']['step'];
$this->_sections['testas']['first']      = ($this->_sections['testas']['iteration'] == 1);
$this->_sections['testas']['last']       = ($this->_sections['testas']['iteration'] == $this->_sections['testas']['total']);
?>
<?php echo $this->_tpl_vars['testarray'][$this->_sections['testas']['index']]['step1']; ?>
  <?php echo $this->_tpl_vars['testarray'][$this->_sections['testas']['index']]['step2']; ?>
  <?php echo $this->_tpl_vars['testarray'][$this->_sections['testas']['index']]['step3']; ?>
<br />
<?php endfor; endif; ?>
</body>
</html>