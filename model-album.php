<?php
function selectAlbum() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT album_id, album_name, release_year FROM `album`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertAlbum($alName, $alYear) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `album` ( `album_name`, `release_year`) VALUES (? , ?)");
        $stmt->bind_param("ss", $alName, $alYear);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateAlbum($alName, $alYear, $alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `album` set `album_name` = ?, `release_year` = ? where album_id=? ");
        $stmt->bind_param("ssi", $alName, $alYear, $alid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteAlbum($alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from album where album_id=?");
        $stmt->bind_param("i", $alid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
