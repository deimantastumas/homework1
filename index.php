<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>A Pen by  Deimantas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="programa">
    <div class="container">
        <div id="console">
            <div id="block">
                <div class="circle" id="one"></div>
                <div class="circle" id="two"></div>
                <div class="circle" id="three"></div>
            </div>
            <div id="laukas">
                <div id="filler"></div>
                <div id="commandline">
                    <p id="username">[Computer-MBP:~ computername$: </p>
                    <form id="write" onsubmit="return false">
                        <input id="focus" type="text" name="input" autocomplete="off">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="tekstas">
        <h1 style="color:#00cec9;">Instrukcija</h1>
        <p>"<b><span style="color:#00cec9;">clear</span></b>" - išvalo konsolę</p>
        <p>"<b><span style="color:#00cec9;">favourite</span></b> <i>[skaičius]</i>" - išpildo __isset(), __unset(), __get(), __set(), __destruct() metodus</p>
        <p>"<b><span style="color:#00cec9;">robot create</span></b> <i>[vardas1] [vardas2] [...]</i>" - išpildo __construct() metodą</p>
        <p>"<b><span style="color:#00cec9;">robot</span></b> <i>[eat/walk]</i>" - išpildo __call() metodą, kai veiksmas nežinomas, t.y. ne eat, arba ne walk</p>
        <p>"<b><span style="color:#00cec9;">robot random</span></b> <i>[max skaičius]</i>" - išpildo __invoke() metodą</p>
        <p>"<b><span style="color:#00cec9;">system increase</span></b>" - išpildo __callStatic() metodą</p>
        <p>"<b><span style="color:#00cec9;">account</span></b> <i>[vardas] [slaptažodis]</i>" - išpildo __sleep(), __wakeup(), __toString() metodus</p>
        <p>"<b><span style="color:#00cec9;">setstate</span></b>" - išpildo __set_state() metodą</p>
        <p>"<b><span style="color:#00cec9;">create-update</span></b>" - išpildo __clone() metodą</p>
        <p>"<b><span style="color:#00cec9;">debug-info</span></b>" - išpildo __debugInfo() metodą</p>

    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script  src="js/index.js"></script>
</body>

</html>
