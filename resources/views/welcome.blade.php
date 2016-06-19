<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.auth0.com/js/lock-9.1.min.js"></script>
        <script type="text/javascript">

          var lock = new Auth0Lock('PATkFym2gZQS3lEIUCS68qrSl8jgVD7P', 'unicodeveloper.auth0.com');


          function signin() {
            lock.show({
                callbackURL: 'http://laravel-auth0.dev/auth0/callback'
              , responseType: 'code'
              , authParams: {
                scope: 'openid email'  // Learn about scopes: https://auth0.com/docs/scopes
              }
            });
          }
        </script>


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <button class="btn btn-info" onclick="window.signin();">Login</button>
            </div>
        </div>
    </body>
</html>
