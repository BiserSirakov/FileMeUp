<div class="login-card mdl-card mdl-shadow--6dp">
<form method="post">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Log in</h2>
  </div>

  <div class="mdl-card__supporting-text">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	  <input class="mdl-textfield__input" type="text" id="username" name="username">
	  <label class="mdl-textfield__label" for="username">Username</label>
	</div>
	<br>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="password" id="password" name="password">
		<label class="mdl-textfield__label" for="password">Password</label>
	</div>
  </div>
  
  <div class="mdl-card__actions mdl-card--border">
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary mdl-js-ripple-effect">
      Log in
    </button>
  </div>
</form>
</div>

<ul class="errors-list mdl-list">
	<?php
		foreach($params["errors"] as $error) {
			echo '<li class="mdl-list__item"><span class="mdl-list__item-primary-content">'.$error.'</span></li>';
		}
	?>
</ul>