<?php
/* Smarty version 3.1.30, created on 2016-11-08 07:03:57
  from "E:\Workspace\PHP\COURSEYELL_NEW\application\views\templates\index.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582178dd0761e4_12000453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f18ca969e1303d720b54c32649fac723575b586' => 
    array (
      0 => 'E:\\Workspace\\PHP\\COURSEYELL_NEW\\application\\views\\templates\\index.phtml',
      1 => 1478588636,
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
function content_582178dd0761e4_12000453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/navigation.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

    <div class="carousel slide" id="carousel-example" data-interval="false"
         data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png">
                <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <hr>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="media-list">
                    <li class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" height="64" width="64"></a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                                tempus viverra turpis.</p>
                        </div>
                    </li>

                </ul>
                <a class="btn  col-md-8">Click me</a>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
