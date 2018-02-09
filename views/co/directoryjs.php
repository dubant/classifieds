
  <div class="col-xs-12">
    
  </div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-8 margin-top-15 text-right subsub classifiedFilters" id="sub-menu-left">
  <!-- <h4 class="text-dark padding-bottom-5"><i class="fa fa-angle-down"></i> Catégories</h4>
  <hr> -->
  <h4 class="margin-top-25 padding-bottom-10 letter-azure label-category" id="title-sub-menu-category">
    <i class="fa fa-search"></i>
  </h4>
  <hr>
  <?php 
      foreach ($categories['filters'] as $key => $cat) {
  ?>
      <?php if(is_array($cat)) { ?>
        <button class="btn btn-default text-dark margin-bottom-5 btn-select-category-1" style="margin-left:-5px;" data-keycat="<?php echo $key; ?>">
          <i class="fa fa-<?php echo @$cat["icon"]; ?> hidden-xs"></i> <?php echo Yii::t("category",$key); ?>
        </button><br>
        <?php foreach (@$cat["subcat"] as $key2 => $cat2) { 
          $lbl2 = (isset($cat2["label"])) ? $cat2["label"] : $cat2 ;
          
          ?>
          <button class="btn btn-default text-azure margin-bottom-5 margin-left-15 hidden keycat keycat-<?php echo $key; ?>" data-categ="<?php echo $key; ?>" data-keycat="<?php echo $lbl2; ?>">
            <i class="fa fa-angle-right"></i> <?php echo Yii::t("category",$lbl2); ?>
          </button><br class="hidden">
        <?php } ?>
      <?php } ?>
  <?php } ?>
  <?php if( @Yii::app()->session["userId"] ) { ?> 
  <hr>
  <button class="btn btn-default margin-bottom-5 btn-select-category-1" style="margin-left:-5px;" data-keycat="favorites">
    <span class="text-red"><i class="fa fa-star hidden-xs"></i> <?php echo Yii::t("common","MY FAVORITES") ?></span>
  </button>
  <?php } ?>
</div>
 
  <!-- <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 text-center subsub" id="menu-section-classified">
    <button class="btn margin-bottom-5 margin-left-5 btn-select-type-anc letter-<?php echo @$section["color"]; ?>" 
            data-type="classified" data-type-anc=""  data-key="all">
      <i class="fa fa-circle-o"></i>
      <span class="hidden-xs hidden-sm"> Tous </span>
    </button> -->
    <?php 
        //$currentSection = 1;
        //foreach ($categories["sections"] as $key => $section) { ?>
          <!-- <div class="col-md-2 col-sm-4 col-xs-6 no-padding">
            <button class="btn btn-default col-md-12 col-sm-12 padding-10 bold text-dark elipsis btn-select-type-anc" 
                    data-type-anc="<?php //echo @$section["label"]; ?>" data-key="<?php //echo @$section["key"]; ?>" 
                    data-type="classified"
                    style="border-radius:0px; border-color: transparent; text-transform: uppercase;">
              <i class="fa fa-<?php //echo $section["icon"]; ?> fa-2x hidden-xs"></i><br><?php //echo Yii::t("category",$section["labelFront"]); ?>
            </button>
          </div> -->
    <?php//} ?>  
     <!-- <hr class="col-md-12 col-sm-12 col-xs-12 no-padding" id="before-section-result"> -->
  <!--</div>-->
