<?php // Page data
include_once("inc/config.php");
$pageTitle = "Staff";
$pageTitleTag = $siteName . " " . $pageTitle;
$pageDescription = $siteName  . " " . $pageTitle;
$pageKeywords = $pageTitle . ",office,technicians,sales" . $siteKeywords;
?>

<?php include_once("inc/header.php"); ?>

<div class="column is-narrow" id="top">
  <aside class="menu" style="position: fixed; left: 0px;">
    <p class="menu-label">
      Departments
    </p>
    <ul class="menu-list">
      <li><a href="#staff-sales">Sales</a></li>
      <li><a href="#staff-office">Office</a></li>
      <li><a href="#staff-managers">Managers</a></li>
      <li><a href="#staff-production">Production</a></li>
      <li><a href="#staff-refinishing">Refinishing</a></li>
    </ul>
  </aside>
</div>
<div class="column mc-content-body section" id="staff-sales">
  <h1 class="title"><?php echo $pageTitleTag; ?></h1>
  <!-- h2 class="subtitle"></h2 -->
  <div class="staff-section section staff-sales">
      <h3 class="subtitle">Sales and Estimating Staff</h3>
      <p class="block">Our sales and estimating staff have over 65 years of combined experience in the collision repair, automotive and insurance industries.</p>
      <p class="block">We are here to provide you estimates, answer collision repair or insurance related questions and assist you with the smallest of scratch to that major collision.</p>
      <div class="columns is-multiline mc-staff-row">
      <div class="column is-12 mc-staff-column">
        <article class="media box block">
          <figure class="media-left">
            <p class="image is-128x128">
              <img src="images\staff-darrell.jpg">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Darrell Smith</strong> <small>President</small>
                <br><br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                <br><br>
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="mc-email" href="mailto:darrell@mcdanielsqualitybodyworks.com">
                  Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                </a>
                <a class="level-item" href="tel:+19037585033">
                  <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                </a>
                <a class="level-item" href="#">
                  <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                </a>
              </div>
            </nav>
          </div>
          <!-- div class="media-right">
            <button class="delete"></button>
          </div -->
        </article>
      </div>
      <div class="column is-half mc-staff-column">
        <article class="media box block">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="images\staff-ronnie.jpg">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Ronnie Bagley</strong> <small>Estimator</small>
                <br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="mc-email" href="mailto:ronnie-mcdaniels@sbcglobal.net">
                  Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                </a>
                <a class="level-item" href="tel:+19037585033">
                  <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                </a>
                <a class="level-item" href="#">
                  <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                </a>
              </div>
            </nav>
          </div>
          <!-- div class="media-right">
            <button class="delete"></button>
          </div -->
        </article>
      </div>
      <div class="column is-half mc-staff-column">
        <article class="media box block">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="images\staff-elvis.jpg">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Elvis Martinez</strong> <small>Estimator</small>
                <br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="mc-email" href="mailto:elvis@mcdanielsqualitybodyworks.com">
                  Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                </a>
                <a class="level-item" href="tel:+19037585033">
                  <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                </a>
                <a class="level-item" href="#">
                  <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                </a>
              </div>
            </nav>
          </div>
          <!-- div class="media-right">
            <button class="delete"></button>
          </div -->
        </article>
      </div>
      <div class="column is-half mc-staff-column">
        <article class="media box block">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="images\staff\johnny_gunn.jpg">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Johnny Gunn</strong> <small>Estimator</small>
                <br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="mc-email" href="mailto:johnny@mcdanielsqualitybodyworks.com">
                  Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                </a>
                <a class="level-item" href="tel:+19037585033">
                  <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                </a>
                <a class="level-item" href="#">
                  <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                </a>
              </div>
            </nav>
          </div>
          <!-- div class="media-right">
            <button class="delete"></button>
          </div -->
        </article>
      </div>
      <div class="column is-half mc-staff-column">
        <article class="media box block">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="images\staff\david_sledge.jpg">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>David Sledge</strong> <small>Estimator</small>
                <br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="mc-email" href="mailto:@mcdanielsqualitybodyworks.com">
                  Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                </a>
                <a class="level-item" href="tel:+19037585033">
                  <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                </a>
                <a class="level-item" href="#">
                  <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                </a>
              </div>
            </nav>
          </div>
          <!-- div class="media-right">
            <button class="delete"></button>
          </div -->
        </article>
      </div>
      <div class="column is-half mc-staff-column">
        <article class="media box block">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="images\staff\josh_winberly.jpg">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Josh Winberly</strong> <small>Estimator - Kilgore</small>
                <br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="mc-email" href="mailto:@mcdanielsqualitybodyworks.com">
                  Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                </a>
                <a class="level-item" href="tel:+19037585033">
                  <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                </a>
                <a class="level-item" href="#">
                  <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                </a>
              </div>
            </nav>
          </div>
          <!-- div class="media-right">
            <button class="delete"></button>
          </div -->
        </article>
      </div>
      <div class="column is-half mc-staff-column">
        <article class="media box block">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="images\staff\jamie_haynes.jpg">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Jamie Haynes</strong> <small>Sales Assistant</small>
                <br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="mc-email" href="mailto:jamie@mcdanielsqualitybodyworks.com">
                  Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                </a>
                <a class="level-item" href="tel:+19037585033">
                  <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                </a>
                <a class="level-item" href="#">
                  <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                </a>
              </div>
            </nav>
          </div>
          <!-- div class="media-right">
            <button class="delete"></button>
          </div -->
        </article>
      </div>
    </div>
  </div>
  <a href="#top">Back to Top</a>
  <div class="staff-section section staff-office" id="staff-office">
      <h3 class="subtitle">Office Staff</h3>
      <p class="block">Our office staff is led by Vice President and Office Manager, Cherie Smith.</p>
      <p class="block">Cherie and her staff are here to help you coordinate payments, arrange for rental cars, set up a tow or answer any company accounting questions you may have.</p>
      <div class="columns is-multiline mc-staff-row">
        <div class="column is-12 mc-staff-column">
          <article class="media box block">
            <figure class="media-left">
              <p class="image is-128x128" style="margin-bottom:12px;">
                <img src="images\staff-cherie.jpg">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Cherie Smith</strong> <small>Office Manager</small>
                  <br>
                  <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                </p>
              </div>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="mc-email" href="mailto:cherie@mcdanielsqualitybodyworks.com">
                    Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                  </a>
                  <a class="level-item" href="tel:+19037585033">
                    <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                  </a>
                  <a class="level-item" href="#">
                    <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <!-- div class="media-right">
              <button class="delete"></button>
            </div -->
          </article>
        </div>
        <div class="column is-half mc-staff-column">
          <article class="media box block">
            <figure class="media-left">
              <p class="image is-64x64">
                <img src="images\staff\diana_espinoza.jpg">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Diana Espinoza</strong> <small>Receptionist</small>
                  <br>
                  <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                </p>
              </div>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="mc-email" href="mailto:diana@mcdanielsqualitybodyworks.com">
                    Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                  </a>
                  <a class="level-item" href="tel:+19037585033">
                    <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                  </a>
                  <a class="level-item" href="#">
                    <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <!-- div class="media-right">
              <button class="delete"></button>
            </div -->
          </article>
        </div>
        <div class="column is-half mc-staff-column">
          <article class="media box block">
            <figure class="media-left">
              <p class="image is-64x64">
                <img src="images\staff\sharla_roberts.jpg">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Sharla Roberts</strong> <small>Invoicing</small>
                  <br>
                  <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                </p>
              </div>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="mc-email" href="mailto:@mcdanielsqualitybodyworks.com">
                    Email <?php // <span class="icon is-small"><i class="fa fa-reply"></i></span> ?>
                  </a>
                  <a class="level-item" href="tel:+19037585033">
                    <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                  </a>
                  <a class="level-item" href="#">
                    <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <!-- div class="media-right">
              <button class="delete"></button>
            </div -->
          </article>
        </div>
      </div>
    </div>
  <a href="#top">Back to Top</a>
  <div id="staff-managers" class="staff-section section staff-managers">
      <h3 class="subtitle">Production Managers</h3>
      <p class="block">Our Production Managers have over 70 years of combined experience, all with McDaniel’s Quality Body Works!</p>
      <p class="block">Each Production Manager has his own team of technicians he will work closely with, to ensure you receive the best possible repair.</p>
      <p class="block">Each repair is assigned to an individual Production Manager who will order your parts and follow the repair through structural, sheetmetal, refinishing and detail process.</p>
      <p class="block">This steamlined approach helps us better monitor each repair on a smaller scale. Your assigned Production Manager and Salesman can answer any question you may have during or after your repair.</p>
      <div class="columns is-multiline mc-staff-row">
        <div class="column is-half mc-staff-column">
          <article class="media box block">
            <figure class="media-left">
              <p class="image is-64x64">
                <img src="images\staff-gary.jpg">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Gary Graff</strong> <small>Production Manager</small>
                  <br>
                  <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                </p>
              </div>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="level-item" href="tel:+19037585033">
                    <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                  </a>
                  <a class="level-item" href="#">
                    <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <!-- div class="media-right">
              <button class="delete"></button>
            </div -->
          </article>
        </div>
        <div class="column is-half mc-staff-column">
          <article class="media box block">
            <figure class="media-left">
              <p class="image is-64x64">
                <img src="images\staff-bubba.jpg">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Bubba May</strong> <small>Production Manager</small>
                  <br>
                  <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                </p>
              </div>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="level-item" href="tel:+19037585033">
                    <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                  </a>
                  <a class="level-item" href="#">
                    <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <!-- div class="media-right">
              <button class="delete"></button>
            </div -->
          </article>
        </div>
        <div class="column is-half mc-staff-column">
          <article class="media box block">
            <figure class="media-left">
              <p class="image is-64x64">
                <img src="images\staff-craig.jpg">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Craig Todd</strong> <small>Production Manager</small>
                  <br>
                  <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                </p>
              </div>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="level-item" href="tel:+19037585033">
                    <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                  </a>
                  <a class="level-item" href="#">
                    <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <!-- div class="media-right">
              <button class="delete"></button>
            </div -->
          </article>
        </div>
        <div class="column is-half mc-staff-column">
          <article class="media box block">
            <figure class="media-left">
              <p class="image is-64x64">
                <img src="images\staff-jr.jpg">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>J.R. Hodges</strong> <small>Production Manager</small>
                  <br>
                  <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
                </p>
              </div>
              <nav class="level is-mobile">
                <div class="level-left">
                  <a class="level-item" href="tel:+19037585033">
                    <span class="icon is-small"><i class="fa fa-phone-square"></i></span>
                  </a>
                  <a class="level-item" href="#">
                    <span class="icon is-small"><i class="fa fa-address-book"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <!-- div class="media-right">
              <button class="delete"></button>
            </div -->
          </article>
        </div>
      </div>
    </div>
  <a href="#top">Back to Top</a>
  <div id="staff-production" class="staff-section section staff-production">
      <h3 class="subtitle">Production Staff</h3>
      <p class="block">Our repair technicians have over 250 years of combined experience in the collision repair industry!</p>
      <p class="block">With this type of experience in our shop, you have a better chance of having a technician perform a repair on your vehicle that he has successfully completed on other vehicles like yours, several times.</p>
      <p class="block">We feel it is our experienced technicians and their dedication to quality repairs that sets us apart from many shops.</p>
      <p class="block">All of our technicians have I-CAR training and are committed to helping us maintain our I-CAR Gold status with on-going training.</p>
      <div class="columns is-multiline mc-staff-row">
      <div class="column is-half mc-staff-column">

            <div class="content box">
              <img src="images\staff\mcdaniels_body_tech.jpg">
              <p>
                <strong>Body Technician Staff</strong><br>
                <small> <?php echo $siteName; ?></small><br>
                <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
              </p>
            </div>


      </div>
      <div class="column is-half mc-staff-column">
        <div class="content box">
          <img src="images\staff\mcdaniels_detail_crew.jpg">
          <p>
            <strong>Detail Staff</strong><br>
            <small> <?php echo $siteName; ?></small><br>
            <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
          </p>
        </div>
      </div>
      <div class="column is-half mc-staff-column">
        <div class="content box">
          <img src="images\staff\maintenance_staff_mcdaniels.jpg">
          <p>
            <strong>Maintenance staff</strong><br>
            <small> <?php echo $siteName; ?></small><br>
            <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
          </p>
        </div>
      </div>
      <div class="column is-half mc-staff-column">
        <div class="content box">
          <img src="images\staff\mcdaniels_kilgore_technicians.jpg">
          <p>
            <strong>Kilgore Body Technician Staff</strong><br>
            <small> <?php echo $siteName; ?></small><br>
            <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <a href="#top">Back to Top</a>
  <div id="staff-refinishing" class="staff-section section staff-refinishing">
    <h3 class="subtitle">Refinish department</h3>
    <p class="block">Our paint department, led by Manager Melvin Coby and our 5 full time painters, have over 100 years of combined experience.</p>
    <p class="block">All have I-CAR training and some have attended various paint manufacture training classes.</p>
    <p class="block">Our paint department is also staffed with several prep technicians that are able to work multiple jobs, keeping our painters in the booth as much as possible.</p>
    <div class="columns is-multiline mc-staff-row">
      <div class="column is-half mc-staff-column">
        <div class="content box">
          <img src="images\staff-melvin.jpg">
          <p>
            <strong>Melvin Coby</strong><br>
            <small>Refinish Production Manager</small><br>
            <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
          </p>
        </div>
      </div>
      <div class="column is-half mc-staff-column">
        <div class="content box">
          <img src="images\staff\kilgore_mcdaniels_paint_staff.jpg">
          <p>
            <br><br><strong>Refinish Department Staff</strong><br>
            <small> <?php echo $siteName; ?></small><br>
            <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <a href="#top">Back to Top</a>
  <div id="staff-paint-kilgore" class="staff-section section staff-paint-kilgore">
    <h3 class="subtitle">Kilgore Paint Staff</h3>
    <p class="block">McDaniel's Paint Staff at our new location in Kilgore Tx </p>
    <p class="block">All have I-CAR training and some have attended various paint manufacture training classes.</p>
    <p class="block">Our paint department is also staffed with several prep technicians that are able to work multiple jobs, keeping our painters in the booth as much as possible.</p>
    <div class="columns is-multiline mc-staff-row">
      <div class="column is-12 mc-staff-column">
        <div class="content box">
          <img src="images\staff\kilgore_mcdaniels_paint_staff.jpg">
          <p>
            <br><br><strong>Paint Staff</strong><br>
            <small> <?php echo $siteName; ?></small><br>
            <?php // Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. ?>
          </p>
          </div>
        </div>
      </div>
  </div>
  <a href="#top">Back to Top</a>
</div>

<?php include_once("inc/footer.php"); ?>
