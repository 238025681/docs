<?php

class AuthorsModel extends BaseModel {

    public function getAll() {
        $statement = self::$db->query(
            "SELECT p.id, p.title, LEFT(p.TEXT, 85) AS preview, p.TEXT AS text FROM poems AS p order by id desc");

        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id) {
        $statement = self::$db->query(
            "SELECT * FROM poems AS p where id = " . $id);

        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function createAuthor($title, $poem_text, $period = 0, $isFav) {
        if ($title== '' || $text = '') {
            return false;
        }

        $statement = self::$db->prepare(
            "INSERT INTO poems (title, text, period, is_fav)".
                  "VALUES (?, ?, ?, ?)");
        $statement->bind_param("ssis", $title, $poem_text, intval($period), $isFav);

        $statement->execute();
        return $statement->affected_rows > 0;
    }

    public function editAuthor($id, $title, $poem_text, $period = 0, $isFav) : bool {
        if ($title== '' || $text = '') {
            return false;
        }

        $statement = self::$db->prepare(
            "UPDATE  poems SET title = ?, text = ?, period = ?, is_fav = ? WHERE id = ?");
        $statement->bind_param("ssisi", $title, $poem_text, intval($period), $isFav, $id);

        $statement->execute();
        return $statement->affected_rows > 0;
    }

    public function deleteAuthor($title) {
        if ($title== '') {
            return false;
        }

        $statement = self::$db->prepare(
            "DELETE FROM poems WHERE title LIKE ?");
        $statement->bind_param("s",  $title);
        $statement->execute();
        return $statement->affected_rows > 0;
    }

    public function deleteAuthorById($id) {

        $statement = self::$db->prepare(
            "DELETE FROM poems WHERE id = ?");
        $statement->bind_param("i",  $id);
        $statement->execute();

        return $statement->affected_rows > 0;
    }
}
