<?php
	if (array_key_exists('user', $_SESSION)) {
    $user = $_SESSION['user'];
		$username = $user['Username'];
	}
  else {
		header("Location: index.php?q=users/login");
	}

  if ($user)
    echo '<a href="#" id="upload-file-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">add</i></a>';
?>

<div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="upload-file-button">Upload</div>

<dialog class="mdl-dialog">
  <h4 class="mdl-dialog__title">Upload new file</h4>
  <form method="post" enctype="multipart/form-data">
    <div class="mdl-dialog__content">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="fileName" name="fileName">
        <label class="mdl-textfield__label" for="fileName">File name</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="fileDesc" name="fileDesc">
        <label class="mdl-textfield__label" for="fileDesc">File description</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
        <input class="mdl-textfield__input" placeholder="Upload file" type="text" id="uploadFile" readonly/>
        <label for="upload" class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
          <i class="material-icons">attach_file</i>
          <input type="file" id="upload" name="fileToUpload" style="display:none">
        </label>
      </div>
    </div>
    <div class="mdl-dialog__actions">
      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">Upload</button>
      <button type="button" class="mdl-button close">Cancel</button>
    </div>
  </form>
</dialog>

<div class="mdl-grid site-max-width">
  <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp welcome-card portfolio-card">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Welcome</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <?php echo "Hello, $username" ?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="index.php?q=categories/all">Profile</a>
    </div>
  </div>
</div>

<section class="section--center mdl-grid site-max-width">
  <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white  mdl-shadow--4dp">
    <i class="material-icons">play_circle_filled</i>
  </header>
  <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Introduction</h2>
    </div>
    <div class="mdl-card__supporting-text">
      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time
      schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
    </div>
    <div class="mdl-card__actions  mdl-card--border">
      <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">Watch Intro</a>
    </div>
  </div>
</section>
<section class="section--center mdl-grid site-max-width">
  <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
    <div class="mdl-card__media">
      <img class="article-image" src="img/portfolio1.jpg" border="0" alt="">
    </div>
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Rocky Peak</h2>
    </div>
    <div class="mdl-card__supporting-text">
      Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur
      ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
    </div>
  </div>
  <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
    <div class="mdl-card__media">
      <img class="article-image" src="img/portfolio2.jpg" border="0" alt="">
    </div>
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Night Shadow</h2>
    </div>
    <div class="mdl-card__supporting-text">
      Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur
      ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
    </div>
  </div>
  <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
    <div class="mdl-card__media">
      <img class="article-image" src="img/portfolio3.jpg" border="0" alt="">
    </div>
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Sky Reach</h2>
    </div>
    <div class="mdl-card__supporting-text">
      Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur
      ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
    </div>
  </div>
</section>

<section class="section--center mdl-grid site-max-width homepage-portfolio">
  <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="portfolio.html">View Portfolio</a>
</section>

<div class="homepage-footer">
  <section class="mdl-grid site-max-width">
    <div class="mdl-cell mdl-card mdl-cell--8-col mdl-cell--4-col-tablet  mdl-shadow--4dp portfolio-card">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Testimonials</h2>
      </div>
      <ul class="demo-list-three mdl-list">
        <li class="mdl-list__item mdl-list__item--three-line">
          <span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">person</i>
      <span>Amazing people, always ready to help!</span>
          <span class="mdl-list__item-text-body">
        Bryan Cranston, CEO, Amazing.com
      </span>
          </span>
        </li>
        <li class="mdl-list__item mdl-list__item--three-line">
          <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar">person</i>
      <span>Awesome work, they can do almost anything..</span>
          <span class="mdl-list__item-text-body">
      Aaron Paul, Marketing Lead, Awesome.com
      </span>
          </span>
        </li>
      </ul>
    </div>
    <div class="demo-card-event mdl-cell mdl-card mdl-shadow--4dp event-card portfolio-card">
      <div class="mdl-card__title mdl-card--expand">
        <h4>
          Featured event:<br> Community Meetup May 24, 2018<br> 7-11pm
        </h4>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">
  Add to Calendar
</a>
        <div class="mdl-layout-spacer"></div>
        <i class="material-icons">event</i>
      </div>
    </div>
  </section>
</div>