<?php
/* Smarty version 3.1.30, created on 2016-11-10 10:09:17
  from "E:\Workspace\PHP\COURSEYELL_NEW\application\views\templates\course\course.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5824474d296297_19967824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe29de69b0bed3ca1c5b3f4d0bb66c119eb336f' => 
    array (
      0 => 'E:\\Workspace\\PHP\\COURSEYELL_NEW\\application\\views\\templates\\course\\course.phtml',
      1 => 1478772555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.phtml' => 1,
    'file:layout/navigation.phtml' => 1,
    'file:course/course_component/course_description.phtml' => 1,
    'file:course/course_component/course_review.phtml' => 1,
    'file:layout/footer.phtml' => 1,
  ),
),false)) {
function content_5824474d296297_19967824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/navigation.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--start of course part-->
<?php $_smarty_tpl->_subTemplateRender("file:course/course_component/course_description.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:course/course_component/course_review.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--end of course part-->
<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
