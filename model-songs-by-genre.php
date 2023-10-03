<?php
function selectSongsByGenre($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.genre_id, genre_name, genre_description, title, producer, language FROM `genre` g join song s on s.genre_id = g.genre_id where s.genre_id=?");
       $stmt->bind_param("i", $sid);
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
