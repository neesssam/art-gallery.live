<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[art-gallery]</title>
    <meta name="description" content="an nyc-based digital art gallery" />
    <meta name="keywords" content="art gallery, art, NYC, NYC artists" />
    <meta name="author" content="neessam" />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo3.css') }}">
    <script>
        document.documentElement.className="js";
        var supportsCssVars = function () {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }",
                document.head.appendChild(t),
                e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")),
                t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: Helvetica,serif;
            color: #ffffff;
            text-align: center;
        }
        .container {
            padding: 50px;
            position: relative;
            z-index: 2;
        }
        h1 {
            font-size: 60px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 40px;
        }
        a {
            font-size: 24px;
            color: #ffffff;
            text-decoration: none;
            border: 2px solid #ffffff;
            padding: 10px 20px;
            display: inline-block;
        }
        a:hover {
            font-weight: bold;
        }
        .content--canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px;
            background-color: #ffffff;
            display: flex;
            justify-content: space-between;
            font-size: 12px;
        }
        footer p {
            margin: 0;
            padding: 0 20px;
        }
    </style>
</head>
<body class="demo-3">
<main>
    <div class="content content--canvas"></div>
    <div class="container">
        <h1>[art-gallery] newyork</h1>
        <p>welcome to our digital art gallery. we showcase the finest talents in nyc through the web, because we can't afford a physical location. explore the work of our featured artists and find out how you can get involved.</p>
        <a href="exhibit.html">view art</a>
    </div>
</main>
<footer>
    <p>concept + design + code: neessam</p>
    <p>new york : 2024 ©</p>
</footer>
<script src="{{ asset('js/noise.min.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<script src="{{ asset('js/shift.js') }}"></script>
</body>
</html>
