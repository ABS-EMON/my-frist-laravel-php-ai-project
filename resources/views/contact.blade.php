<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        ul {
            list-style: none;
            background: #333;
            padding: 10px;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        ul li {
            margin: 0 20px;
        }

        ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        ul li a:hover {
            color: yellow;
        }

        marquee h1 {
            color: crimson;
            text-align: center;
        }

        .contact-container {
            padding: 30px;
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .contact-container h1 {
            color: #2c3e50;
        }

        .contact-container p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <ul>
        <li><a href="https://my-frist-lp-ai-project.test">Home</a></li>
        <li><a href="https://my-frist-lp-ai-project.test/about">About</a></li>
        <li><a href="https://my-frist-lp-ai-project.test/contact">Contact</a></li>
        <li><a href="https://my-frist-lp-ai-project.test/blogs">Contact</a></li>
    </ul>

    <!-- Marquee -->
    <marquee><h1>This is Contact Page</h1></marquee>

    <!-- Contact Content -->
    <div class="contact-container">
        <h1>{{ $title }}</h1>
        <p><strong>Phone:</strong> 01518979969</p>
        <p><strong>Email:</strong> {{ $email }}</p>
    </div>

</body>
</html>
