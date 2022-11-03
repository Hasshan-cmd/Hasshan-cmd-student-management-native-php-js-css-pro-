<html>
    <head>
        <title>Student Management System</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <div id="topBar">
            <a href="./modules/student/form.html" target="subWindow">Add New Student</a>
            <a href="./modules/student/table.php" target="subWindow">Show All Student</a>
        </div>
        <iframe name="subWindow" src="./modules/student/form.html"></iframe>
        <style>
            iframe{
                width: 100%;
                height: 800px;
                border: none;
            }

            #topBar{
                box-sizing: border-box;
                height: 50px;
                padding: 10px 15px;
                background-color: #5CDCCA;
            }

            #topBar a{
                color: aliceblue;
                text-decoration: none;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-weight: 600;
                display: inline-block;
                font-size: 16px;
                padding: 6px 12px;
                transition: all .2s ease-in;
                cursor: pointer;
            }
            #topBar a:hover{
                color: #888;
                transform: scale(1.02);
            }
        </style>
    </body>
</html>