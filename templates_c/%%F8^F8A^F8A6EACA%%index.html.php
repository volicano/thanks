<?php /* Smarty version 2.6.18, created on 2014-01-19 15:47:32
         compiled from home/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type" />
  <meta name="description" content="Place your page description here." />
  <meta name="keywords" content="put,your,key words,phrases,here" />
  <title><?php echo $this->_tpl_vars['title']; ?>
</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <!--[if IE]>
  <link rel="stylesheet" href="iefixes.css" type="text/css" />
  <![endif]-->
</head>
<body>
<div id="container">
<div id="header">
<h1><a href="#" title="Return To Homepage"><img id="logo" style="width: 760px; height: 112px;" alt="Your Website Name / Company Slogan Tagline" src="images/header.png" /></a></h1>

</div>

<div id="sub-header"></div>

<!--Begin main navigation menu.-->

<div id="menu">

<!--Begin nothing goes here. Leave empty.--><div id="menu-left"></div><div id="menu-right"></div><!--End nothing goes here.-->

<ul>
<li id="first"><a title="Return to Homepage" accesskey="1" href="#">首页</a></li>
<li> <a title="Learn More About Us" accesskey="2" href="#">关于我们</a></li>
<li><span class="access-key"> </span> <a title="Company News" accesskey="3" href="#">新闻</a></li>
<li><span class="access-key"> </span> <a title="See What We Have Done for Our Other Clients" accesskey="4" href="#">成功案例</a></li>
<li><span class="access-key"> </span> <a title="Services We Offer" accesskey="5" href="#">产品服务</a></li>
<li> <a title="Contact Information" accesskey="6" href="#">联系我们</a></li>
</ul>

</div>

<!--End main navigation menu.-->
<div id="content">
<!--Place your main content within the following division-->
<div id="right-column">
<h2 class="bottom-border"><?php echo $this->_tpl_vars['info'][0]['1']; ?>
</h2>
<p class="justify"><?php echo $this->_tpl_vars['info'][0]['2']; ?>
<span class="right"><a title="Learn More About Us" href="#">&raquo; 更多详细</a></span></p>
<h2 class="bottom-border"><?php echo $this->_tpl_vars['info'][1]['1']; ?>
</h2>
<div id="featured-wrapper">
<div id="featured-top"></div>
<div id="featured-content">

<?php unset($this->_sections['testas']);
$this->_sections['testas']['name'] = 'testas';
$this->_sections['testas']['loop'] = is_array($_loop=$this->_tpl_vars['info1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="featured"> 
<div class="number">0<?php echo $this->_tpl_vars['info1'][$this->_sections['testas']['index']]['id']; ?>
</div> 
<h3><strong><?php echo $this->_tpl_vars['info1'][$this->_sections['testas']['index']]['sName']; ?>
</strong></h3> 
<p class="justify">ssssssssssss<span class="right"><a title="Learn More" href="#">&raquo; 了解更多</a></span></p>
</div>
<?php endfor; endif; ?>

</div>
<div id="featured-bottom"></div>
</div>
</div>
<!--Place additional secondary content in the next division.-->
<div id="left-column">

<h2 class="bottom-border">Recent Clients</h2>

<div id="recent-clients">
<ul>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_1.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_2.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_3.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_4.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_5.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_6.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_7.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_8.jpg" /></a></li>
<li><a href="#"><img style="width: 64px; height: 64px;" alt="Client Name" src="images/client_thumb_9.jpg" /></a></li>
</ul>
</div>

<h2 class="bottom-border">Recent News</h2>

<h3 class="headline"><span class="date">11 <abbr title="June">JUN</abbr> 07</span>Headline</h3> 

<p class="news">Vestibulum vitae enim sed sapien elementum blandit. Vestibulum vel quam. Morbi tincidunt suscipit . . .<br /><span class="right"><a href="#" title="Read the Full Story">&raquo; Read More</a></span></p>

<p><a href="#"><img class="left" style="width: 32px; height: 32px;" alt="RSS Feed" src="images/rss.png" /></a>Subscribe to the regularly updated <acronym title="Really Simple Syndication">RSS</acronym> news feed.</p> 

</div>

</div>

<div id="footer">

<div id="footer-content">

<div id="footer-right"><a href="#" title="View Our Terms of Use" accesskey="t">Terms of Use </a>&middot; <a href="#" title="Our Privacy Policy" accesskey="p">Privacy Policy </a>&middot; <a href="#" title="View a Map of Our Site" accesskey="s">Sitemap </a>&middot; Design by <a title="Designed by First Light Web Design" href="http://www.firstlightwebdesign.com">First Light</a></div>

<p>Copyright &copy; 2007 Your Site.  All rights reserved.</p>

</div>

</div>

</div>

</body>

</html>