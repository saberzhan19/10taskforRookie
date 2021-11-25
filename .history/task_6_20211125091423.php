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
        <style>
            .banned {
                opacity: .4;                
            }
        </style>
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
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php 

                                $users = [

                                    [
                                        "img"=> "img/demo/authors/sunny.png",
                                        "alt"=> "Sunny A.",
                                        "authors"=> "Sunny A. (UI/UX Expert)",
                                        "post"=> "Lead Author",
                                        "href"=> "https://twitter.com/@myplaneticket",
                                        "twitter"=> "@myplaneticket",
                                        "wrap"=> "https://wrapbootstrap.com/user/myorange",
                                        "title"=> "Contact Sunny",
                                        "active"=> "enable"
                                    ],
                                    [
                                        "img"=> "img/demo/authors/josh.png",
                                        "alt"=> "Jos K.",
                                        "authors"=> "Jos K. (ASP.NET Developer)",
                                        "post"=> "Partner &amp; Contributor",
                                        "href"=> "https://twitter.com/@atlantez",
                                        "twitter"=> "@atlantez",
                                        "wrap"=> "https://wrapbootstrap.com/user/Walapa",
                                        "title"=> "Contact Jos",
                                        "active"=> "enable"
                                    ],
                                    [
                                        "img"=> "img/demo/authors/jovanni.png",
                                        "alt"=> "Jovanni Lo",
                                        "authors"=> "Jovanni L. (PHP Developer)",
                                        "post"=> "Partner &amp; Contributor",
                                        "href"=> "https://twitter.com/@lodev09",
                                        "twitter"=> "@lodev09",
                                        "wrap"=> "https://wrapbootstrap.com/user/lodev09",
                                        "title"=> "Contact Jovanni",
                                        "active"=> ""
                                    ],
                                    [
                                        "img"=> "img/demo/authors/roberto.png",
                                        "alt"=> "Roberto R.",
                                        "authors"=> "Roberto R. (Rails Developer)",
                                        "post"=> "Partner &amp; Contributor",
                                        "href"=> "https://twitter.com/@sildur",
                                        "twitter"=> "@sildur",
                                        "wrap"=> "https://wrapbootstrap.com/user/sildur",
                                        "title"=> "Contact Roberto",
                                        "active"=> "disabl"
                                    ]

                                ];

                            ?>


                            

                            <?php foreach ($users as $user):?>   
                                                          
                                    <div class="<? echo $user["active"] == 'disabl' ? 'banned': '' ?>rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                        <img src="<? echo $user["img"]; ?> " alt="<? echo $user["alt"]; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                        <div class="ml-2 mr-3" >
                                            <h5 class="m-0" >                                                
                                            <? echo $user["authors"]; ?>
                                                <small class="m-0 fw-300">
                                                <? echo $user["post"]; ?>
                                                </small>
                                            </h5>
                                            <a href="<? echo $user["href"]; ?>" class="text-info fs-sm" target="_blank"><? echo $user["twitter"]; ?></a> -
                                            <a href="<? echo $user["wrap"]; ?>" class="text-info fs-sm" target="_blank" title="<? echo $user["title"]; ?>"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </div>
                            <?php endforeach;?>
                            
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
