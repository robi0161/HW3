<?php
function selectStream() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT stream_id, stream_name, stream_year FROM `stream`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertStream($stName, $stYear) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `stream` ( `stream_name`, `stream_year`) VALUES (? , ?)");
        $stmt->bind_param("ss", $stName, $stYear);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateAlbum($stName, $stYear, $stid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `stream` set `stream_name` = ?, `stream_year` = ? where stream_id=? ");
        $stmt->bind_param("ssi", $stName, $stYear, $stid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteAlbum($stid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from stream where stream_id=?");
        $stmt->bind_param("i", $stid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
