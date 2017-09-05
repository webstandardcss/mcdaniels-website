
<?php // Page data
include_once("inc/config.php");
$pageTitle = "Frequently Asked Questions";
$pageTitleTag = $siteName . " from " . $pageTitle;
$pageDescription = $siteName . " from " . $pageTitle;
$pageKeywords = $pageTitle . ",questions,help,faq,Frequently asked questions" . $siteKeywords;
?>

<?php include_once("inc/header.php"); ?>
<?php // .columns.is-multiline.home-buttons.is-mobile.is-hidden-desktop.is-gapless.has-text-centered.is-size-5.is-size-6-mobile>.column.is-one-third.home-buttons-column.home-buttons-column-$*6>img[src="images/icon-home-estimates.png" alt="Estimates"]+span.icon-home-label.icon-home-label-${Estimates} ?>
<div class="column mc-content-body section" id="faq">
  <h1 class="title"><?php echo $pageTitle; ?></h1>
  <h2 class="subtitle">Please see our <a href="#faq">FAQ's</a> below for additional help or call the office at <a href="tel:+19037535391">(903) 753-5391</a></h2>
  <div class="columns">
    <div class="column is-narrow">
      <img src="images\sidebar-faq.png" class="sidebar-image" alt="<?php echo $pageTitle; ?>">
    </div>
    <div class="column">
      <dl class="mc-faq">
         <dt>What is a deductible and will I have to pay it?</dt>
         <dd>When you purchase your insurance policy, you pick a deductible that applies to your
           collision and comprehensive coverages. Deductibles are part of the repair cost and your
           insurance company covers any cost above your deductible. McDaniel&rsquo;s Quality Body Works
           collects all deductibles that apply.</dd>
         <dt>Will I have to pay a deductible to fix the person's car that I hit?</dt>
         <dd>No, only when you repair your vehicle.</dd>
         <dt>Will I get a rental car when my car is in the shop?</dt>
         <dd>If you are filing a claim on your policy, you will only get a rental car if you
           purchased the rental car policy. It is a separate coverage. If your repairs are being covered by another person's policy, you will receive a rental
           car as part of their liability coverage.</dd>
         <dt>My insurance estimate is less than the body shop's estimate. Do I have to pay the difference?</dt>
         <dd>No. We honor most insurance company estimates, therefore bring us the estimate they approved.
           In most cases, we try to write a complete estimate up front whereas the insurance company
           may want to wait until the vehicle is in the shop to come get an agreed price with us. </dd>
         <dt>Can the insurance company use aftermarket and salvage parts to repair my vehicle?</dt>
         <dd>Yes. Your policy spells out the type of parts to be utilized during repairs.
           If it was the other person's fault, state laws allow insurance companies to use
           like kind and quality parts that are determined to be equal quality to OEM.</dd>
         <dt>Can I just leave my vehicle at the shop when I come for the estimate?</dt>
         <dd>Not normally, but in some cases. If you have an insurance claim and they are covering the
           cost of your rental car, they will require us to pre-order your parts and schedule your
           repairs, otherwise we can accommodate drops offs, in most cases. Scheduling your repairs
           after your parts have been received is our most efficient process.</dd>
         <dt>The insurance company made my repair check out to my lien holder, what do I do?</dt>
         <dd>Some insurance companies choose to protect your lien holder when you have an accident.
           Bring the check to us before we start repairs and we will take care of obtaining their
           endorsement.</dd>
         <dt>Is my vehicle a total if it has frame damage?</dt>
         <dd>No. Vehicle makers design frames to be repaired providing the shop has the proper
           equipment and follows correct procedures. If the shop determines the frame needs to
           be replaced, the insurance company may then consider the vehicle a total loss.</dd>
      </dl>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.mc-faq dd').hide();
        $('.mc-faq dt').click(function(){
          $('.mc-faq dd').hide();
          $('.mc-faq dt').removeClass("mc-faq-active");
          $(this).next().slideToggle('slow');
          $(this).addClass("mc-faq-active");
        });
    });
</script>


<?php include_once("inc/footer.php"); ?>
