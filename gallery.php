<?php foreach ($galerias as $galeria): ?>
    <div class="frame" id="<?php echo $galeria['id'] ?>" style="<?php if ($galeria['id'] != 'gallery01')
        echo "display: none"; ?>">
        <div class="gallery-title">
            <span><?php echo $galeria['nombre'] ?></span>
            <ul>
                <?php foreach ($galerias as $galeria2): ?>
                    <li onclick="setAuthorGallery('<?php echo $galeria2['id'] ?>');"><?php echo $galeria2['numero'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="image-container" id="image-container-<?php echo $galeria['id'] ?>">
            <img src="<?php echo $GalleryPath ?><?php echo $galeria['path'] ?>/1.jpg"/>
        </div>
        <div class="image-selector">
            <div class="image-slider" id="image-slider-<?php echo $galeria["id"] ?>">
                <ul>
                    <?php for ($i = 1; $i <= $galeria['imageCount']; $i++): ?>
                        <li><img src="<?php echo $GalleryPath ?><?php echo $galeria['path'] ?>/<?php echo $i ?>.jpg" onclick='loadImage("<?php echo $galeria['id'] ?>","<?php echo $galeria['path'] ?>","<?php echo $i ?>")' height="255" width="255"/></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <div class="slide-area">
            <a onclick="slideThumbsDown('image-slider-<?php echo $galeria["id"] ?>')">&uarr;</a>
            <a onclick="slideThumbsUp('image-slider-<?php echo $galeria["id"] ?>')">&darr;</a>
        </div>
    </div>
<?php endforeach; ?>