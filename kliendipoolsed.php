<!DOCTYPE>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="theme.css">
            <title></title>
            <script language="javascript">
                function myFunction() {
                    alert("Tere maailm!");
                }

            </script>
                <script>
                function dogFunction() {

                    if (document.getElementById("pilt").src = "img/cat.jpg")
                    {
                        document.getElementById("pilt").src = "img/cute.dog.jpg";
                    }

                }


            </script>
        </head>
        <body>
        <button onclick="myFunction()">Tere maailm!</button>
        <br>
            <a href="http://www.khk.ee" onclick="alert('Tere maailm!')">Tere maailm!</a>
        <br>
            <a href onclick="alert('jääme siia')">jääme siia</a>
        <br>

            <!--pilt-->
        <img alt="" src="img/cat.jpg" style="height: 185px; width: 198px" id= "pilt" onclick="dogFunction()" />

        </body>
    </html>