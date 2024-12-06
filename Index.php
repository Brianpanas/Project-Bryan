<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Toggle</title>
    <link rel="stylesheet" href="./Sample Page/CSS/index.css">
</head>
<body>

        <button
            id="darkModeToggleRB"
            onclick="controller_Btn_DarkMode()"
            title="Toggle light/dark mode"
            data-light-img="./src/sun.png"
            data-dark-img="./src/light-mode.png"
            style="background-image: url('./src/sun.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        </button>


    <div class="custom-button-RB" onclick="controller_Btn_ButtonRB()">
        <div class="button-text-RB">Click Me</div>
        <div class="button-icon-RB" style="background-image: url('./src/light-mode.png'); background-size: 30px;; background-position: center; background-repeat: no-repeat;">
        </div>
    </div>

    <div class="DashboardCardRB">
        <div class="cardRB">
            <div class="card-headerRB">
                <div class="card-titleRB">
                    <div class="card-logoRB" style="background-image: url('./src/light-mode.png');"></div>
                    <div  class="CardheaderRB">Card Dashboard 1</div>
                </div>
                <p class="card-header-descriptionRB">Frontend Development</p>
                <p class="card-header-descriptionRB2">Run baby run don't ever look back. They'll tear us apart if you give them a chance.</p>
            </div>
            <div class="card-progressRB">
                <div class="progress-barRB" style="width: 70%;"></div>
            </div>
            <div class="card-footerRB">
                <div class="card-dateRB">Dec 05</div>
                <div class="teamRB">
                    <img src="./src/ariel.jpg">
                    <img src="./src/bector.jpg">
                    <img src="./src/bry.jpg">
                </div>
            </div>
        </div>

        <div class="cardRB">
            <div class="card-headerRB">
                <div class="card-titleRB">
                    <div class="card-logoRB" style="background-image: url('./src/night-mode.png');"></div>
                    <div class="CardheaderRB">Card Dashboard 2</div>
                </div>
                <p class="card-header-descriptionRB">Design</p>
                <p class="card-header-descriptionRB2">Run baby run don't ever look back. They'll tear us apart if you give them a chance.</p>
            </div>
            <div class="card-progressRB">
                <div class="progress-barRB" style="width: 40%;"></div>
            </div>
            <div class="card-footerRB">
                <div class="card-dateRB">Nov 29</div>
                <div class="teamRB">
                    <img src="./src/rogie.jpg">
                    <img src="./src/oh2.jpg">
                    <img src="./src/os.jpg">
                </div>
            </div>
        </div>

        <!-- Add more here -->
    </div>

    </div>
    <script type="module" src="./ProjectBry/Scripts/Controller_Btn_DarkMode.js"></script>
    <script type="module"  src="./ProjectBry/Scripts/Controller_Btn_ButtonRB.js"></script>
</body>
</html>

