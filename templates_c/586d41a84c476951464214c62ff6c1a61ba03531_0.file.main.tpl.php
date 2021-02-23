<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-23 18:19:18
  from 'E:\Programy\xampp\htdocs\zadanie7\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603539166f3ef4_11639893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '586d41a84c476951464214c62ff6c1a61ba03531' => 
    array (
      0 => 'E:\\Programy\\xampp\\htdocs\\zadanie7\\app\\views\\templates\\main.tpl',
      1 => 1613923205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603539166f3ef4_11639893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1325703696603539166f1881_93045243', 'header');
?>

<div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1336666089603539166f30d5_45296148', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1226844819603539166f38d9_54038137', 'footer');
?>

</div>
<ul class="copyright">
    &copy; Untitled Inc. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP & Kamil Skupień</a></li>
</ul>


<?php echo '<script'; ?>
 src="/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'} */
class Block_1325703696603539166f1881_93045243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1325703696603539166f1881_93045243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<head>
    <title>Solid State by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/noscript.css" /></noscript>
</head>
<body>

<section id="banner">
    <div class="inner">
        <div class="logo"><span class="icon fa-gem"></span></div>
        <h2>Witaj</h2>
        <p>Obliczymy Twoje raty kredytowe już dziś. <h6>*A przynajmniej spróbujemy</h6></p>
    </div>
</section>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1336666089603539166f30d5_45296148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1336666089603539166f30d5_45296148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1226844819603539166f38d9_54038137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1226844819603539166f38d9_54038137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'footer'} */
}
