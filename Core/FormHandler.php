<?php
require 'Model.php';

/**
 * Form handler controller.
 * This controller gets data from AJAX-request and sends to DB.
 *
 * @package: feedback
 * @version: 1.0
 * @author: wildwind | George Zakharov <george_zakharov@mail.ru>
*/
class FormHandler {
    /**
     * User name.
     * @var string
     */
    private $name;

    /**
     * Telephone number of the user.
     * @var string
     */
    private $number;

    /**
     * Email of the user.
     * @var string
     */
    private $email;

    /**
     * Message send by the user.
     * @var string
     */
    private $note;

    /**
     * Control if the user is our client.
     * @var string
     */
    private $isClient;

    /**
     * Marks if the data was taken from AJAX-request.
     * @var bool|false
     */
    private $gotData = false;


    /**
     * FormHandler constructor.
     * It gets POST input from AJAX-request and sets it to private properties.
     * At the end it calls setDataToDb() method.
     * @see setDataToDb
     */
    public function __construct() {
        if ($_POST['inputName']
            && $_POST['inputNumber']
            && $_POST['inputEmail']
            && $_POST['notes']
            && $_POST['isClient']
        ) {
            $this->name = $_POST['inputName'];
            $this->number = $_POST['inputNumber'];
            $this->email = $_POST['inputEmail'];
            $this->note = $_POST['notes'];
            $this->isClient = $_POST['isClient'];
            $this->gotData = true;
        }
        $this->setDataToDb();
    }

    /**
     * Call model to set data to DB.
     */
    private function setDataToDb() {
        if ($this->gotData === true) {
            Model::setFeedback($this->name, $this->number, $this->email, $this->note, $this->isClient);
        }
    }
}

$formHandler = new FormHandler();