<?php
require_once "../conf.php";
$id = isset($_POST['id']) ? $_POST['id'] : "";
$ncat = isset($_POST['ncat']) ? $_POST['ncat'] : "";
$sele = isset($_POST['select']) ? $_POST['select'] : "";
if (!empty($id)) {
    $cn->query("SELECT name, image, content from product WHERE id = '$id'");
    $row = $cn->fetch();
}else $row = array("name"=>"", "content"=>"", "image"=>"");
?>
<form id="<?php echo empty($id) ? "save" : "update"; ?>">
    <fieldset>
        <legend>Ingresar Informacion</legend>
        <table width="100%">
            <tr>
                <td><label for="name">Nombre</label></td>
                <td><input type="text" name="name" id="name" value="<?php echo mo_unscape($row['name']); ?>" /></td>
            </tr>
            <tr>
                <td><label for="image">Imagen<br /><span class="recommended_size">(150px x 150px)</span></label></td>
                <td><input type="file" id="image"/></td>
            </tr>
            <tr>
                <td><label for="tinymce">Content</label></td>
                <td><textarea name="cont" id="" class="tinymce"><?php echo $row['content']; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><br /><input type="submit" value="Submit" /></td>
            </tr>
        </table>
        <input type="hidden" name="img_file" value="aaaa" id="img_file">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="hidden" name="ncat" value="<?php echo $ncat; ?>" />
        <input type="hidden" name="select" value="<?php echo $sele; ?>" />
    </fieldset>
</form>
<script src="../lib/jquery-asyncUpload-0.1/swfupload.js" type="text/javascript"></script>
<script src="../lib/jquery-asyncUpload-0.1/jquery-asyncUpload-0.1.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    mo_tinymce();

    $("#image").makeAsyncUploader({
        upload_url: "<?php echo $_SERVER['PHP_SELF']; ?>?mod=1", 
        flash_url: '../lib/jquery-asyncUpload-0.1/swfupload.swf', 
        path_url: '../userfiles/', 
        disableDuringUpload: 'input[type="submit"]', 
        <?php if(!empty($id) && is_file("../userfiles/" . $row['image'])){ ?>
        existingFilename: '<?php echo substr(strstr($row['image'], "_"), 1); ?>', 
        existingGuid: '<?php echo $row['image']; ?>', 
        existingFileSize: <?php echo filesize("../userfiles/" . $row['image']); ?>, 
        <?php } ?>
        file_types_description: 'Imagenes', 
        file_types: '*.jpg; *.jpeg; *.gif; *.png;', 
        file_size_limit: '<?php echo ini_get("upload_max_filesize"); ?>B', 
        width: 120, 
        button_text: "<font face='Arial' size='13pt'>Explorar</font>", 
        button_text_left_padding: 30,
        button_image_url: '../lib/jquery-asyncUpload-0.1/blankButton.png'
    });
});
</script>