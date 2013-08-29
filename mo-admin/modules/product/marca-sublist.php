<?php
require_once "../conf.php";
$id = isset($_POST['id']) ? mo_scape($_POST['id']) : "";
$hid = isset($_POST['hid']) ? mo_scape($_POST['hid']) : "";
$cn->query("SELECT hidden from product WHERE id = '$hid'");
$row = $cn->fetch();
$hidden = $row['hidden'];
$hidden = explode(",", $hidden);
sub_categorys($id,$hidden);

function sub_categorys($id,$hidden) {
        $cn = Connection::getInstance();
        $cn->query("SELECT id,name from product WHERE type = '1' and parent_id = '$id'");
        if($cn->numrows()){
            $array_fill = array();
            while ($row = $cn->fetch()) $array_fill[] = $row;
            ?>
            <ul>
            <?php
            foreach ($array_fill as $li) {
                ?>
                <li style="width: 300px"><span>&DoubleRightArrow; <?php echo $li[1]; ?> <img src="../images/<?php echo in_array($li[0], $hidden) ? "inactive" : "active" ?>.png" data-id="<?php echo $li[0]; ?>" class="sub_status"></span>
                    <?php sub_categorys($li[0],$hidden); ?>
                </li>
                <?php
            }
            ?>
            </ul>
            <?php
            
        }
    }