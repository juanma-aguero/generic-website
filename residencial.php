<?php
$GalleryPath = "images/gallerys/residencial/";

$galerias = array(
    array("id" => "gallery01", "numero" => "01", "nombre" => "AlvarezThomas_LDB", "path" => "alvarezThomas_LDB", "imageCount" => 5),
    array("id" => "gallery02", "numero" => "02", "nombre" => "Argerich_EstudioUrbano", "path" => "argerich_EstudioUrbano", "imageCount" => 3),
    array("id" => "gallery03", "numero" => "03", "nombre" => "Aspen_ArthurChabonOffice", "path" => "aspen_ArthurChabonOffice", "imageCount" => 19),
    array("id" => "gallery04", "numero" => "04", "nombre" => "NewYersey / ArthurChabonOffice", "path" => "newYersey_ArthurChabonOffice", "imageCount" => 4),
    array("id" => "gallery05", "numero" => "05", "nombre" => "NewYork / ArthurChabonOffice", "path" => "newYork_ArthurChabonOffice", "imageCount" => 4),
    array("id" => "gallery06", "numero" => "06", "nombre" => "SunshineRanch / ArthurChabonOffice", "path" => "sunshineRanch_ArthurChabonOffice", "imageCount" => 6),
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
