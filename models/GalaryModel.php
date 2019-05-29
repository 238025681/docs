<?php
class GalaryModel extends BaseModel {

    public function getLastPoems(int $maxCount) : array {
        $statement = self::$db->query(
            "SELECT p.id, p.title, LEFT(p.TEXT, 85) AS preview, p.TEXT AS text FROM poems AS p order by id desc limit " .$maxCount);

        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllPoemsByPeriod(int $period) : array {
        $statement = self::$db->query(
            "SELECT p.id, p.title, LEFT(p.TEXT, 85) AS preview, p.TEXT AS text FROM poems AS p WHERE period = " .$period. " order by id desc");

        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getAll() : array {
        $statement = self::$db->query(
            "SELECT p.id, p.title, LEFT(p.TEXT, 85) AS preview, p.TEXT AS text FROM poems AS p ORDER BY id desc");

        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}