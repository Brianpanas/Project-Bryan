<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Toggle</title>
    <link rel="stylesheet" href="ProjectBry/CSS/PBStyle.css">
</head>
<body>

    <div class="containerRB">
        <button
            id="darkModeToggleRB"
            onclick="controller_Btn_DarkMode()"
            title="Toggle light/dark mode"
            data-light-img="../../src/light-mode.png"
            data-dark-img="../../src/night-mode.png"
            style="background-image: url('../../src/light-mode.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        </button>
        
    </div>
    <script type="module" src="./ProjectBry/Scripts/Controller_Btn_DarkMode.js"></script>
</body>
</html>

