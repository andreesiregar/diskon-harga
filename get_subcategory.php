<?php
include('koneksi.php');
$id_category = $_GET['id_category'];
$sql = "SELECT * FROM subcategory WHERE `id_category` = '$id_category'";
$query = $koneksi->query($sql);
$data = array();
while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
    $data[] = array(
        "id_subcategory" => $row['id_subcategory'],
        "subcategory_name" => $row['subcategory_name']
    );
}
echo json_encode($data);
