<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact Us - Flotilla Academy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .left-contact-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
            align-items: center;
        }
        h2, h3{
            color: #073E5D;

        }
        h2{
            margin-bottom: 20px;
        }
        .contain {
            max-width: 900px;
            margin: 0 auto;
        }
        .contact-us {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            padding: 40px 0;
            align-items: center;
     
        }
        .contact-us-left, .contact-us-right {
            flex: 1;
        }
        .contact-us i {
            color: #F9CE40;
            font-size: 20px;
        }
        .contact-item h3 {
            margin-bottom: 5px;
        }
        .map-container {
            width: 100%;
            height: 400px;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        hr{
            opacity:0.5
        }

        form{
            max-width: 500px;
        }
        form input, form textarea{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form input{
          flex: 1;
        }
        .form-group{
            display: flex;
            gap: 40px;
            margin-bottom: 10px;
        }
        form button{
            background: #073E5D;
            padding: 10px 20px;
            border: none;
            border-radius: 2px;
            color:white;

        }
    </style>
</head>
<body>
    <section>
        <div class="contact-us contain">
            <div class="contact-us-left">
                <h2>Contact Info</h2>
                <div class="left-contact-wrapper">
                    <div class="contact-item">
                        <h3>Email</h3>
                        <p><i class="fas fa-envelope"></i> contact@flotillaacademy.com</p>
                    </div>

                    <div class="contact-item">
                        <h3>Phone</h3>
                        <p><i class="fas fa-phone"></i> +234816633232</p>
                    </div>

                    <div class="contact-item">
                        <h3>Address</h3>
                        <p><i class="fas fa-map-marker-alt"></i> the address here</p>
                    </div>
                </div>
            </div>

            <div class="contact-us-right">
                <h2>Location Info</h2>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.375611712186!2d7.481294674039053!3d9.057851890502335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0ba4501d6e41%3A0x3d51e93ff6f3a537!2sAbuja%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1710000000000" 
                        allowfullscreen 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <form class="contain" action="" method="post">
               <h2>Feed back:</h2>
               <div class="form-group">
                     <input type="text" name="name" placeholder="name">
                     <input type="email" name="name" placeholder="email">
               </div>
               <textarea name="" id=""></textarea>
               <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
