<?php
require_once "../conf.php";
$id = isset($_POST['id']) ? $_POST['id'] : "";
if (!empty($id)) {
    $cn->query("SELECT name, image, content from content WHERE id = '$id'");
    $row = $cn->fetch();
}
?>
<form id="<?php echo empty($id) ? "save" : "update"; ?>">
    <fieldset>
        <legend>Enter Information</legend>
        <table width="100%">
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" value="<?php echo mo_unscape($row['name']); ?>" /></td>
            </tr>
            <tr>
                <td><label for="image">Image Thumbnail<br /><span class="recommended_size">(160w x 80h)</span></label></td>
                <td><input type="file" id="image" /></td>
            </tr>
            <tr>
                <td><label for="tinymce">Content</label></td>
                <td><textarea name="content" id="tinymce" class="tinymce"><?php echo $row['content']; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><br /><input type="submit" value="Submit" /> <input type="button" value="Cancel" class="list" /></td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
    </fieldset>
</form>
<script src="../lib/jquery-asyncUpload-0.1/swfupload.js" type="text/javascript"></script>
<script src="../lib/jquery-asyncUpload-0.1/jquery-asyncUpload-0.1.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    mo_tinymce();

//    $("#file").makeAsyncUploader({
//        upload_url: "<?php echo $_SERVER['PHP_SELF']; ?>?mod=1", 
//        flash_url: '../lib/jquery-asyncUpload-0.1/swfupload.swf', 
//        path_url: '../userfiles/', 
//        disableDuringUpload: 'input[type="submit"]', 
//        <?php /*if(!empty($id)){ ?>
//        existingFilename: '<?php echo substr(strstr($row['image'], "_"), 1); ?>', 
//        existingGuid: '<?php echo $row['image']; ?>', 
//        existingFileSize: <?php echo filesize("../userfiles/".$row['image']); ?>, 
//        <?php }*/ ?>
//        file_types_description: 'Image or Video', 
//        file_types: '*.jpg; *.gif; *.png; *.flv;', 
//        file_size_limit: '<?php echo ini_get("upload_max_filesize"); ?>B', 
//        button_image_url: '../lib/jquery-asyncUpload-0.1/blankButton.png'
//    });
//
//    $("#thumbnail").makeAsyncUploader({
//        upload_url: "<?php echo $_SERVER['PHP_SELF']; ?>?mod=1", 
//        flash_url: '../lib/jquery-asyncUpload-0.1/swfupload.swf', 
//        path_url: '../userfiles/', 
//        disableDuringUpload: 'input[type="submit"]', 
//        <?php /*if(!empty($id)){ ?>
//        existingFilename: '<?php echo substr(strstr($row['content'], "_"), 1); ?>', 
//        existingGuid: '<?php echo $row['content']; ?>', 
//        existingFileSize: <?php echo filesize("../userfiles/".$row['content']); ?>, 
//        <?php }*/ ?>
//        file_types_description: 'All Images', 
//        file_types: '*.jpg; *.gif; *.png;', 
//        file_size_limit: '<?php echo ini_get("upload_max_filesize"); ?>B', 
//        button_image_url: '../lib/jquery-asyncUpload-0.1/blankButton.png'
//    });
});
</script>