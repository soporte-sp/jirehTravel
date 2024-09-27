<!-- <section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="gridview-2-col"
  style="background-position: 50% 0px; ">
  <div class="banner-text">
    <div class="center-text">
      <div class="container">
        <h1>Hiking Camping 2016</h1>
        <strong class="subtitle">Two Column Adventure Grid View Show.</strong>
        <! breadcrumb ->
        <nav class="breadcrumbs">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ADVENTURES</a></li>
            <li><span>ALL</span></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section> -->
<?php
<<<<<<< HEAD
/* function simple_banner($banner_data,$srcset)
{
  $img = $banner_data['urlImage'];
  echo "<div class='banner-content'>";
  echo "<img src='$img'";
  echo "srcset='$srcset'";
  echo "alt='image description' /><div class='banner-description'> ";
  echo "<p>Encontramos el hospedaje perfecto para ti</p></div></div>";
} */

function simple_banner($banner_data,$srcset)
{
  $img = $banner_data['urlImage'];
  echo "<style>.tp-leftarrow{display: none;} .tp-rightarrow{display: none;} .tp-bgimg{height:0 !important;} tp-kbimg{height:0 !important;}</style>
  <div class='banner banner-inner parallax'><div>"
    . "<div id='' class='rev_slider' style='display: none' >"
    . "<ul><li class='slider-color-schema-dark' data-index='rs-4' data-transition='fade' "
    . "data-slotamount='7' data-easein='default' data-easeout='default' "
    . "data-masterspeed='1000' data-rotate='0' data-saveperformance='off' "
    . "data-title='Slide' data-description='' >"
    . "<img src='$img' srcset='$srcset' alt='Simple banner'"
    . "data-bgposition='center center' data-kenburns='on' />";

=======
//function simple_banner($img, $description, $btn_title, $btn_bg,$data_x, $data_y, $data_v, $data_h) {
function simple_banner($banner_data)
{
  $img = $banner_data['urlImage'];
  echo "<style>.tp-leftarrow{display: none;} .tp-rightarrow{display: none;}</style>
  <div class='banner banner-home' style='height: 80vh;'><div>"
    . "<div id='rev_slider_70_1' class='rev_slider fullscreenabanner' style='display: none' data-version='5.1.4'>"
    . "<ul><li class='slider-color-schema-dark' data-index='rs-4' data-transition='fade' "
    . "data-slotamount='7' data-easein='default' data-easeout='default' "
    . "data-masterspeed='1000' data-rotate='0' data-saveperformance='off' "
    . "data-title='Slide' data-description='' >"
    . "<img src='$img' alt='image description' "
    . "data-bgposition='right center' data-kenburns='on' data-duration='30000' "
    . "data-ease='Linear.easeNone' data-scalestart='100' data-scaleend='105' "
    . "data-rotatestart='0' data-rotateend='0' data-offsetstart='0 0' "
    . "data-offsetend='0 0' data-bgparallax='10' class='rev-slidebg' "
    . "data-bgfit='cover' data-no-retina />";

>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
  banner_description(
    $banner_data['description'],
    $banner_data['data_x'],
    $banner_data['data_y'],
    $banner_data['data_v'],
<<<<<<< HEAD
    $banner_data['data_h'],
    $banner_data['data_w'],
  );
  if (!empty($banner_data['btn_title']) && $banner_data['btn_title'] != "Primera vez") {
    banner_button(
      $banner_data['btn_title'], 
      $banner_data['btn_bg'],
      $banner_data['btn_data_x'],
      $banner_data['btn_data_h'],
      $banner_data['btn_data_y'],
      $banner_data['btn_data_v'],
    );
  }
=======
    $banner_data['data_h']
  );
  (!empty($banner_data['btn_title']) && $banner_data['btn_title'] != "Primera vez") && banner_button($banner_data['btn_title'], $banner_data['btn_bg']);
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
  $banner_data['btn_title'] == "Primera vez" && double_banner_button();
  echo "</li></ul></div></div></div>";
}

function double_banner_button()
{
  echo "<div class='tp-caption rev-btn rs-parallaxlevel-10' id='slide-163-layer-2' "
<<<<<<< HEAD
    . "data-x=\"['right','right','right','right']\" data-hoffset=\"['0','119','177','175']\" "
    . "data-y=\"['430','bottom','bottom','bottom']\" data-voffset=\"['100','200','280','-160']\" "
    . "data-width=\"300\" data-height=\"['50','0','0','300']\" data-whitespace=\"nowrap\" "
    . "data-transform_idle=\"o:1;\" data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;\" "
    . "data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" "
    . "data-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" "
    . "data-mask_out=\"x:inherit;y:inherit;\" data-start=\"1250\" data-splitin=\"none\" "
    . "data-splitout=\"none\" data-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"rs-164\",\"delay\":\"\"}]' "
    . "data-responsive_offset=\"on\"><a href=\"#\" style=\"color: white; background-color: "
    . "red; padding: 1rem; font-size: 2.5rem; border-radius: 0.2em; margin-inline-start: 2rem;\">Primera vez</a><a "
    . "href=\"#\" style=\"color: white; background-color: red; border-radius: 0.2em; "
    . "margin-inline-start: 2.3rem; padding: 1rem; font-size: 2.5rem;\">Renovación</a></div>";
}

function banner_button($btn_title, $btn_bg,$data_x,$data_h,$data_y,$data_v)
{
  echo "<div class='tp-caption rev-btn rs-parallaxlevel-10' id='slide-163-layer-2' "
    . "data-x=\"$data_x\" "
    . "data-hoffset=\"$data_h\" "
    . "data-y=\"$data_y\" "
    . "data-voffset=\"$data_v\" "
=======
  . "data-x=\"['right','start','right','right']\" data-hoffset=\"['0','0','0','0']\" "
  . "data-y=\"['430','right','right','right']\" data-voffset=\"['100','160','180','150']\" "
  . "data-width=\"300\" data-height=\"['50','0','0','300']\" data-whitespace=\"nowrap\" "
  . "data-transform_idle=\"o:1;\" data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;\" "
  . "data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;\" "
  . "data-transform_out=\"y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\" "
  . "data-mask_out=\"x:inherit;y:inherit;\" data-start=\"1250\" data-splitin=\"none\" "
  . "data-splitout=\"none\" data-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"rs-164\",\"delay\":\"\"}]' "
  . "data-responsive_offset=\"on\"><a href=\"#\" style=\"color: white; background-color: "
  . "red; padding: 1rem; font-size: 2.5rem; border-radius: 0.2em; margin-inline-start: 2rem;\">Primera vez</a><a "
  . "href=\"#\" style=\"color: white; background-color: red; border-radius: 0.2em; "
  . "margin-inline-start: 2.3rem; padding: 1rem; font-size: 2.5rem;\">Renovación</a></div>";
}

function banner_button($btn_title, $btn_bg)
{
  echo "<div class='tp-caption rev-btn rs-parallaxlevel-10' id='slide-163-layer-2' "
    . "data-x=\"['start','start','center','center']\" "
    . "data-hoffset=\"['0','0','0','0']\" "
    . "data-y=\"['middle','middle','middle','middle']\" "
    . "data-voffset=\"['35','160','180','150']\" "
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
    . "data-width='none' data-height='none' data-whitespace='nowrap' "
    . "data-transform_idle='o:1;' "
    . "data-transform_hover='o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;' "
    . "data-transform_in='y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;' "
    . "data-transform_out='y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;' "
    . "data-mask_out='x:inherit;y:inherit;' data-start='1250' "
    . "data-splitin='none' data-splitout='none' "
    . "data-actions='[{\"event\":\"click\",\"action\":\"jumptoslide\",\"slide\":\"rs-164\",\"delay\":\"\"}]' "
    . "data-responsive_offset='on'>"
    . "<a class='btn btn-banner' href='#' style='background-color: $btn_bg; "
    . "margin-inline-start: 2.8rem;'>$btn_title</a>"
    . "</div>";
<<<<<<< HEAD
=======
}

function banner_description($description, $data_x, $data_y, $data_v, $data_h)
{
  $align = "start";
  $americana = "['780','right','right','right']";
  $canadiense = "['160','center','center','center']";
  $width = "['520','1000','750','480']";

  if($data_x == $americana){
    $align = "end";
  }

  if($data_y == $canadiense){
    $width = "['420','1000','750','480']";
  }

  echo "<div class='tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0' "
    . "data-x=\"$data_x\""
    . "data-hoffset=\"$data_h\" "
    . "data-y=\"$data_y\" "
    . "data-voffset=\"$data_v\" "
    . "data-fontsize=\"['48','48','44','28']\" "
    . "data-lineheight=\"['50','85','50','50']\" "
    . "data-width=\"$width\" "
    . "data-height='none' data-whitespace='normal' "
    . "data-transform_idle='o:1;' "
    . "data-transform_in='z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;' "
    . "data-transform_out='y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;' "
    . "data-mask_in='x:0px;y:0px;' data-mask_out='x:inherit;y:inherit;' "
    . "data-start='1000' data-splitin='none' data-splitout='none' "
    . "data-responsive_offset='on' style='margin-block-start: 7.5rem; margin-block-end: .5rem;"
    . "margin-inline-start: 6.5rem; z-index: 7; letter-spacing: 0; "
    . "font-weight: 400; text-align: $align; color: #e5e2e2;'>$description</div>";
>>>>>>> c1916bcf3aebda385dd08075e592827ea4338ca1
}

function banner_description($description, $data_x, $data_y, $data_v, $data_h, $data_w)
{
  $align = "start";
  $canadiense = "['160','center','center','center']";

  if ($data_y == $canadiense) {
    $width = "['420','1000','750','480']";
  }

  echo "<div class='tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0' "
    . "data-x=\"$data_x\""
    . "data-hoffset=\"$data_h\" "
    . "data-y=\"$data_y\" "
    . "data-voffset=\"$data_v\" "
    . "data-fontsize=\"['48','48','44','28']\" "
    . "data-lineheight=\"['50','50','50','30']\" "
    . "data-width=\"$data_w\" "
    . "data-height='none' data-whitespace='normal' "
    . "data-transform_idle='o:1;' "
    . "data-transform_in='z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;' "
    . "data-transform_out='y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;' "
    . "data-mask_in='x:0px;y:0px;' data-mask_out='x:inherit;y:inherit;' "
    . "data-start='1000' data-splitin='none' data-splitout='none' "
    . "data-responsive_offset='on' style='margin-block-start: 7.5rem; margin-block-end: .5rem;"
    . "margin-inline-start: 6.5rem; z-index: 7; letter-spacing: 0; "
    . "font-weight: 500; font-family: 'Poppins', sans-serif; text-align: $align; color: white; border: 1px solid white;'>$description</div>";
}

