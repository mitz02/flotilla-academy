

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .left-contact-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            align-items: center;
        }
        h2, h3 {
            color: #073E5D;
        }
        h2 {
            margin-bottom: 20px;
        }
        .contain {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }
        section {
            max-width: 90vw;
            margin: 0 auto;
        }
        .contact-us {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            padding: 40px 0;
            align-items: flex-start;
        }
        .contact-us-left, .contact-us-right {
            flex: 1 1 100%;
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
            height: 300px;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        hr {
            opacity: 0.5;
        }
        form {
            max-width: 500px;
            width: 100%;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 10px;
        }
        .form-group input {
            flex: 1 1 100%;
        }
        form button {
            background: #073E5D;
            padding: 10px 20px;
            border: none;
            border-radius: 2px;
            color: white;
            width: 100%;
        }

        @media (min-width: 768px) {
            .contact-us-left, .contact-us-right {
                flex: 1 1 calc(50% - 20px);
            }
            .form-group input {
                flex: 1 1 calc(50% - 10px);
            }
            form button {
                width: auto;
            }
        }
    </style>
</head>
<body>
    <section>
        <div class="contact-us contain">
            <div class="contact-us-left" data-aos="fade-right" data-aos-duration="1000">
                <h2>Contact Info</h2>
                <div class="left-contact-wrapper">
                    <div class="contact-item" data-aos="fade-up" data-aos-delay="100">
                        <h3>Email</h3>
                        <p><i class="fas fa-envelope"></i> contact@flotillaacademy.com</p>
                    </div>

                    <div class="contact-item" data-aos="fade-up" data-aos-delay="200">
                        <h3>Phone</h3>
                        <p><i class="fas fa-phone"></i> +234816633232</p>
                    </div>

                    <div class="contact-item" data-aos="fade-up" data-aos-delay="300">
                        <h3>Address</h3>
                        <p><i class="fas fa-map-marker-alt"></i> the address here</p>
                    </div>
                </div>
            </div>

            <div class="contact-us-right" data-aos="fade-left" data-aos-duration="1000">
                <h2>Location Info</h2>
                <div class="map-container" data-aos="zoom-in" data-aos-delay="400">
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
        <form class="contain" action="" method="post" data-aos="fade-up" data-aos-duration="1000">
            <h2>Feed back:</h2>
            <div class="form-group">
                <input type="text" name="name" placeholder="name" data-aos="fade-right" data-aos-delay="100">
                <input type="email" name="name" placeholder="email" data-aos="fade-left" data-aos-delay="100">
            </div>
            <textarea name="" id="" data-aos="fade-up" data-aos-delay="200"></textarea>
            <button type="submit" data-aos="fade-up" data-aos-delay="300">Submit</button>
        </form>
    </section>


</body>
</html>