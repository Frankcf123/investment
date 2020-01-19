<?php
/* Smarty version 3.1.30, created on 2016-11-09 06:44:13
  from "E:\Workspace\PHP\COURSEYELL_NEW\application\views\templates\user\login.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5822c5bd08c8c5_69539717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50acb247899789ce02c449e1fadb89e92607e7b1' => 
    array (
      0 => 'E:\\Workspace\\PHP\\COURSEYELL_NEW\\application\\views\\templates\\user\\login.phtml',
      1 => 1478599484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.phtml' => 1,
    'file:layout/navigation.phtml' => 1,
    'file:layout/footer.phtml' => 1,
  ),
),false)) {
function content_5822c5bd08c8c5_69539717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/navigation.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--<div class="container">-->
<!---->
<!--</div>-->
<div class="container ">

            <div class="col-md-6">
                <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h1 class="text-primary">Login</h1>
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="inputEmail3" class="control-label">Email</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Email"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label">Password</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button id="login_submit" name="login_submit" class="btn btn-default">
                                        Sign in</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/user.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
