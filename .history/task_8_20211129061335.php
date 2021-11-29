<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $rows = [
                                                [
                                                    "num" => "1",
                                                    "name"=> "Mark",
                                                    "surname"=> "Otto",
                                                    "adres"=> "@mdo",
                                                    "show"=> "show.php?id=5",
                                                    "info"=> "btn btn-info",
                                                    "redact"=> "Редактировать",
                                                    "edit"=> "edit.php?id=5",
                                                    "warning"=> "btn btn-warning",
                                                    "change"=>
                                                    "delete"=> "delete.php?id=5",
                                                    "danger"=> "btn btn-danger",
                                                ]
                                            ];

                                        ?>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry the Bird</td>
                                            <td> Bird</td>
                                            <td>@twitter</td>
                                            <td>
                                                <a href="show.php?id=" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
