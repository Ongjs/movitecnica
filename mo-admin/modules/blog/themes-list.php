<?php
require_once "../conf.php";
$search = isset($_POST['search']) ? strtolower(mo_scape($_POST['search'])) : "";
$cn->query("SELECT id, name,content, image, status from content WHERE LOWER(name) like '%$search%' ORDER BY id asc");
?>
<table width="100%" class="listing">
	<thead>
		<tr>
			<th width="30">N&deg;</th>
			<th width="">Name</th>
			<th width="40">image</th>
			<th width="40">Edit</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = $cn->fetch()){ ?>
		<tr>
			<td class="center"><?php echo $row['id']; ?></td>
			<td><a href="./?mod=81&id=<?php echo $row['id']; ?>"><?php echo mo_unscape($row['name']); ?></a></td>
                        
			<td class="center"><a href="../images/<?php echo $row['image']; ?>" rel="shadowbox;width=480;height=240;" class="button file" title="<?php echo mo_unscape($row['name']); ?>"></a></td>
			<td class="center"><a href="#" id="<?php echo $row['id']; ?>" class="button update" title="Edit"></a></td>
		</tr>
		<?php } ?>
		<?php if($cn->numrows() == 0) echo '<tr><td colspan="10" class="row_error">No Records.</td></tr>'; ?>
	</tbody>
</table>