<?php
    session_start();
	include "templates/header.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Madimgz - Account Settings</title>
	<style>
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>

<body class="purp_body">
	<section class="hero is-fullheight">
		<div class="hero-body">
			<div class="container">
				<h1 class="title has-text-centered"> Want to change your details?</h1>
				<h1 class="subtitle has-text-centered">You've come to the right place!</h1>
			<section class="section">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column is-5 is-4-desktop">
								<form method="post" action="##"> 
								<!-- need to post details to update DB here ^^ -->
                                    <div class="field">
                                        <div class="control">
											Change your username:
                                            <input class="input" type="text" name="username" placeholder="Username" value="">
                                        </div>
									</div>
									<div class="field">
                                        <div class="control">
                                            <button type="submit" value="Submit" class="button is-primary is-fullwidth has-text-grey">Confirm Username Change</button>
                                        </div>
									</div>
								</form>
			</section>
			<section class="section">
				<div class="columns is-centered">
                            <div class="column is-5 is-4-desktop">
								<form method="post" action="##">
								<!-- need to post details to update DB here ^^ -->
                                    <div class="field">
                                        <div class="control">
											change your email:
                                            <input class="input" type="text" name="email" placeholder="Email" value="">
                                        </div>
									</div>
									<div class="field">
                                        <div class="control">
                                            <button type="submit" value="Submit" class="button is-primary is-fullwidth has-text-grey">Confirm Email Change</button>
                                        </div>
									</div>
								</form>
							</div>
				</div>
			</section>
			<section class="section">
				<div class="columns is-centered">
                            <div class="column is-5 is-4-desktop">
								<form method="post" action="##">
									<!-- need to post details to update DB here ^^ -->
                                    <div class="field">
                                        <div class="control">
											Change your password:
                                            <input class="input" type="password" name="password" placeholder="Password" value="">
                                        </div>
									</div>
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="password" name="repeatpassword" placeholder="Repeat Password" value="" required>
                                        </div>
									</div>
                                    <div class="field">
                                        <div class="control">
                                            <button type="submit" value="Submit" class="button is-primary is-fullwidth has-text-grey">Confirm Password Change</button>
                                        </div>
									</div>
								</form>
							</div>
				</div>
			</section>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		</div>
	</section>
	<?php
	include "templates/footer.php";
?>
</body>

</html>