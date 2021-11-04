<?php
include('koneksi.php');

$sql = "SELECT * FROM category";
$query = $koneksi->query($sql);
$data = array();
while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
    $data[] = array("id_category" => $row['id_category'], "category_name" => $row['category_name']);
}
echo json_encode($data);
