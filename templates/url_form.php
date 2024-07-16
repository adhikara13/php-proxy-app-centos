<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Proxy</title>
    <meta name="generator" content="php-proxy.com">
    <meta name="version" content="<?=$version;?>">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        #top_form {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            margin: 0;
            z-index: 2100000000;
            background: #007bff;
            border-bottom: 1px solid #0056b3;
            height: 50px;
            line-height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #top_form input[type="text"] {
            width: 550px;
            height: 35px;
            padding: 5px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #top_form input[type="submit"],
        #top_form input[type="button"] {
            padding: 10px 20px;
            border: none;
            background-color: #0056b3;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        #top_form input[type="submit"]:hover,
        #top_form input[type="button"]:hover {
            background-color: #003d80;
        }
    </style>

    <script>
        var url_text_selected = false;

        function smart_select(ele) {
            ele.onblur = function() {
                url_text_selected = false;
            };

            ele.onclick = function() {
                if (url_text_selected == false) {
                    this.focus();
                    this.select();
                    url_text_selected = true;
                }
            };
        }
    </script>
</head>
<body>

<div id="top_form">
    <form method="post" action="index.php" target="_top" style="margin:0; padding:0; display: flex; align-items: center;">
        <input type="button" value="Home" onclick="window.location.href='index.php'">
        <input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
        <input type="hidden" name="form" value="1">
        <input type="submit" value="Go">
    </form>
</div>

<script type="text/javascript">
    smart_select(document.getElementsByName("url")[0]);
</script>

</body>
</html>
