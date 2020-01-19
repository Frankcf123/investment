<?php
/* Smarty version 3.1.30, created on 2016-11-07 04:12:30
  from "E:\Workspace\PHP\COURSEYELL_NEW\application\views\templates\layout\navigation.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581fff2ec24f89_58128330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f69853af08f5880514592357afaf0a05100d591' => 
    array (
      0 => 'E:\\Workspace\\PHP\\COURSEYELL_NEW\\application\\views\\templates\\layout\\navigation.phtml',
      1 => 1478487632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581fff2ec24f89_58128330 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span><?php echo $_smarty_tpl->tpl_vars['courseyell']->value;?>
</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="/"><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</a>
                </li>
                <li>
                    <a href="#">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Library</a>
                </li>
                <li class="active">Data</li>
            </ul>
        </div>
    </div>
</div><?php }
}
