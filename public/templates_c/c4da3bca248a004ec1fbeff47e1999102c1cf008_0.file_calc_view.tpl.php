<?php
/* Smarty version 5.4.5, created on 2026-04-09 18:40:18
  from 'file:calc_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69d7d672a48c30_92120393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4da3bca248a004ec1fbeff47e1999102c1cf008' => 
    array (
      0 => 'calc_view.tpl',
      1 => 1775751963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69d7d672a48c30_92120393 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_kredytowy\\app\\views';
?><!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page_title'), ENT_QUOTES, 'UTF-8', true);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
			<header id="header">
				<h1 id="logo"><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php">Calculator</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php">Home</a></li>
					</ul>
				</nav>
			</header>

			<div id="main" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page_header'), ENT_QUOTES, 'UTF-8', true);?>
</h2>
						<p><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('page_description'), ENT_QUOTES, 'UTF-8', true);?>
</p>
					</header>
					<div class="row gtr-150">
						<div class="col-4 col-12-medium">
							<section id="sidebar">
								<h3>Form</h3>
								<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
									<div class="row gtr-uniform gtr-50">
										<div class="col-12">
											<input type="number" name="amount" min="1" step="0.01" required placeholder="Amount" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('kwota') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
										</div>
										<div class="col-12">
											<input type="number" name="interest-rate" min="1" max="100" step="0.01" required placeholder="Interest Rate (%)" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('oprocentowanie') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
										</div>
										<div class="col-12">
											<input type="number" name="years" min="1" max="100" step="1" required placeholder="Years" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('lata') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
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
								<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')) > 0) {?>
									<h4>Wystąpiły błędy:</h4>
									<ol class="err">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
											<li><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('msg'), ENT_QUOTES, 'UTF-8', true);?>
</li>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</ol>
								<?php }?>

								<?php if ($_smarty_tpl->getValue('rata') !== null) {?>
									<h4>Wynik</h4>
									<p class="res"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('rata'), ENT_QUOTES, 'UTF-8', true);?>
</p>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
