<?php
class HomeModel extends BaseModel {

    public function getLastPoems(int $maxCount) : array {
        $statement = self::$db->query(
            "SELECT p.id, p.title, LEFT(p.TEXT, 85) AS preview, p.TEXT AS text FROM poems AS p order by id desc limit " .$maxCount);

        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getFavPoems(string $isFav) : array {
        $statement = self::$db->query(
            "SELECT p.id, p.title, LEFT(p.TEXT, 85) AS preview, p.TEXT AS text FROM poems as p WHERE is_fav like 'Y'");

        return $statement->fetch_all(MYSQLI_ASSOC);
    }

}