<?php
$GalleryPath = "images/gallerys/educativa/";

$galerias = array(
    array("id" => "gallery01", "numero" => "01", "nombre" => "Alaska / ArthurChabonOffice", "path" => "alaska_ ArthurChabonOffice", "imageCount" => 6)
);
?>

<script type="text/javascript">
    function loadImage(galleryId, path, imageNumber){
        $('#image-container-'+galleryId).empty();
        var imgSrc='<?php echo $GalleryPath ?>' + path + '/' + imageNumber+'.jpg';
        $('#image-container-'+galleryId).html('<img src="'+ imgSrc +'" />');
    }
</script>


<?php include 'gallery.php'; ?>