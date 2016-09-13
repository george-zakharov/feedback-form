<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Form</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom main stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome stylesheet TODO: Delete if there is no use -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <!-- Header text -->
    <h1 class="page-header text-center">Feedback Form</h1>
    <!-- Content starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <!-- Success message -->
                <div class="col-sm-10 col-sm-offset-2 alert alert-success hidden" role="alert" id="successMessage">
                    <strong>Внимание!</strong> Ваше сообщение успешно отправлено.
                </div>
                <!-- Error message -->
                <div id="error" class="col-sm-10 col-sm-offset-2" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;"></div>
                <!-- Form starts -->
                <form class="form-horizontal" role="form" id="feedbackForm">
                    <!-- Name input -->
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Имя*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="inputName" required placeholder="Фамилия Имя Отчество">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Telephone number input -->
                    <div class="form-group">
                        <label for="inputNumber" class="col-sm-2 control-label">Номер*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNumber" name="inputNumber" required placeholder="(___)___-__-__">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- E-mail input -->
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Почта</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="you@mail.ru">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Comments input -->
                    <div class="form-group">
                        <label for="inputNotes" class="col-sm-2 control-label">Комментарий</label>
                        <div class="col-sm-10">
                            <textarea name="notes" class="form-control" id="inputNotes" cols="30" rows="10" placeholder="Ваши комментарии (не более 1000 символов)"></textarea>
                        </div>
                    </div>
                    <!-- Comments input -->
                    <div class="form-group">
                        <label for="isClient" class="col-sm-2 control-label">Клиент*</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="isClient" name="isClient">
                                <option>Да</option>
                                <option>Нет</option>
                            </select>
                        </div>
                    </div>
                    <!-- Terms Agree -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked"> Я согласен с условиями Пользовательского Соглашения*
                                    <span class="glyphicon form-control-feedback"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Send feedback -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success pull-right">Отправить</button>
                        </div>
                    </div>
                    <!-- Conditions -->
                    <div class="col-sm-offset-2 col-sm-10">
                        <hr>
                        <em>* поля, обязательные к заполнению</em>
                    </div>
                </form>
                <!-- Form ends -->
            </div>
        </div>
    </div>
    <!-- Content ends -->

    <!-- JQuery script -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap script -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Masked Input JQuery plugin -->
    <script src="js/maskedinput.js"></script>
    <!-- JQuery validation plugin TODO: Delete if no use -->
    <script src="js/jquery.validate.min.js"></script>
    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>