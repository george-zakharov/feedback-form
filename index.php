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
</head>
<body>
    <!-- Header text -->
    <h1 class="page-header text-center">Feedback Form</h1>
    <!-- Content starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <!-- Form starts -->
                <form class="form-horizontal" role="form">
                    <!-- Name input -->
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Имя</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Фамилия Имя Отчество">
                        </div>
                    </div>
                    <!-- Telephone number input -->
                    <div class="form-group">
                        <label for="inputNumber" class="col-sm-2 control-label">Номер</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNumber" placeholder="(___) ___-__-__">
                        </div>
                    </div>
                    <!-- E-mail input -->
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Почта</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="you@mail.ru">
                        </div>
                    </div>
                    <!-- Comments input -->
                    <div class="form-group">
                        <label for="inputNotes" class="col-sm-2 control-label">Комментарии</label>
                        <div class="col-sm-10">
                            <textarea name="notes" class="form-control" id="inputNotes" cols="30" rows="10" placeholder="Ваши комментарии"></textarea>
                        </div>
                    </div>
                    <!-- Comments input -->
                    <div class="form-group">
                        <label for="isClient" class="col-sm-2 control-label">Клиент</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="isClient">
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
                                    <input type="checkbox" checked> Я согласен с условиями Пользовательского Соглашения
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Send feedback -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Отправить</button>
                        </div>
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
    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>