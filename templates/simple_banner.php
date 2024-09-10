<?php
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
    . "data-title='Slide' data-description=''>"
    . "<img src='$img' alt='image description' "
    . "data-bgposition='right center' data-kenburns='on' data-duration='30000' "
    . "data-ease='Linear.easeNone' data-scalestart='100' data-scaleend='110' "
    . "data-rotatestart='0' data-rotateend='0' data-offsetstart='0 0' "
    . "data-offsetend='0 0' data-bgparallax='10' class='rev-slidebg' "
    . "data-bgfit='cover' data-no-retina />";

  banner_description(
    $banner_data['description'],
    $banner_data['data_x'],
    $banner_data['data_y'],
    $banner_data['data_v'],
    $banner_data['data_h']
  );
  (!empty($banner_data['btn_title']) && $banner_data['btn_title'] != "Primera vez") && banner_button($banner_data['btn_title'], $banner_data['btn_bg']);
  $banner_data['btn_title'] == "Primera vez" && double_banner_button();
  echo "</li></ul></div></div></div>";
}

function double_banner_button()
{
  echo "<div class='tp-caption rev-btn rs-parallaxlevel-10' id='slide-163-layer-2' "
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
    . "data-voffset=\"['100','160','180','150']\" "
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
}

function banner_description($description, $data_x, $data_y, $data_v, $data_h)
{
  $align = "start";
  $americana = "['780','right','right','right']";
  if($data_x == $americana){
    $align = "end";
  }

  echo "<div class='tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0' "
    . "data-x=\"$data_x\""
    . "data-hoffset=\"$data_h\" "
    . "data-y=\"$data_y\" "
    . "data-voffset=\"$data_v\" "
    . "data-fontsize=\"['48','48','44','28']\" "
    . "data-lineheight=\"['50','85','50','50']\" "
    . "data-width=\"['430','1000','750','480']\" "
    . "data-height='none' data-whitespace='normal' "
    . "data-transform_idle='o:1;' "
    . "data-transform_in='z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;' "
    . "data-transform_out='y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;' "
    . "data-mask_in='x:0px;y:0px;' data-mask_out='x:inherit;y:inherit;' "
    . "data-start='1000' data-splitin='none' data-splitout='none' "
    . "data-responsive_offset='on' style='margin-block-start: 7.5rem; margin-block-end: .5rem;"
    . "margin-inline-start: 6.5rem; z-index: 7; letter-spacing: 0; "
    . "font-weight: 400; text-align: $align; color: #e5e2e2;'>$description</div>";
}
