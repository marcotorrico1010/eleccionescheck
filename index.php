<?php
    function getExifData($img) {
      $exif = exif_read_data($img, 'IFD0');
      if($exif){
        $new_img_info = 'exif found';
      } else {
        $new_img_info = 'exif empty';
      }
      if(isset($exif['DateTime'])){
        $new_img_info .= ' - '.$exif['DateTime'];
      }
      if(isset($exif['Make'])){
        $new_img_info .= ' - '.$exif['Make'];
      }
      return $new_img_info;
    }

$total_items = range(50995, 50999);
        if(count($total_items)>0){
            foreach($total_items as $total_item){
                $image_result = getExifData('https://trep.oep.org.bo/resul/imgActa/'.$total_item.'1.jpg');
                echo $image_result.'<br>';
            }
        }