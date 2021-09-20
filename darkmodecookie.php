<!-- Implementação Dark Mode utilizando cookies - PHP e JavaScript -->

<?php

$themeClass = '';
if (!empty($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] == 'dark') {
        $themeClass = 'dark-theme';
    } else if ($_COOKIE['theme'] == 'light') {
        $themeClass = 'light-theme';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="darkMode.png">
    <link rel="stylesheet" href="darkMode.css">
    <title>Dark Mode</title>
</head>
<body class="<?php echo $themeClass ?>">

    <button class="btn-toggle">Toggle Dark-Mode</button>
    <h1>Hey there! This is just a title</h1>
    <p>I am just a boring text, existing here solely for the purpose of this demo</p>
    <p>And I am just another one like the one above me, because two is better than having only one</p>

    <script>
        const btn = document.querySelector(".btn-toggle");
        const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

        btn.addEventListener("click", function() {
            if (prefersDarkScheme.matches) {
                document.body.classList.toggle("light-theme");
                var theme = document.body.classList.contains("light-theme") ? "light" : "dark";
            } else {
                document.body.classList.toggle("dark-theme");
                var theme = document.body.classList.contains("dark-theme") ? "dark" : "light";
            }
            document.cookie = "theme" + theme;
        });
    </script>
</body>
</html>
