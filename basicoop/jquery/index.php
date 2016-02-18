<!DOCTYPE html>
<html>
<head>
    <title>gerald</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery12.js"></script>


</head>
<body>
     <ul id="nav">
         <li><a href="index"> Home</a></li>
         <li><a href="about">About</a></li>
         <li><a href="contact">Contact</a></li>
     </ul>
<div id="content">
    <h1>Header</h1>
    Content
</div>
     <script>
        $(function() {
            $('ul#nav li a').click(function () {
                var $page = $(this).attr('href');

                $('#content').load('content/' + $page + '.php');
                return false;
            });
        });

     </script>
</body>

</html>