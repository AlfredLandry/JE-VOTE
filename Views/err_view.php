<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <link rel="stylesheet" type="text/css" href="Asset/styles/monstyle/404_err.css">
</head>
<body>

<div id="container">

    <div class="content">

        <h2>404</h2>
        <h4>Page Not Found</h4>
        <p>That page not found on that site.</p>
        <a href="#">GET HOME PAGE</a>

    </div>

</div>


<script type="text/javascript">

    let container = document.getElementById('container');
    window.onmousemove = function (e) {

        let x = - e.clientX /5,
            y = - e.clientY /5;
        container.style.backgroundPositionX = x + 'px';
        container.style.backgroundPositionY = y + 'px';

    }

</script>

</body>
</html>