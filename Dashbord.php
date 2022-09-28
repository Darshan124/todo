<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- fontAwsome Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Mes styles-->
    <link rel="stylesheet" href="./style2.css">
</head>

<body>

    <!-- My Side Barre -->
    <div class="sideBarre">

        <div class="sideBarre__logo">

            <h1>DASHBOARD</h1>
        </div>

        <!--slider main part-->
        <div class="sideBarre__menu">

            <div class="getTime">
                <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
            </div>
            <!-- live_Weather-->
            <div class="main_weather">
                <h1 class="w_hadding">Live Weather</h1>
                <img src="./summer.gif">    

                <h2 id="temperature"></h2>
                <h2 id="description"></h2>
                <p id="location"></p>

            </div>
            <div class="getgif">
                <img id="image" src="./hell-yeah.gif" /> <!-- --------------------------------------------------------------->
            </div>

        </div>

    </div>

    <!-- My Main Content -->
    <div class="mainContent">
        <nav>
            <button class="log_out" onclick="location.href='./index.php'">Log-out</button>
            <div class="user" onclick="location.href='./profile.php'">
                <i class="fa-solid fa-user"></i>
            </div>
        </nav>
        <div class="main_D">

            <H1 class="task1">Task Reminder</H1>

            <div class="wrapper">
                <div class="task-input">

                    <input type="text" placeholder="Add a New Task ">


                </div>
                <div class="btndiv">
                    <button class="taskbtn"> Add_Task </button>
                </div>
                <div class="controls">
                    <div class="filters">
                        <span class="active" id="all">All</span>
                        <span id="pending">Pending</span>
                        <span id="completed">Completed</span>
                    </div>
                </div>


                <ul class="task-box"></ul>
                <div class="deletall">
                    <button class="clear-btn">Clear All</button>
                </div>

            </div>

        </div>

    </div>
    <script src="./Dashbord.js"></script>
</body>

</html>