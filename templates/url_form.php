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
            padding-top: 60px; /* Add padding to ensure content is not covered by the top bar */
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
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: top 0.3s;
        }

        #top_form form {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 800px;
            margin: 0 20px;
        }

        #top_form input[type="text"] {
            width: 100%;
            max-width: 500px; /* Adjusted max width for better spacing */
            height: 40px;
            padding: 0 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        #top_form input[type="submit"],
        #top_form input[type="button"] {
            height: 40px;
            padding: 0 20px;
            border: none;
            background-color: #0056b3;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        #top_form input[type="submit"] {
            border-radius: 0 5px 5px 0;
        }

        #top_form input[type="button"] {
            margin-right: 10px; /* Add space between Home and text input */
            border-radius: 5px; /* Make Home button fully rounded */
        }

        #top_form input[type="submit"]:hover,
        #top_form input[type="button"]:hover {
            background-color: #003d80;
        }

        #toggle_button {
            position: fixed;
            top: 110px; /* Adjusted to be below the "Go" button */
            right: 20px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            z-index: 2100000001;
        }

        #toggle_button:hover {
            background-color: #0056b3;
        }

        .arrow-icon {
            width: 20px;
            height: 20px;
            display: inline-block;
            background-color: white;
            mask: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEgMTRMMTQuMTAxMSAxTTEgMUwxNCAxNE0xIDEiIHN0cm9rZT0iIzAwN0JGNiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KPC9zdmc+Cg==') center / contain no-repeat;
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

        function toggleTopForm() {
            var topForm = document.getElementById("top_form");
            var toggleButton = document.getElementById("toggle_button");
            if (topForm.style.top === "0px" || topForm.style.top === "") {
                topForm.style.top = "-70px";
                toggleButton.style.top = "10px"; // Keep the button visible
            } else {
                topForm.style.top = "0px";
                toggleButton.style.top = "110px"; // Place the button below the "Go" button
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Initialize topForm position
            var topForm = document.getElementById("top_form");
            topForm.style.top = "0px";

            // Initialize toggleButton position
            var toggleButton = document.getElementById("toggle_button");
            toggleButton.style.top = "110px";
        });
    </script>
</head>
<body>

<div id="top_form">
    <form method="post" action="index.php" target="_top">
        <input type="button" value="Home" onclick="window.location.href='index.php'">
        <input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off" placeholder="Enter URL here...">
        <input type="hidden" name="form" value="1">
        <input type="submit" value="Go">
    </form>
</div>

<button id="toggle_button" type="button" onclick="toggleTopForm()">
    <span class="arrow-icon"></span>
</button>

<script type="text/javascript">
    smart_select(document.getElementsByName("url")[0]);
</script>

</body>
</html>

