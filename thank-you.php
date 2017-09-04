
<?php // Page data
include_once("inc/config.php");
$pageTitle = "Thank You";
$pageTitleTag = $siteName . " " . $pageTitle;
$pageDescription = $siteName . " " . $pageTitle;
$pageKeywords = $pageTitle . " " . $siteKeywords;
?>

<?php include_once("inc/header.php"); ?>
<?php // .columns.is-multiline.home-buttons.is-mobile.is-hidden-desktop.is-gapless.has-text-centered.is-size-5.is-size-6-mobile>.column.is-one-third.home-buttons-column.home-buttons-column-$*6>img[src="images/icon-home-estimates.png" alt="Estimates"]+span.icon-home-label.icon-home-label-${Estimates} ?>
<div class="column mc-content-body section">
  <h1 class="title"><?php echo $pageTitle; ?></h1>
  <h2 class="subtitle">Thank You for using McDaniel's Quality Body Works Collision Repair Shop in Longview and Kilgore Texas</h2>
  <div class="columns">
    <div class="column is-narrow">
      <img src="images\sidebar-thank-you.png" class="sidebar-image" alt="<?php echo $pageTitle; ?>">
    </div>
    <div class="column">
      <p class="block is-hidden-mobile" style="padding-bottom:0"></p>
      <p class="block">On behalf of McDaniel's Quality Body Works and our 40 employees, I would like to thank the people of Longview and the surrounding East Texas area for your continued support of our business.</p>
      <p class="block">We are very thankful to the generations of families that have passed us down as their choice for collision repair. We have a very loyal customer base and are thankful each time you return.</p>
      <p class="block">I appreciate hearing when you refer your friends and family to us for their needs.</p>
      <p class="block">McDaniel's has a long heritage starting with V.L. McDaniel, Richard McDaniel, Mark McDaniel and now myself, Darrell Smith that is committed to offering the best service and quality in collision repair and we look forward to serving you with the same dedication for many years to come.</p>
      <d class="mc-signature-block">
        <img src="imageshistory-4-darrell.jpg" alt="Thank you from Darrell Smith and the staff at McDaniels Quality Body Works" class="is-pulled-left">
        <p class="mc-signature">
          <div>Longview Auto Body Staff</div>
          <div>Thanks again,</div>
          <div>Darrell Smith</div>
          <div>President</div>
        </p>
      </p>
      <p></p>
    </div>
  </div>
</div>

<?php include_once("inc/footer.php"); ?>
