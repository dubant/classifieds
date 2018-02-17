<?php 

$classified = CO2::getModuleContextList("classifieds","categories");
$currentSection = 1;

foreach ($classified["sections"] as $key => $section) 
{ ?>

  <div class="col-md-3 col-sm-3 col-xs-6 no-padding">
    <button class="btn btn-default col-md-12 col-sm-12 padding-10 bold text-dark elipsis btn-select-type-anc btn-select-filliaire" 
            data-type-anc="<?php echo @$section["label"]; ?>" data-key="<?php echo @$section["key"]; ?>" 
            data-type="classified"
            style="border-radius:0px; border-color: transparent; text-transform: uppercase;">
      <i class="fa fa-<?php echo $section["icon"]; ?> fa-2x hidden-xs"></i><br><?php echo Yii::t("category",$section["labelFront"]); ?>
    </button>
  </div>

<?php 
} ?>