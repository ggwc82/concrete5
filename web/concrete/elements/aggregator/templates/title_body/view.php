<? defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="ccm-aggregator-tile-headline"><a href="<?=$link?>"><?=$title?></a></div>
<div><?=date(DATE_APP_GENERIC_MDYT_FULL, strtotime($date_time))?></div>
<div>
<?=$body?>
</div>



