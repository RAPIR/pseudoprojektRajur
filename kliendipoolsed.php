<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

</head>
<body>

<!-- link--->
<script language="javascript">
    function myFunction() {
        alert("Tere maailm!");
    }
</script>
<!-- alert-->

<button onclick="myFunction()">Tere maailm!</button>
<br>

<a href="http://www.khk.ee" onclick="alert('Tere maailm!')">Tere maailm!</a>
<br>
<a href onclick="alert('jääme siia')">jääme siia</a>
<br>

<!--Kassipilt koerapildiks jQuery-->
<img alt="" src="img/cat.jpg" style="height: 185px; width: 198px" id= "pilt" />

<script>
    $("img[src='img/cat.jpg']").click(function () {
        $(this).attr("src","img/cute.dog.jpg")
    })
</script>

<!--Muuda taustapilti nuppudega-->

<button class="varv" id="Red">Red</button>
<button class="varv" id="Green">Green</button>
<button class="varv" id="Blue">Blue</button>

<script>
    $(".varv").click(function() {
        var element = $(this);
        $("body").css("background-color", element.text());
    });
</script>

</body>
</html>