<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
     <!-- AOS JS -->
     <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        li {
            list-style: none;
        }
        img{
            max-width:90vw;
        }

        /* Header */
        header {
            width: 100%;
            /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
            background: #fff;
        }

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px 20px;
            flex-wrap: wrap;
        }

        .top-header-info {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: center;
        }

        .top-info-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #333;
        }

        .search {
            display: flex;
            align-items: center;
            border: 1px solid #28a745;
            border-radius: 20px;
            padding: 5px 15px;
            max-width: 250px;
        }

        .search input {
            border: none;
            flex: 1;
            padding: 5px;
            font-size: 14px;
        }

        .search input:focus {
            outline: none;
        }

        .auth {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .auth a {
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            color: #007bff;
            font-weight: 600;
        }

        /* Main Navigation */
        .main-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            flex-wrap: wrap;
        }

        .main-header img {
            max-width: 180px;
        }

        .main-header ul {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .main-header ul {
        transform: translateX(-100%);
        transition: transform 0.4s ease-in-out;
    }

    .main-header ul.active {
        transform: translateX(0);
    }

    /* Animated Toggle Button */
    .menu-toggle.open i {
        transform: rotate(180deg);
        transition: transform 0.3s ease-in-out;
    }

        .main-header ul li a {
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s ease-in-out;
        }

        .main-header ul li a:hover {
            color: #007bff;
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

       
        footer {
            color: #FFFFFF;
            background: #1F1F34;
            padding-top: 40px;
        }
        footer a {
            color: #FFFFFF;
        }
        .footer-container {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-bottom: 20px;
            justify-content: space-between;
        }
        .footer-content-1 {
            max-width: 300px;
            width: 80vw;
        }
        .footer-content-2 {
            flex: 1;
        }
        .content2-1 {
            display: flex;
            margin-bottom: 20px;
            gap: 6px;
            justify-content: space-between;
        }
        .footer-item a {
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgb(81, 81, 122);
            padding-bottom: 8px;
        }
        footer h2 {
            margin-bottom: 10px;
        }
        footer a, footer p {
            color: #f1f1f1;
            font-size: 12px;
        }
        .footer-item i {
            margin-right: 2px;
            color: rgb(248, 195, 27);
        }
        footer h2 {
            font-size: 18px;
        }
        .content2-2 {
            display: flex;
            align-items: center;
        }
        .content2-2 p {
            margin-left: 10px;
        }
        .content2-2 span {
            color: #FFFFFF;
            font-size: 14px;
        }
        .content2-2 h2 {
            margin-bottom: 0;
        }
        .bottom-footer {
            background: #131218;
            padding: 20px 0;
        }
        .bottom-footer .contain {
            display: flex;
            gap: 40px;
        }
        .bottom-footer a {
            color: #f1f1f1;
            font-size: 12px;
        }
        .menu-toggle {
            display: none;
        }

        /* whatsapp css */
        .whatsapp-chat {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}

.whatsapp-chat img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}

.whatsapp-chat img:hover {
    transform: scale(1.1);
}


        /* Responsive Styles */
        @media (max-width: 768px) {
            .top-header {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .search {
                display: none;
            }

            .main-header {
                flex-direction: column;
                text-align: center;
            }

            .main-header img {
                margin-bottom: 10px;
            }

            .menu-toggle {
                display: block;
                position: absolute;
                right: 20px;
                top: 20px;
            }

            .main-header ul {
                display: none;
                flex-direction: column;
                width: 60vw;
                align-items:start;
                max-width:600px;
                background: #fff;
                position: fixed;
             
                z-index: 1000;
                left: -100%;
                transition: left 0.3s ease-in-out, opacity 0.3s ease-in-out;
                top: 0;
                bottom:0;
                left: 0;
                padding: 20px 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .main-header ul.active {
                display: flex;
            }

            .main-header ul li {
                margin: 10px 0;
               
            }

            .footer-container, .content2-1, .content2-2 {
                max-width: 80vw;
                margin: 30px auto;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
            .content2-2 p {
                margin-left: 0;
                margin-bottom: 10px;
            }
            .bottom-footer .contain {
                max-width: 80vw;
            }
           
        }
    </style>
</head>
<body>

<header>
    <!-- Top Header -->
    <div class="top-header">
        <div class="top-header-info">
        <div class="top-info-item">
        <i class="fas fa-envelope"></i> flotilla@academy.com
        </div>
            <div class="top-info-item">
                <i class="fas fa-phone-alt"></i> +2348166411203, +2348166411203
            </div>
        </div>

        <div class="search">
            <input type="text" placeholder="Search...">
            <img src="img/SVG.png" alt="Search">
        </div>

        <div class="auth">
            <a href="/flotilla/login"><i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="/flotilla/register"><i class="fas fa-user-plus"></i> Register</a>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="main-header">
        <img src="img/Logo_Horizontal 3.png" alt="Logo">

        <!-- Mobile Menu Toggle -->
        <div class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </div>

        <ul id="navMenu">
            <li><a href="/flotilla/">HOME</a></li>
            <li><a href="/flotilla/about">ABOUT US</a></li>
            <li><a href="/flotilla/contact">CONTACT US</a></li>
            <li><a href="#">COURSE SEARCH</a></li>
            <li><a href="#">STUDENT PORTAL</a></li>
        </ul>
    </div>
</header>

</body>
</html>
