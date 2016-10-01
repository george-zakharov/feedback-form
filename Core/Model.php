<?php
namespace Core;

use Core\DbConnector;
use PDO;

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
     * Set information from feedback form to DB.
     *
     * @param $name
     * @param $number
     * @param $email
     * @param $note
     * @param $client
     */
    public static function setFeedback($name, $number, $email, $note, $client)
    {
        $stmt = namespace\DbConnector::getInstance()->getConnection()->prepare(
            'INSERT INTO `messages`
             SET `name` = :name,
             `telephone` = :number,
             `email` = :email,
             `note` = :note,
             `client` = :client'
        );
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':number', $number, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':note', $note, PDO::PARAM_STR);
        $stmt->bindParam(':client', $client, PDO::PARAM_STR);
        $stmt->execute();
    }
}