<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_id, artist_name, hometown  FROM `artist`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertArtists($aName, $aHome) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `artist` (`artist_name`, `hometown`) VALUES (?, ?)");
         $stmt->bind_param("ss", $aName, $aHome);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateArtists($aName, $aHome, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `artist` set `artist_name` = ?, `hometown` = ? where artist_id = ?");
         $stmt->bind_param("ssi", $aName, $aHome, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteArtists($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from artist where artist_id=?");
         $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
