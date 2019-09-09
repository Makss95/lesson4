
<div id="container">
    <div id="heading"> Site
        <h1>Hello!</h1>
    </div>
    <div id="gallery">//
        <?php
            $dir = '..\images';
            if(is_dir($dir)&&file_exists($dir)){
                $images= scandir($dir);
                for($i=0;$i < count($images); i++){
                    $images=$dir.$images[$i];
                    echo '<img src"'.$image.'"width=50">';
                }
}

        ?>
        <div class="clear"></div>
    </div>
    <div id="footer">
    </div>
</div>

