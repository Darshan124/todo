
<html >
<head>

    <title>Document</title>

    <style>
        body{
            background: #3e94ec;
           margin: 40vh auto;
        }
        #resetpass{
            padding:10px;
        }
        .center{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }
        label{
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }
        #oldpass{
            margin: 10px;
            height: 35px;
            width: 250px;
            border-radius: 10px;
            border: none;

        }
        #newpass{
            margin: 10px;
            height: 35px;
            width: 250px;
            border-radius: 10px;
            border: none;
        }
        .btn{
            display: flex;
            align-items: center;
            justify-content: center;
           
        }
        button{
            border: none;
            cursor: pointer;
            border-radius: 10px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="center">
    <label for="oldpass">Old Password</label>
    <input type="password" name="Password" id="oldpass" placeholder="Enter Old Password">
</div>
<div class="center">
    <label for="newpass">New Password</label>
    <input type="password" name="Password" id="newpass" placeholder="Enter new Password">
</div>
<div class="btn">
    <button id="resetpass" onclick="location.href='./index.php'">log in</button>
    
    <button id="resetpass" onclick="changePassword()">Change Password</button>
</div>
    
    <script src="./forgot.js"></script>
</body>
</html>