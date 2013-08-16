<?php
require_once "../conf.php";
$search = isset($_POST['search']) ? strtolower(mo_scape($_POST['search'])) : "";
$cn->query("SELECT id, name,content, image, status from content WHERE LOWER(name) like '%$search%' ORDER BY id asc");
?>
<table width="100%" class="listing">
    <thead>
        <tr>
            <th width="30">N&deg;</th>
            <th width="">Nombre</th>
            <th width="40">Imagen</th>
            <th width="40">Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $cont = 1;
        while ($row = $cn->fetch()) { 
            ?>
            <tr>
                <td class="center"><?php echo $cont; ?></td>
                <td><?php echo mo_unscape($row['name']); ?></td>
                <td class="center"><a href="../userfiles/<?php echo $row['image']; ?>" rel="shadowbox;width=480;height=240;" class="button file" title="<?php echo mo_unscape($row['name']); ?>"></a></td>
                <td class="center"><a href="#" id="<?php echo $row['id']; ?>" class="button update" title="Editar"></a></td>
            </tr>
        <?php $cont++;} ?>
        <?php if ($cn->numrows() == 0) echo '<tr><td colspan="10" class="row_error">No se encontraron registros.</td></tr>'; ?>
    </tbody>
</table>