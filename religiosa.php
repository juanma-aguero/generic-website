<?php
$GalleryPath = "images/gallerys/religiosa/";

$galerias = array(
    array("id" => "gallery01", "numero" => "01", "nombre" => "AJCC_/ ArthurChabonOffice", "path" => "ajcc_ ArthurChabonOffice", "imageCount" => 6),
    array("id" => "gallery02", "numero" => "02", "nombre" => "Chabad Orange_/ ArthurChabonOffice", "path" => "chabadOrange_ ArthurChabonOffice", "imageCount" => 5),
    array("id" => "gallery03", "numero" => "03", "nombre" => "Palm Beach_/ ArthurChabonOffice", "path" => "palmBeach_ ArthurChabonOffice", "imageCount" => 8),
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


