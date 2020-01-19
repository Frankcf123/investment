<?php
/* Smarty version 3.1.30, created on 2016-11-10 09:31:47
  from "E:\Workspace\PHP\COURSEYELL_NEW\application\views\templates\user\register.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58243e835f9199_65017574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca096cc84a753617c803bb1f0b136f9fc385ca8e' => 
    array (
      0 => 'E:\\Workspace\\PHP\\COURSEYELL_NEW\\application\\views\\templates\\user\\register.phtml',
      1 => 1478769981,
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
function content_58243e835f9199_65017574 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h1 class="text-primary col-sm-offset-2 col-sm-10">Register</h1><br/>
                <div class="row">
                    <div class="col-md-12">

                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="email" class="control-label">Email</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Email"></div>
                            </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="username" class="control-label">Username</label>
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
                            <div class="col-sm-2">
                                <label for="inputPassword3" class="control-label">Re-enter Password</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_re" placeholder="Password">
                            </div>
                        </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox"><label>
                                            <input type="checkbox"><a href="http://www.baidu.com"> Term and Service</a> </label></div></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button id="register_submit" name="register_submit" class="btn btn-default">
                                        Submit</button>
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
