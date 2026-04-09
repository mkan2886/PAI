<!DOCTYPE HTML>
<html>
	<head>
		<title>{$page_title|escape}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
			<header id="header">
				<h1 id="logo"><a href="{$app_url}/app/calc.php">Calculator</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="{$app_url}/app/calc.php">Home</a></li>
					</ul>
				</nav>
			</header>

			<div id="main" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>{$page_header|escape}</h2>
						<p>{$page_description|escape}</p>
					</header>
					<div class="row gtr-150">
						<div class="col-4 col-12-medium">
							<section id="sidebar">
								<h3>Form</h3>
								<form action="{$app_url}/app/calc.php" method="post">
									<div class="row gtr-uniform gtr-50">
										<div class="col-12">
											<input type="number" name="amount" min="1" step="0.01" required placeholder="Amount" value="{$kwota|default:''|escape}" />
										</div>
										<div class="col-12">
											<input type="number" name="interest-rate" min="1" max="100" step="0.01" required placeholder="Interest Rate (%)" value="{$oprocentowanie|default:''|escape}" />
										</div>
										<div class="col-12">
											<input type="number" name="years" min="1" max="100" step="1" required placeholder="Years" value="{$lata|default:''|escape}" />
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
								{if $errors|@count > 0}
									<h4>Wystąpiły błędy:</h4>
									<ol class="err">
										{foreach from=$errors item=msg}
											<li>{$msg|escape}</li>
										{/foreach}
									</ol>
								{/if}

								{if $rata !== null}
									<h4>Wynik</h4>
									<p class="res">{$rata|escape}</p>
								{/if}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="{$app_url}/assets/js/jquery.min.js"></script>
		<script src="{$app_url}/assets/js/jquery.scrolly.min.js"></script>
		<script src="{$app_url}/assets/js/jquery.dropotron.min.js"></script>
		<script src="{$app_url}/assets/js/jquery.scrollex.min.js"></script>
		<script src="{$app_url}/assets/js/browser.min.js"></script>
		<script src="{$app_url}/assets/js/breakpoints.min.js"></script>
		<script src="{$app_url}/assets/js/util.js"></script>
		<script src="{$app_url}/assets/js/main.js"></script>
	</body>
</html>
