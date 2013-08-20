<?php
require_once "../conf.php";
$select = isset($_POST['select']) ? strtolower(mo_scape($_POST['select'])) : "0";
?>
<table width="100%" class="listing">
    <tbody>
        <?php
        $catid = 6;
        while(is_numeric($catid)){   
        $cn->query("SELECT parent_id from product WHERE id = $catid");
        $parent_id = $cn->fetch();
        $parent_id = $parent_id["parent_id"];
        $cn->query("SELECT id, name, parent_id from product WHERE parent_id = $catid ORDER BY id asc");
        ?>
            <tr>
                <td>
                    <?php echo $catid == 0 ? "Categorias": ""; ?>
                </td>
                <td>
                    <select name="opt_cat" id ="opt_cat">
                <?php
                $cont = 1;
                while ($row = $cn->fetch()) { ?>
                        <option <?php echo (int)$row['id'] == $catid ? "selected" : ""; ?> value="<?php echo $row['id']."-".$catid; ?>"><?php echo $row['name']; ?></option>
                <?php $cont++; } ?>
                <?php if ($cn->numrows() == 0) echo '<tr><td colspan="10" class="row_error">No se encontraron registros.</td></tr>'; ?>
                    </select>
                </td>
            </tr>
        <?php
        $catid = $parent_id;
        }
        ?>
    </tbody>
</table>