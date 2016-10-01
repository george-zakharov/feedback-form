<?php
require 'DbConnector.php';

/**
 * Class Model.
 * Perform the operations with DB.
 *
 * @package: feedback
 * @version: 1.0
 * @author: wildwind | George Zakharov <george_zakharov@mail.ru>
 */
class Model
{
    /**
     * Set new node to the tree.
     * If $parent_name is `null` and $new_node_name is provided, a new root node sets.
     * @param null $parent_name
     * @param $new_node_name
     * @throws Exception
     */
    public static function setNode($parent_name = null, $new_node_name)
    {
        if ($parent_name === null) {
            $stmt = DbConnector::getInstance()->getConnection()->prepare(
                'SELECT MIN(level) as level, MAX(right_key) as right_key 
                 FROM nodes'
            );
        } elseif (is_string($parent_name)) {
            $stmt = DbConnector::getInstance()->getConnection()->prepare(
                'SELECT level, right_key 
                 FROM nodes 
                 WHERE name = ?'
            );
        } else {
            throw new Exception('Need string or null in $parent_name');
        }
        $stmt->execute(array($parent_name));
        $position = $stmt->fetchAll();
        $level = $position[0]['level'];
        $right_key = $position[0]['right_key'];

        if (isset($new_node_name) && $parent_name === null) {
            $stmt = DbConnector::getInstance()->getConnection()->prepare(
                'INSERT INTO nodes 
                 SET left_key = :right_key + 1, right_key = :right_key + 2, level = :level, name = :name'
            );
        } elseif (isset($new_node_name) && is_string($parent_name)) {
            $stmt = DbConnector::getInstance()->getConnection()->prepare(
                'UPDATE nodes 
                 SET right_key = right_key + 2, left_key = IF(left_key > :right_key, left_key + 2, left_key) 
                 WHERE right_key >= :right_key;
                 INSERT INTO nodes 
                 SET left_key = :right_key, right_key = :right_key + 1, level = :level + 1, name = :name'
            );
        } else {
            throw new Exception('Need name of the new node in $new_node_name');
        }
        $stmt->bindParam(':level', $level, PDO::PARAM_INT);
        $stmt->bindParam(':right_key', $right_key, PDO::PARAM_INT);
        $stmt->bindParam(':name', $new_node_name, PDO::PARAM_STR);
        $stmt->execute();
    }
}