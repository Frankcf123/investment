<?php
/* Smarty version 3.1.30, created on 2020-01-21 17:34:21
  from "C:\xampp\htdocs\investment\application\views\templates\user\login.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e27280dade348_68272091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd5d72895cf00cd703ee1fd8a521432c5cf5d10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\investment\\application\\views\\templates\\user\\login.phtml',
      1 => 1579624456,
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
function content_5e27280dade348_68272091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/navigation.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--<div class="container">-->
<!---->
<!--</div>-->
<div class="container ">

            <div class="col-md-6">
                <img src="https://img.etimg.com/photo/msid-68221005/investment.jpg" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h1 class="text-primary">Login</h1>
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="inputEmail3" class="control-label">Username</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="Username"></div>
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
