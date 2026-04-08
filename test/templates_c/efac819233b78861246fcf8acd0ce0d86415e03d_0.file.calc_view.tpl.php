<?php
/* Smarty version 4.3.1, created on 2026-04-08 19:22:25
  from 'C:\xampp\htdocs\test\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_69d68ed15631d1_45689764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efac819233b78861246fcf8acd0ce0d86415e03d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\app\\calc_view.tpl',
      1 => 1775656671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69d68ed15631d1_45689764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\test\\lib\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
			<header id="header">
				<h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">Calculator</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">Home</a></li>
					</ul>
				</nav>
			</header>

			<div id="main" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page_header']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
						<p><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page_description']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
					</header>
					<div class="row gtr-150">
						<div class="col-4 col-12-medium">
							<section id="sidebar">
								<h3>Form</h3>
								<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
									<div class="row gtr-uniform gtr-50">
										<div class="col-12">
											<input type="number" name="amount" min="1" step="0.01" required placeholder="Amount" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['kwota']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
										</div>
										<div class="col-12">
											<input type="number" name="interest-rate" min="1" max="100" step="0.01" required placeholder="Interest Rate (%)" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['oprocentowanie']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
										</div>
										<div class="col-12">
											<input type="number" name="years" min="1" max="100" step="1" required placeholder="Years" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['lata']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
										</div>
										<div class="col-12">
											<ul class="actions">
												<li class="col-6">
													<input type="submit" value=" Calculate" class="primary" />
												</li>
												<li class="col-6">
													<input type="reset" value="Reset" />
												</li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<hr />
						</div>
						<div class="col-6 col-12-medium imp-medium">
							<div class="messages">
								<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
									<h4>Wystąpiły błędy:</h4>
									<ol class="err">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
											<li><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ol>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['rata']->value !== null) {?>
									<h4>Wynik</h4>
									<p class="res"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['rata']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
