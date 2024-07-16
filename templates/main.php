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
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #0033a0;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header nav {
            margin-top: 10px;
        }

        header nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 14px;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 120px);
            text-align: center;
        }

        .content h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .content form {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }

        .content input[type="text"] {
            width: calc(100% - 90px);
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .content input[type="submit"] {
            padding: 15px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 16px;
        }

        .content input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #0033a0;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #error {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1>ProxyMan</h1>
        <nav>
            <a href="#">Products</a>
            <a href="#">Pricing</a>
            <a href="#">Blog</a>
            <a href="#">FAQs</a>
            <a href="#">Resources</a>
        </nav>
    </div>
</header>

<div class="content">
    <h2>Free Web Proxy</h2>
    <p>Browse any website fast & anonymously.</p>

    <?php if(isset($error_msg)){ ?>
    <div id="error">
        <p><?php echo strip_tags($error_msg); ?></p>
    </div>
    <?php } ?>

    <form action="index.php" method="post">
        <input name="url" type="text" autocomplete="off" placeholder="http://">
        <input type="submit" value="Browse">
    </form>
</div>

<footer>
    <p>Powered by <a href="//komodomain/" target="_blank" style="color: white; text-decoration: none;">ProxyMan</a> <?php echo $version; ?></p>
</footer>

<script type="text/javascript">
    document.getElementsByName("url")[0].focus();
</script>

</body>
</html>

