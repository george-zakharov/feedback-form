/**
 * This file stores JQuery functions of the project.
 *
 * @package: feedback
 * @version: 1.0
 * @author: @author: wildwind | George Zakharov <george_zakharov@mail.ru>
*/

/**
 * This function helps to create mask on input field for telephone number.
 * Plugin: maskedinput.js
 */
$(document).ready(function () {
    $(function () {
        $("#inputNumber").mask("(999)999-99-99");
    });
});

/**
 * AJAX-request
 */
$(document).ready(function() {
    $("#feedbackForm").submit(function() {
        $.ajax({
            type: "POST",
            url: "Core/FormHandler.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            //alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
            $("#feedbackForm").trigger("reset");
            //window.location.replace("FormHandler.php");
            //location.reload();
        });
        return false;
    });
});