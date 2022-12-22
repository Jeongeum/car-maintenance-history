<?php
$file_id = $_REQUEST['file_id'];

$db_conn = mysqli_connect("localhost", "hoseo12", "1234", "car_db");
$query = "SELECT fno, file_id, fname_orig, fname_save  FROM upload_file WHERE file_id = ?";
$stmt = mysqli_prepare($db_conn, $query);

$bind = mysqli_stmt_bind_param($stmt, "s", $file_id);
$exec = mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$fname_orig = $row['fname_orig'];
$fname_save = $row['fname_save'];

$fileDir = "data/";
$fullPath = $fileDir."/".$name_save;
$length = filesize($fullPath);

header("Content-Type: application/octet-stream");
header("Content-Length: $length");
header("Content-Disposition: attachment; filename=".iconv('utf-8','euc-kr',$name_orig));
header("Content-Transfer-Encoding: binary");

$fh = fopen($fullPath, "r");
fpassthru($fh);

mysqli_free_result($result);
mysqli_stmt_close($stmt);
mysqli_close($db_conn);

exit;
?>
