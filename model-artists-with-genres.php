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
function insertGenresWithArtists($aid, $gDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSER INTO `genre` g join song s on s.genre_id = g.genre_id where s.artist_id=?");
       $stmt->bind_param("sss=", $aName, $gDesc);
        $stmt->execute();
        $success = $stmt->get_result();
        $conn->close();
        return $success;
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
?>
