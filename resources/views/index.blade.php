<!DOCTYPE html>
<html lang="en"  ng-app="bookWishlistApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>P2P Library</title>

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/lodash/dist/lodash.min.js"></script>
    <script src="bower_components/angular-route/angular-route.min.js"></script>
    <script src="bower_components/angular-local-storage/dist/angular-local-storage.min.js"></script>
    <script src="bower_components/restangular/dist/restangular.min.js"></script>

    <script src="js/app.js"></script>
    <script src="js/controllers.js"></script>
    <script src="js/services.js"></script>

    <style>

        li {
            padding-bottom: 8px;
        }
        .indexBookItem {
            text-align: center;
            font-size: 13px;
            height: 240px;
        }
        .my_book_cover {
            height: 160px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .my_book_cover img {
            border: 1px solid #eee;
        }

    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>P2P Library Application</h1>
        </div>
    </div>

    <div ng-view></div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>