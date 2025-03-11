
<style>
       
       .hero {
           background: url(img/background.jpeg);
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
           background-attachment: fixed;
           padding: 40px 20px;
           height: 60vh;
       }
       .hero-content {
           background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
           max-width: 600px;
           padding: 40px;
           color: white;
       }
       .hero-content h1 {
           margin-bottom: 20px;
           font-size: 30px;
       }
       .hero-content h3 {
           margin-bottom: 40px;
           color: rgb(240, 235, 235);
           font-size: 18px;
       }
       .hero-content a {
           border: 1px solid white;
           color: white;
           padding: 10px;
       }
       .hero-wrapper, .contain {
           max-width: 1200px;
           margin: 0 auto;
       }
       .about-wrapper, .our-courses {
           display: flex;
           gap: 20px;
           max-width:90vw;
           margin:0 auto;
           justify-content: space-between;
           align-items: center;
           padding: 50px 0;
          
       }
       .about-wrapper p, .our-courses p {
           margin-bottom: 20px;
       }
       .about-wrapper img, .our-courses img {
           width: 600px;
       }
       .about-wrapper a, .our-courses a {
           background: #073E5D;
           color: white;
           padding: 10px 20px;
       }
       .our-course h2 {
           text-align: center;
       }
       .what h2, .feature h2 {
           text-align: center;
           margin-bottom: 40px;
       }
       .what, .feature {
           padding: 50px 0;
       }
       .what-wrapper {
           display: flex;
           flex-wrap: wrap;
           justify-content: space-between;
       }
       .what-item {
           width: 350px;
           padding: 10px;
           border-radius: 4px;
           margin-bottom: 30px;
           border: 1px solid #073E5D;
           max-width: 80vw;
           box-shadow: 0 0 11px rgba(0, 0, 0, 0.3);
       }
       .what-item img {
           width: 100%;
           border-radius: 8px;
       }
       .what-item p, .what-item h3 {
           padding: 10px;
       }
       .what-item h3 {
           text-align: center;
       }
       .feature-wrapper {
           display: flex;
           flex-wrap: wrap;
           justify-content: space-between;
       }
       .feature-item {
           max-width: 80vw;
           display: flex;
           height: 300px;
           margin-bottom: 30px;
           justify-content: center;
           align-items: center;
           background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/feature-1.png);
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
       }
       .item-overlay {
           height: 200px;
           justify-content: center;
           align-items: center;
           display: flex;
           background: #25AAE180;
       }
       .item-overlay h3 {
           text-align: center;
           color: white;
           padding: 5px;
       }
       .faq-section {
           max-width: 800px;
           margin: 50px auto;
       }
       .faq-item {
           border-bottom: 1px solid #ccc;
           padding: 10px 0;
       }
       .faq-question {
           display: flex;
           justify-content: space-between;
           align-items: center;
           cursor: pointer;
           font-weight: 600;
       }
       .faq-answer {
           display: none;
           padding: 10px 0;
           color: #555;
       }
       .view-more {
           text-align: center;
           margin-top: 20px;
       }
       .view-more button {
           background: #073E5D;
           color: white;
           border: none;
           padding: 10px 20px;
           cursor: pointer;
           font-size: 16px;
       }
       .view-more button:hover {
           background: #052c42;
       }
       .newsletter {
           background: #1F1F34;
           color: #FFFFFF;
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: center;
           padding: 50px 10px;
           margin-bottom: 20px;
       }
       .newsletterBtn {
           display: flex;
           justify-content: center;
           align-items: center;
       }
       .newsletterBtn button {
           background: #25AAE1;
           color: white;
           padding: 18px 30px;
           margin-bottom: 20px;
           border: none;
       }
/* Flotilla Courses Section */
.flotilla-courses {
    padding: 50px 0;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.course-card {
    flex: 1 1 calc(33.333% - 40px); /* 3 cards per row on large screens */
    margin-bottom: 30px;
    padding: 20px;
    max-width:90vw;
    margin: 0 auto;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.course-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
}

.course-details h3 {
    margin-bottom: 10px;
    font-size: 22px;
    color: #073E5D;
}

.course-details p {
    margin-bottom: 15px;
    color: #555;
    line-height: 1.6;
}

.course-meta {
    display: flex;
    gap: 20px;
    align-items: center;
    color: #073E5D;
    font-size: 14px;
    flex-wrap: wrap;
    padding-left: 20px;
}

.course-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

.course-meta i {
    color: #25AAE1;
}

/* AOS Animation */
[data-aos] {
    transition: opacity 0.5s ease, transform 0.5s ease;
}

[data-aos="fade-up"] {
    opacity: 0;
    transform: translateY(20px);
}

[data-aos="fade-up"].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive Design for Course Cards */
@media (max-width: 1024px) {
    .course-card {
        flex: 1 1 calc(50% - 40px); /* 2 cards per row on medium screens */
    }
}

@media (max-width: 768px) {
    .course-card {
        flex: 1 1 100%; /* 1 card per row on small screens */
    }

    .course-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}

/* Responsive Design for Course Cards */


       @media (max-width: 768px) {
     
          
           .search {
               display: none;
           }
           .about-wrapper, .our-courses, .what-wrapper, .feature-wrapper {
               display: flex;
               flex-direction: column;
               align-items: center;
               flex-wrap: wrap;
           }
             .hero {
         
           height: 80vh;
       }
          
           .faq-section {
               max-width: 80vw;
               margin: 30px auto;
           }
          .about-wrapper, .our-courses

           
       }
     
   </style>
</head>
<body>
<main>
 
  

   <section class="hero">
        <div class="hero-wrapper">
            <div class="hero-content">
                <h1>Welcome to Flotilla Academy</h1>
                <h3>Shaping the future of Nigeria's Maritime Industry: knowledge, Skills and Opportunities</h3>
                <a href="">Explore Our Courses</a>
            </div>
        </div>
    </section>

    <section>
        <div class="about-wrapper contain">
            <div>
                <p>Many aspiring boat professionals lack access to comprehensive training and industry insights.</p>
                <p>Without proper guidance, students may struggle to navigate the complexities of the boat sector, limiting their career growth.</p>
                <p>Our professional courses provide you with the right skills and information required to succeed in the boat industry by offering specialized training and knowledgeable guidance.</p>
                <a href="">READ MORE</a>
            </div>
            <img src="img/Figure coursebb.jpg.png" alt="">
        </div>
    </section>

    <section class="our-course">
    <h2>FLOTILLA COURSES</h2>
    <div class="flotilla-courses">
        <!-- Course 1 -->
        <div class="course-card" data-aos="fade-up">
            <img src="img/course1.jpg" alt=" ">
            <div class="course-details">
                <h3>General Boat Appreciation</h3>
                <p>This course provides a comprehensive introduction to boat design, construction, and maintenance. Perfect for beginners and enthusiasts alike.</p>
                <div class="course-meta">
                    <span><i class="fas fa-clock"></i> 1 Week</span>
                    <span><i class="fas fa-globe"></i> Online</span>
                    <span><i class="fas fa-calendar-alt"></i> Start: 17th March 2025</span>
                </div>
            </div>
        </div>

        <!-- Course 2 -->
        <div class="course-card" data-aos="fade-up">
            <img src="img/course2.jpg" alt=" ">
            <div class="course-details">
                <h3>Introduction to Inland Water Transportation</h3>
                <p>Learn the fundamentals of inland water transportation, including navigation, safety protocols, and operational best practices.</p>
                <div class="course-meta">
                    <span><i class="fas fa-clock"></i> 5 Days</span>
                    <span><i class="fas fa-globe"></i> Online</span>
                    <span><i class="fas fa-calendar-alt"></i> Coming Soon</span>
                 
                </div>
            </div>
        </div>

        <!-- Course 3 -->
        <div class="course-card" data-aos="fade-up">
            <img src="img/course3.jpg" alt=" ">
            <div class="course-details">
                <h3>Maritime Entrepreneurship</h3>
                <p>Discover how to start and manage a successful maritime business. This course covers business planning, funding, and industry-specific strategies.</p>
                <div class="course-meta">
                    <span><i class="fas fa-clock"></i> 5 Days</span>
                    <span><i class="fas fa-globe"></i> Online</span>
                    <span><i class="fas fa-calendar-alt"></i> Coming Soon</span>
                 
                </div>
            </div>
        </div>

        <!-- Course 4 -->
        <div class="course-card" data-aos="fade-up">
            <img src="img/course4.jpg" alt=" ">
            <div class="course-details">
                <h3>Basic Boat Building (WOOD/EPOXY)</h3>
                <p>This course teaches the basics of boat building using wood and epoxy. Learn design, construction, and finishing techniques.</p>
                <div class="course-meta">
                    <span><i class="fas fa-clock"></i> 4 Weeks</span>
                    <span><i class="fas fa-globe"></i> Online</span>
                    <span><i class="fas fa-calendar-alt"></i> Coming Soon</span>
                  
                </div>
            </div>
        </div>

        <!-- Course 5 -->
        <div class="course-card" data-aos="fade-up">
            <img src="img/course5.jpg" alt="Boat Design">
            <div class="course-details">
                <h3>Boat Design</h3>
                <p>Master the principles of boat design, including hull shapes, stability, and performance optimization.</p>
                <div class="course-meta">
                    <span><i class="fas fa-clock"></i> 12 Weeks</span>
                    <span><i class="fas fa-globe"></i> Online</span>
                    <span><i class="fas fa-calendar-alt"></i>Coming Soon</span>
                    
                </div>
            </div>
        </div>
    </div>
</section>
   <section class="feature">
       <h2>FEATURED COURSES</h2>
       <div class="feature-wrapper contain">
           <div class="feature-item">
               <div class="item-overlay">
                   <h3>Steel Boat Building –Practical</h3>
               </div>
           </div>

           <div class="feature-item">
               <div class="item-overlay">
                   <h3>Steel Boat Building –Practical</h3>
               </div>
           </div>

           <div class="feature-item">
               <div class="item-overlay">
                   <h3>Steel Boat Building –Practical</h3>
               </div>
           </div>

           <div class="feature-item">
               <div class="item-overlay">
                   <h3>Steel Boat Building –Practical</h3>
               </div>
           </div>
       </div>

   </section>

   <section class="faq-section">
       <h2>Frequently Asked Questions</h2>
       <div class="faq-item">
           <div class="faq-question">What is Flotilla Academy? <i class="fas fa-chevron-down"></i></div>
           <div class="faq-answer">Flotilla Academy is a premier institution offering specialized courses in the maritime industry.</div>
       </div>
       <div class="faq-item">
           <div class="faq-question">How can I enroll in a course? <i class="fas fa-chevron-down"></i></div>
           <div class="faq-answer">You can enroll in a course by visiting our website and registering online.</div>
       </div>
       <div class="faq-item">
           <div class="faq-question">Do you offer online classes? <i class="fas fa-chevron-down"></i></div>
           <div class="faq-answer">Yes, we offer both online and physical classes for flexibility.</div>
       </div>
       <div class="faq-item hidden-faq" style="display: none;">
           <div class="faq-question">What are the payment options? <i class="fas fa-chevron-down"></i></div>
           <div class="faq-answer">We accept credit cards, bank transfers, and online payment gateways.</div>
       </div>
       <div class="faq-item hidden-faq" style="display: none;">
           <div class="faq-question">Is there a certificate after completion? <i class="fas fa-chevron-down"></i></div>
           <div class="faq-answer">Yes, all students receive a certification upon course completion.</div>
       </div>
       <div class="view-more">
           <button id="view-more-btn">VIEW FULL LIST OF FAQS</button>
       </div>
   </section>
   <section>
       <div class="contain newsletter">
           <h2>Subscribe to newsletter</h2>
           <p>Never miss our latest news and opportunities and subscribe to our newsletter</p>
       </div>
       <div class="newsletterBtn">
           <button>SUBSCRIBE</button>
       </div>
   </section>
  

</main>

<script>
   document.addEventListener("DOMContentLoaded", function () {
       const faqItems = document.querySelectorAll(".faq-question");
       faqItems.forEach(item => {
           item.addEventListener("click", function () {
               const answer = this.nextElementSibling;
               const icon = this.querySelector("i");
               if (answer.style.display === "block") {
                   answer.style.display = "none";
                   icon.classList.replace("fa-chevron-up", "fa-chevron-down");
               } else {
                   answer.style.display = "block";
                   icon.classList.replace("fa-chevron-down", "fa-chevron-up");
               }
           });
       });

       document.getElementById("view-more-btn").addEventListener("click", function () {
           document.querySelectorAll(".hidden-faq").forEach(item => {
               item.style.display = "block";
           });
           this.style.display = "none";
       });

   });
</script>
</body>
</html>