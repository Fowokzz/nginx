<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/main.css">

    <title>Server Status</title>
</head>

<body>

    <div id="wrapper">
        <h2 id="pageTitle">Server Hostname Information</h2>
        <div class="twoColRow">
            <div class="serverStats">
                <img src="/assets/server.jpg" alt="" class="icon">
                <h2 class="statsValue">
                    <?php $serverName = gethostname();
                    echo "$serverName"; ?>
                </h2>
            </div>
        </div>
        <p id="copyright">Made by: S.Ade Oluwole</p>
    </div>

</body>

</html>
