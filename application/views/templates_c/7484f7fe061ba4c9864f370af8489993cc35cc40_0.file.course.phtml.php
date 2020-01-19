<?php
/* Smarty version 3.1.30, created on 2016-11-04 07:21:41
  from "E:\Workspace\PHP\COURSEYELL_NEW\application\views\templates\course.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581c37056361a8_01517862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7484f7fe061ba4c9864f370af8489993cc35cc40' => 
    array (
      0 => 'E:\\Workspace\\PHP\\COURSEYELL_NEW\\application\\views\\templates\\course.phtml',
      1 => 1478244099,
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
function content_581c37056361a8_01517862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/navigation.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="jumbotron">
                    <h3>COUSE Code + name
                        <br>
                    </h3>
                    <p>Department Name</p>
                    <a class="btn btn-primary btn-large">hard_level</a>
                    <a class="btn btn-primary btn-large">value_level</a>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Description:
                    <br>
                </h1>
                <h3>tag:</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                    dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                    nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                    felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                    elementum semper nisi.</p>
                <h3>link:</h3>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <form role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your email">
                  <span class="input-group-btn">
                    <a class="btn btn-success" type="submit">Go</a>
                  </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
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
                <a class="btn  col-md-12">Load More</a>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
