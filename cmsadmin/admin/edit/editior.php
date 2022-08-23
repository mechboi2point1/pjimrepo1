<html>

<head>

</head>

<body>
    <div id="gjs"></div>
</body>
<link rel="stylesheet" href="./grep/my.css">
<script src="./grep/my.js"></script>
<script type="text/javascript">
    var editor = grapesjs.init({
        container: "#gjs",
        components: '<div class="txt-red">Hello world!</div>',
        style: '.txt-red{color: red}',
    });
</script>

</html>