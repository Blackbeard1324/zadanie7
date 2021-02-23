<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-23 19:35:49
  from 'E:\Programy\xampp\htdocs\zadanie7\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60354b05ee99a5_02156291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5dace48b354e6ea8584c6f9b8a392c046ff7a7a' => 
    array (
      0 => 'E:\\Programy\\xampp\\htdocs\\zadanie7\\app\\views\\login.tpl',
      1 => 1614105349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60354b05ee99a5_02156291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134265378860354b05ee75a8_18653612', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_134265378860354b05ee75a8_18653612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134265378860354b05ee75a8_18653612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id = "footer">
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">

		<div class="inner">
		<fieldset>
			<div class="fields">
				<h2>Zaloguj się do systemu</h2>
				<div class="field">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<div>
				<label for="id_pass">haslo: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
					<div class="field">
			<div class="pure-controls">
				<button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
			</div>
		</fieldset>
		</div>
	</form>
	</section>


<?php
}
}
/* {/block 'content'} */
}
