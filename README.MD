# Feedback form project #
This form takes the users input data and place it to the __Database__.

## File structure ##

### index.php ###
This is the entry point of the application.
It consists of html layout with feedback form inside.

### core/DbConnector.php ###
* Provides connection to __Database__ via singleton pattern.
* Parameters for connection stores in properties of the class _DbConnector_:
    * `$host` for host name,
    * `$db_name` for name of the __Database__,
    * `$user` for login,
    * `$pass` for password.
* Main methods are:
    * `getInstance()` for class _DbConnector_,
    * `getConnection()` for _PDO Object_.
    
### core/Model.php ###

* This file store class _Model_ to perform the operations with DB.
* Main method is:
    * `setFeedback()` to insert new data to __Database__.
    
### core/FormHandler.php ###
* This method gets data from __index.php__ by AJAX request in __js/main.js__ and sets it to __Database__.
* Parameters are:
    * `$name` for user's name,
    * `$number` for user's telephone number,
    * `$email` for user's email address,
    * `$note` for user's message,
    * `$isClient` to check if the user belongs to company's clients or not,
    * `$gotData` to mark if all the date was given with AJAX request.
* Main methods are:
    * `__construct()` for setting values for properties of the class from POST request via AJAX,
    * `setDataToDb()` for setting data to __Database__ by __Model.php__.
    
### feedback.sql ###
This is the dump of the tables of my local `feedback` __Database__.
It is partly filled for example.

## Database structure ##
There is only one table named _messages_.
It consists of columns:
* `id` to store unique id of the certain feedback. This parameter is set to _auto increment_,
* `name` to store user's name,
* `telephone` to store user's telephone number,
* `email` to store user's email address,
* `note` to store user's message,
* `client` to store mark if user is client of company or not.

## css/bootstrap.min.css ##
__Bootstrap__ file for html layout.

## css/font-awesome.min.css ##
__Font Awesome__ file for html layout.

## css/main.css ##
Main stylesheet for custom style.

## fonts/... ##
This directory stores fonts for project.

## js/bootstrap.min.js ##
__Bootstrap__ file for dynamic html layout.

## js/jquery.validate.min.js ##
__JQuery__ file for form validation.

## js/jquery-3.1.0.min.js ##
__JQuery__ file for dynamic layout and AJAX support.

## js/main.js ##
__JQuery__ file with custom functions:
* for masked input of telephone number,
* for AJAX request.

## js/maskedinput.js ##
__JQuery__ file for supporting of masked input.