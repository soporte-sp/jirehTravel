<?php
function simple_banner($banner_data)
{
  $img = $banner_data['urlImage'];
  echo "<div class='banner-content'>";
  echo "<img src='$img'";
  echo "alt='image description' /><div class='banner-description'> ";
  echo "<p>Encontramos el hospedaje perfecto para ti</p></div></div>";
}
