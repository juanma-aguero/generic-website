<?php
$GalleryPath = "images/gallerys/institucional/";

$galerias = array(
    array("id" => "gallery01", "numero" => "01", "nombre" => "Resistencia_/ AA2000", "path" => "resistencia_AA2000", "imageCount" => 3),
    array("id" => "gallery02", "numero" => "02", "nombre" => "SanFernando_/ AA2000", "path" => "sanFernando_AA2000", "imageCount" => 2)
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