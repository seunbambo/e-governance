<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .input-icons i {
            position: absolute;
        }

        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }

        .icon {
            padding: 10px;
            color: green;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        h2 {
            color: green;
        }
    </style>
</head>

<body>
    <center>
        <form style="max-width:450px;margin:auto">
            <h2>GeeksforGeeks</h2>
            <div class="input-icons">
                <i class="fa fa-user icon">
                </i>
                <input class="input-field" type="text" placeholder="Username">
            </div>

            <div class="input-icons">
                <i class="fa fa-envelope icon">
                </i>
                <input class="input-field" type="text" placeholder="Email">
            </div>

            <div class="input-icons">
                <i class="fa fa-key icon">
                </i>
                <input class="input-field" type="password" placeholder="Password">
            </div>
        </form>
    </center>
</body>

</html>