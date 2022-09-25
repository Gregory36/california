<!DOCTYPE html>
<html>
<head>
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">
    <!-- Шрифты -->

    <meta charset="UTF-8">
    <link rel="icon" href="source/icon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/regStyle.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <header>
            <div id="logo">CALIFORNIA</div>
            <nav>
               
            </nav>
            <div id="back">
                <a href="index.html">back</a>
            </div>
        </header>
        <main>
            <h2 id="text_auth">Registration</h2>
            <section class="auth_section">
                <form class="auth_section" action="check.php" method="post">
                <div class="textbox">
                    <input name="name" type="text" placeholder="name">
                </div>
                <div class="textbox">
                    <input name="login" type="text" placeholder="login">
                </div>
                <div class="textbox">
                    <input name="password" type="password" placeholder="password">
                </div>
                <button class="btn_sign_in" type="submit">Sign in</button>
                </form>
            </section>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>