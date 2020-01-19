<?php
/* Smarty version 3.1.30, created on 2016-11-02 08:41:47
  from "E:\Workspace\PHP\COURSEYELL_NEW\application\views\templates\layout\navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5819a6cb146ae5_23880223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7fb024f20eeaa1600b9433cfd26393082f61db' => 
    array (
      0 => 'E:\\Workspace\\PHP\\COURSEYELL_NEW\\application\\views\\templates\\layout\\navigation.tpl',
      1 => 1478069817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5819a6cb146ae5_23880223 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body class="home">

<div class="wrap">
    <!-- Header Start -->
    <header id="header">
        <!-- Header Top Bar Start -->
        <div class="top-bar">
            <div class="slidedown collapse">
                <div class="container">
                    <div class="phone-email pull-left">
                        <a><i class="icon-phone"></i> Call Us : +880 41 723 272</a>
                        <a href="mail%40example.html"><i class="icon-envelope"></i> Email : mail@example.com</a>
                    </div>
                    <div class="pull-right">
                        <ul class="social pull-left">
                            <li class="facebook"><a href="#"><i class="icon-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                            <li class="dribbble"><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li class="rss"><a href="#"><i class="icon-rss"></i></a></li>
                        </ul>
                        <div id="search-form" class="pull-right">
                            <form action="#" method="get">
                                <input type="text" class="search-text-box">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Bar End -->
        <!-- Main Header Start -->
        <div class="main-header">
            <div class="container">
                <!-- TopNav Start -->
                <div class="topnav navbar-header">
                    <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                        <i class="icon-angle-down icon-current"></i>
                    </a>
                </div>
                <!-- Logo Start -->
                <div class="logo pull-left">
                    <h1>
                        <a href="index-2.html">
                            <img src="/code2/assets/img/logo.png" alt="pixma" width="125" height="60">
                        </a>
                        <button>rmit</button>
                    </h1>
                </div>

                <!-- Logo End -->
                <!-- Mobile Menu Start -->
                <div class="mobile navbar-header">

                    <a class="navbar-toggle" data-toggle="collapse" href=".html" id="mobmenu">
                        <i class="icon-reorder icon-2x"></i>
                    </a>


                </div>
                <!-- Mobile Menu End -->
                <!-- Menu Start -->
                <nav class="collapse navbar-collapse menu">
                    <ul class="nav navbar-nav sf-menu">
                        <li>
                            <div class="container">
                                <div class="row">
                                    <br/>
                                    <div class="span12">
                                        <form id="custom-search-form" class="form-search form-horizontal pull-right">
                                            <div class="input-append span12">
                                                <input type="text" class="search-query mac-style" placeholder="Search">
                                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            &nbsp;&nbsp;                                &nbsp;&nbsp;

                        </li>
                        <li>
                            <a id="current" href="<?php echo '<?php ';?>echo BASE_ROOT<?php echo '?>';?>">

                                Home

                            </a>

                        </li>
                        <li>
                            <a href="/" class="sf-with-ul">
                                Schools
                                    <span class="sf-sub-indicator">
                                        <i class="icon-angle-down "></i>
                                    </span>
                            </a>
                            <ul>

                                <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?></li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                        <?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['name'];?>

                                                <span class="sf-sub-indicator pull-right">
                                                    <i class="icon-angle-right "></i>
                                                </span>
                                    </a>

                                    <ul>
                                        <?php
$__section_sec1_shool_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1_shool']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1_shool'] : false;
$__section_sec1_shool_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['schools']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_shool_1_total = $__section_sec1_shool_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1_shool'] = new Smarty_Variable(array());
if ($__section_sec1_shool_1_total != 0) {
for ($__section_sec1_shool_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1_shool']->value['index'] = 0; $__section_sec1_shool_1_iteration <= $__section_sec1_shool_1_total; $__section_sec1_shool_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1_shool']->value['index']++){
?></li>

                                        <li><a href="#" class="sf-with-ul"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['schools'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1_shool']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1_shool']->value['index'] : null)]['name'];?>
</a></li>
                                        <?php
}
}
if ($__section_sec1_shool_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1_shool'] = $__section_sec1_shool_1_saved;
}
?>

                                    </ul>
                                </li>
                                <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>

                                
                            </ul>


                        </li>
                        <li>
                            <a id="" href="<?php echo '<?php ';?>echo BASE_ROOT">
                            Discussion Forum

                            </a>

                        </li>

                        <li><a  href="<?php echo '<?php ';?>echo BASE_ROOT.'/course'<?php echo '?>';?>">Course</a></li>

                    </ul>
                </nav>
                <!-- Menu End -->
            </div>
        </div>
        <!-- Main Header End -->
    </header>
    <!-- Header End --><?php }
}
