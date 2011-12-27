<?php
$GalleryPath = "images/gallerys/comercial/";

$galerias = array(
    array("id" => "gallery01", "numero" => "01", "nombre" => "Agora / EstudioGGR", "path" => "agora_EstudioGGR", "imageCount" => 4),
    array("id" => "gallery02", "numero" => "02", "nombre" => "Gazebo / EstudioGGR", "path" => "gazebo_EstudioGGR", "imageCount" => 2),
    array("id" => "gallery03", "numero" => "03", "nombre" => "TeaGallery_/ EstudioGGR", "path" => "teaGallery_EstudioGGR", "imageCount" => 3),
);
?>

<script type="text/javascript">
    $('#frame').ready(function(){
        
    });
    function setAuthorGallery(galleryId){
        $('[id^=gallery]').hide();
        $('#'+galleryId).show();
    }
    function loadImage(galleryId, path, imageNumber){
        $('#image-container-'+galleryId).empty();
        var imgSrc='<?php echo $GalleryPath ?>' + path + '/' + imageNumber+'.jpg';
        $('#image-container-'+galleryId).html('<img src="'+ imgSrc +'" />');
    }
</script>


<?php include 'gallery.php'; ?>