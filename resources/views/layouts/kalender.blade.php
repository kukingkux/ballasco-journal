<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/kalender.css" />
</head>

<body>

        <div class="mt-4 container-calendar p-2" style="box-shadow: 0px 0px 15px -10px rgba(0, 0, 0, 0.75); background-color: #fff">
            <header>
                <p class="current-date">Agustus 2023</p>
                <div class="icons">
                    <span id="prev" class="material-symbols-outlined">
                        chevron_left
                    </span>
                    <span id="next" class="material-symbols-outlined">
                        chevron_right
                    </span>
                </div>
            </header>
            <div class="calendar">
                <ul class="weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>

                <ul class="days mb-2"></ul>
            </div>
        </div>


    <script src="js/kalender.js"></script>
</body>
