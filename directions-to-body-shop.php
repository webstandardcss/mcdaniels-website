
<?php // Page data
include_once("inc/config.php");
$pageTitle = "Directions to our Longview Location";
$pageTitleTag = $siteName . ": " . $pageTitle;
$pageDescription = $siteName  . ": " . $pageTitle;
$pageKeywords = $pageTitle . ",directions, Longview Texas" . $siteKeywords;
?>

<?php include_once("inc/header.php"); ?>
<?php // .columns.is-multiline.home-buttons.is-mobile.is-hidden-desktop.is-gapless.has-text-centered.is-size-5.is-size-6-mobile>.column.is-one-third.home-buttons-column.home-buttons-column-$*6>img[src="images/icon-home-estimates.png" alt="Estimates"]+span.icon-home-label.icon-home-label-${Estimates} ?>
<div class="column mc-content-body section">
  <h1 class="title"><?php echo $pageTitle; ?></h1>
  <h2 class="subtitle">Also visit our <a href="/mcdaniels-kilgore-location.php">Kilgore Texas Auto Body Shop</a></h2>
  <div class="columns">
    <div class="column is-narrow">
      <a href="mcdaniels-kilgore-location.php" target="_blank" class="image sidebar-image">
        <img src="images\sidebar-locations.png" alt="<?php echo $pageTitle; ?>">
      </a>
    </div>
    <div class="column">
      <p class="block is-hidden-mobile" style="padding-bottom:1%"></p>
      <div class="vcard">
       <h4 class="org fn"><a href="index.php" class="url">McDaniels Quality Body Works</a></h4>
       <div class="adr"> <span class="street-address">404 E. Marshall</span> <span class="locality">Longview</span>, <span class="region">Texas</span>, <span class="postal-code">75601</span>
         <!-- .adr -->
       </div>
       <div>
         <div title="+1.903.758.5033" class="tel first"><span class="type null">Work</span>: <a href="tel:+19037585033">903-758-5033</a></div>
         <div title="+1.903.753.5391" class="tel"><span class="type null">Pref</span>: <a href="tel:+19037535391">903-753-5391</a></div>
         <div class="tel" title="+1.903.758.8290"><span class="type">Fax</span>: 903-758-8290</div>
         <div>Mon &ndash; Fri 7:30 &ndash; 5:30 </div>
         <a href="mailto:darrell-mcdaniels@sbcglobal.net" class="email">
         <!--Email Me-->
         </a>
         <!-- &mdash; -->
         <!--<a href="http://feeds.technorati.com/contacts/http://www.easttexasautos.com/autobody/index.php" class="add-contact">Add to Address Book</a>-->
          <!-- .vcard -->
         </div>
       </div>

      <p class="block"></p>
    </div>
  </div>
<iframe width="500" height="550" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ111FO4Q4NoYRZjnBG-oSNsg&key=AIzaSyCZPs9miCbQUjEn5IrCmfpwLPmDFyQxOAQ" allowfullscreen></iframe>
</div>

<?php include_once("inc/footer.php"); ?>
