
    <style>
   

        .hero {
            background: url(img/aboutbg.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 40px 20px;
            height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1 {
            color: white;
            font-size: 2.5rem;
        }

        .contain {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contain h4 {
            color: #103A77;
        }

        .about-us {
            padding: 40px 0;
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            align-items: center;
        }

        .about-us span {
            color: #103A77;
            font-weight: 600;
        }

        .about-us p {
            margin-bottom: 20px;
        }

        .left-side, .right-side {
            flex: 1;
            min-width: 300px;
        }

        .about-us img {
            max-width: 100%;
            height: auto;
        }

        .testimonial {
            display: flex;
            align-items: center;
            padding: 40px 0;
            color: #FFFFFF;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .testimonial-left, .testimonial-right {
            flex: 1;
            min-width: 300px;
        }

        .testimonial-left {
            background: #073E5D;
            padding: 30px;
            box-sizing: border-box;
        }

        .testimonial-right {
            position: relative;
        }

        .icon-container {
            position: absolute;
            bottom: 0;
            left: 0;
            display: flex;
        }

        .testimonial img {
            width: 100%;
            height: auto;
        }

        .testimonial-wrapper h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .testimonial h4 {
            color: #96BBD8;
        }

        .icon {
            background: #25AAE1;
            font-size: 20px;
            padding: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .about-us {
                flex-direction: column;
            }

            .testimonial {
                flex-direction: column;
            }

            .testimonial-left, .testimonial-right {
                width: 100%;
            }

            .icon-container {
                position: static;
                justify-content: center;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <main>
        <section class="hero" data-aos="fade-down">
            <div class="contain">
                <h1>About us</h1>
            </div>
        </section>

        <section>
            <div class="contain">
                <section class="about-us" data-aos="fade-up">
                    <div class="left-side">
                        <h4>Experience:</h4>
                        <p>At Flotilla Academy, we aim to transform Nigeria's maritime sector by producing a skilled workforce proficient in modern maritime practices. From boat design to Inland Waterways navigation, we bridge the skills gap with innovative, hands-on learning experiences."</p>
                        <p><span>Instructional Expertise:</span> 20 years of experience instructing courses in naval architecture and small craft design, both in-person and online. His dedication to sharing knowledge has empowered countless students to excel in their maritime endeavors.</p>
                        <h4>Practical Approach</h4>
                        <p><span>Hands-On Learning:</span> His teaching philosophy revolves around practical, hands-on experiences, proven to yield exceptional results. His approach to course material emphasizes real-world applications, ensuring students develop a deep understanding of maritime concepts.</p>
                        <p><span>Sea Experience:</span> Eric’s passion for the sea is unparalleled, cultivated from a young age through extensive sailing experiences. With thousands of miles under his keel, including many single-handed journeys, Eric’s understanding of seamanship and boat design is grounded in practical sea experience.</p>
                    </div>
                    <div class="right-side">
                        <img src="img/Figure -eric-main.png" alt="Eric">
                    </div>
                </section>
            </div>
        </section>

        <section>
            <div class="contain">
                <section class="about-us" data-aos="fade-up">
                    <div class="left-side">
                        <h3>Qualifications and Certifications</h3>
                        <p><span>Naval Architecture Expert:</span> Eric holds qualifications in naval architecture, complemented by a master marine technician certification in composite construction, diesel propulsion, and marine electrics.</p>
                        <p><span>USCG Master Mariner:</span> With a USCG master mariner’s ticket and towing and sailing endorsements, Eric’s credentials underscore his expertise in maritime operations and safety.</p>
                        <p><span>Certified by RYA and SAMS:</span> Eric’s commitment to continuous learning is evident through his certifications in radio, radar, SOLAS, coastal and celestial navigation, obtained through rigorous study with esteemed organizations such as the Royal Yachting Association (RYA) and the Society of American Marine Surveyors (SAMS).</p>
                    </div>
                    <div class="right-side">
                        <h3>Qualifications and Certifications</h3>
                        <p><span>Engineering Innovations:</span> Eric’s contributions extend beyond traditional boat design, with involvement in groundbreaking projects such as the development of retractable Flettner rotor sails for cargo vessels, aimed at decarbonizing the shipping industry.</p>
                        <p>His numerous patents in sail development and drone submersible tug vessels highlight his innovative spirit and commitment to advancing maritime technology.</p>
                    </div>
                </section>
            </div>
        </section>

        <section>
            <div class="contain">
                <section class="about-us" data-aos="fade-up">
                    <div class="left-side">
                        <h3>Qualifications and Contributions</h3>
                        <p><span>Academic Distinction:</span> Adakole’s educational journey is marked by distinction, being the sole Nigerian to have pursued studies in Small Craft Naval Architecture at Westlawn, making him a distinguished figure in Nigeria’s maritime education landscape.</p>
                        <p><span>Legislative Engagement:</span> Adakole’s influence extends beyond the classroom, as seen by his crucial position on the Standing Committee on Waterways, Ports, and Harbours Ad Hoc Committee of the Nigerian House of Representatives.</p>
                        <p>His involvement in the review of Nigeria’s Maritime Laws in 2017 underscores his commitment to shaping policies that drive progress in the maritime sector.</p>
                    </div>
                    <div class="right-side">
                        <img src="img/Figure -Mr-Adakole-Ejegbudu-768x461.png" alt="Adakole">
                    </div>
                </section>
            </div>
        </section>

        <section class="testimonial-wrapper">
            <h2 data-aos="fade-down">WHAT PEOPLE SAY ABOUT US</h2>
            <div class="testimonial contain" data-aos="fade-up">
                <div class="testimonial-left">
                    <h3>Jerry Ogidigbo</h3>
                    <h4>Senior Engineer</h4>
                    <p>Flotilla Program focused on the essential materials and practical knowledge needed to succeed and advance my career. Your experienced instructors are valuable resources, as they all had a long careers at sea prior to being in the classroom. Sharing their experiences and other case studies with us was truly insightful and helped with my success.</p>
                </div>
                <div class="testimonial-right">
                    <img src="img/testi.jpeg" alt="Testimonial">
                    <div class="icon-container">
                        <div class="icon"><i class="fas fa-arrow-left"></i></div>
                        <div class="icon"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

 