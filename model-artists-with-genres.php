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

function selectGenresWithArtists($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.genre_id, genre_name, genre_description, title, producer, language FROM `genre` g join song s on s.genre_id = g.genre_id where s.artist_id=?");
       $stmt->bind_param("i", $aid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertSong($aid, $gid, $title, $language, $producer) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `song` (`artist_id`, `genre_id`, `title`, `language`, `producer`) VALUES (? , ? , ? , ?, ?);");
       $stmt->bind_param("iisss", $aid, $gid, $title, $language, $producer);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateSong($aid, $gid, $title, $language, $producer, $sid ) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `song` set `artist_id`= ?, `genre_id`= ?, `title`= ?, `language`= ?, `producer`= ?) where song_id= ?");
       $stmt->bind_param("iisssi", $aid, $gid, $title, $language, $producer, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteSong($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from song where song_id=?");
       $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
