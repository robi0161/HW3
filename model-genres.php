<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_id, genre_name, genre_description  FROM `artist`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
