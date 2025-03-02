<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Toggle</title>
    <link rel="stylesheet" href="./Sample Page/CSS/index.css">
</head>
<body>

        <!-- Dark mode -->
        <button
            id="darkModeToggleRB"
            onclick="controller_Btn_DarkMode()"
            title="Toggle light/dark mode"
            data-light-img="./src/sun.png"
            data-dark-img="./src/light-mode.png"
            style="background-image: url('./src/sun.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        </button>
        <!-- Dark mode -->

    <!-- custom-button-RB -->
    <div class="custom-button-RB" onclick="controller_Btn_ButtonRB()">
        <div class="button-text-RB">Click Me</div>
        <div class="button-icon-RB" style="background-image: url('./src/light-mode.png'); background-size: 30px;; background-position: center; background-repeat: no-repeat;">
        </div>
    </div>
    <!-- custom-button-RB -->

    <!-- DashboardCardRB -->
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
    <!-- DashboardCardRB -->

    <!-- Angled Breadcrumb Navigation -->
    <ul class="rb-breadcrumb">
        <!-- HOME breadcrumb item -->
        <li><a href="#"><span>Home</span></a></li>

        <!-- ABOUT US breadcrumb item -->
        <li><a href="#"><span>About Us</span></a></li>

        <!-- PRODUCT breadcrumb item -->
        <li><a href="#"><span>Product</span></a></li>

        <!-- SERVICES breadcrumb item -->
        <li><a href="#"><span>Services</span></a></li>

        <!-- CONTACT breadcrumb item, marked as the current page -->
        <li class="current"><a href="#"><span>Contact</span></a></li>
    </ul>
    <!-- Angled Breadcrumb Navigation -->

    <!-- RBTP-tabs -->
    <div class="RBTP-tab-container">
        <div class="RBTP-tabs">
            <button class="RBTP-tab active" onclick="controller_Tab_Switch(0)">Home</button>
            <button class="RBTP-tab" onclick="controller_Tab_Switch(1)">About</button>
            <button class="RBTP-tab" onclick="controller_Tab_Switch(2)">Services</button>
            <button class="RBTP-tab" onclick="controller_Tab_Switch(3)">Contact</button>
        </div>
        
        <div class="RBTP-content active">Welcome to our website!</div>
        <div class="RBTP-content">This page provides information about our company and mission.</div>
        <div class="RBTP-content">Our services include web development, design, and consulting.</div>
        <div class="RBTP-content">Contact us at example@email.com</div>
    </div>
    <!-- RBTP-tabs -->



    </div>
    <script type="module" src="./ProjectBry/Scripts/Controller_Btn_DarkMode.js"></script>
    <script type="module"  src="./ProjectBry/Scripts/Controller_Btn_ButtonRB.js"></script>
    <!-- RBTP-tabs JS -->
    <script type="module" src="./ProjectBry/Scripts/Controller_Tab_Switch.js"></script>
    <!-- RBTP-tabs JS -->
</body>
</html>

