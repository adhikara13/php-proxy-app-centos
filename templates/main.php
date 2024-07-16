<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Web Proxy from ProxyMan</title>
    <meta name="generator" content="php-proxy.com">
    <meta name="version" content="<?=$version;?>">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        #container {
            background-color: #fff;
            padding: 30px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        #frm {
            margin-top: 20px;
        }

        #frm input[type="text"] {
            width: calc(100% - 90px);
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #frm input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        #frm input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #error {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }

        #footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
        }

        #footer a {
            color: #007bff;
            text-decoration: none;
        }

        #footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div id="container">
    <h1 style="color: #007bff;">Free Web Proxy by ProxyMan</h1>

    <?php if(isset($error_msg)){ ?>
    <div id="error">
        <p><?php echo strip_tags($error_msg); ?></p>
    </div>
    <?php } ?>

    <div id="frm">
        <form action="index.php" method="post" style="margin-bottom:0;">
            <input name="url" type="text" autocomplete="off" placeholder="http://">
            <input type="submit" value="Go">
        </form>

        <script type="text/javascript">
            document.getElementsByName("url")[0].focus();
        </script>
    </div>
</div>

<div id="footer">
    Powered by <a href="//komodomain/" target="_blank">ProxyMan</a> <?php echo $version; ?>
</div>

</body>
</html>
