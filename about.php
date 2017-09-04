<?php // Page data
include_once("inc/config.php");
$pageTitle = "About" . $siteName;
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = "Find out about " . $siteName;
$pageKeywords = $pageTitle . ",about us" . $siteKeywords;
?>

<?php include_once("inc/header.php"); ?>

<div class="column mc-content-body section">
  <h1 class="title"><?php echo $pageTitleTag; ?></h1>
  <div>
    <h2 class="subtitle"><img src="images\sidebar-vlmcdaniel.png" class="is-pulled-right" alt="V.L. McDaniel">McDaniel's Quality Body Works is one of the oldest paint and body shops in this part of the country, established in 1933 and continued for three generations.</h2>
    <p class="block">Original founder V.L. McDaniel started in the collision repair business in Abilene, Texas in 1921 as a Body Technician and Shop Manager. After relocating to the East Texas area in 1930, V.L. went to work at a Chevrolet dealership in Overton as a Body Technician and Shop Manager and later came to Le Sage Chevrolet in Longview in 1932&hellip; <a href="#">Read More</a></p>
    <h3 class="block subtitle">Accident? Insurance Claim?</h3>
    <p class="block">We are on Direct Repair Programs (DRP) with several major insurance companies. Direct repair programs are much like preferred providers in health insurance. This means McDaniel's will handle your claim direct with the insurance company, saving you the time of running all over town getting estimates. Be sure and ask the insurance company if they have a Direct Repair Program and if we are on their list. If a company has a program that we are not a part of, you are in no way obligated to use their shop just because they offer. You can always have your vehicle repaired at the shop of your choice.</p>
    <h3 class="block subtitle"><img src="images\sidebar-recycle-logo.png" class="is-pulled-right" alt="Certifiably Green">Certifiably Green</h3>
    <p class="block">As an environmentally concerned green business, McDaniel's Quality Body Works recycles all cardboard, metal and chemical waste products.</p>
    <h3 class="subtitle">Thank You for using McDaniel's Quality Body Works Collision Repair Shop in Longview&hellip;
      <a href="#">Read More</a>
    </h3>
    <p></p>
  </div>
</div>

<?php include_once("inc/footer.php"); ?>
