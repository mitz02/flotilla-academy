<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
       

       

      .hero{
        background:url(img/aboutbg.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 40px 20px;
        height: 40vh;
      }

      
      .hero h1{
        color:white;

      }
    
    
    .hero-wrapper, .contain{
        max-width: 1200px;
        margin:  0 auto;
    }

    .contain h4{
      color: #103A77;

    }
    .about-us{
        padding: 40px 0;
        display:flex;
        gap:40px;
        flex-wrap:wrap;
        align-items:center;
    }
    .about-us span{
        color: #103A77;
        weight:400px;
    }

    .about-us p{
       margin-bottom:20px;
    }
    
    .left-side, .right-side{
        flex:1;
    }
    .about-us img{
      max-width:80vw;
      width:100%;
    }
    
    .testimonial{
        display:flex;
        align-items:center;
        padding:40px 0;
        color:#FFFFFF;
        justify-content:space-between;
    }
    .testimonial-left, .testimonial-right{
        flex:1;
        height:400px;
        max-height:400px;
    }
    .testimonial-left{
        background: #073E5D;
        padding:30px;
        box-sizing:border-box;  

    }

    .testimonial-right{
        position:relative;
    }
    .icon-container{
        position:absolute;
        bottom:0;
        left:0;
    }
        
    .testimonial img{
        width:100%;
        height:100%;
    }

    .testimonial-wrapper h2{
        text-align:center;
        margin-bottom:40px;
    }
    .testimonial h4{
       color: #96BBD8;

    }
    .icon{
        background: #25AAE1;
        font-size:20px;
        padding:20px;
        

    }


    </style>
</head>
<body>

<main>
      
    <section class="hero">
        <div class="contain">
             <h1>About us</h1>
        </div> 
    </section>
    


    <section>
        <div class="contain">
           <section class="about-us">
               <div class="left-side">
                    <h4>Experience:</h4> 
                    <p>At Flotilla Academy, we aim to transform Nigeria's maritime sector by producing a skilled workforce proficient in modern maritime practices. From boat design to Inland Waterways navigation, we bridge the skills gap with innovative, hands-on learning experiences."</p>
                    <p><span>Instructional Expertise:</span> 20 years of experience instructing courses in naval
                       architecture and small craft design, both in-person and online. His dedication
                       to sharing knowledge has empowered countless students to excel in their
                       maritime endeavors.</p>

                   <h4>Practical Approach</h4>
                   <p><span>Hands-On Learning:</span> His teaching philosophy revolves around practical,
                       hands-on experiences, proven to yield exceptional results. His approach to
                       course material emphasizes real-world applications, ensuring students
                       develop a deep understanding of maritime concepts.
                   </p>

                   <p><span>Sea Experience:</span> Eric’s passion for the sea is unparalleled, cultivated from a
                       young age through extensive sailing experiences. With thousands of miles
                       under his keel, including many single-handed journeys, Eric’s understanding
                       of seamanship and boat design is grounded in practical sea experience.
                   </p>
               </div>
               <!-- left-side ends -->
               <div class="right-side">
                    <img src="img/Figure → eric-main.png" alt=""/>
               </div>
               <!-- right-side ends -->
           </section>
        </div>
   </section>


   <section>
    <div class="contain">
       <section class="about-us">
           <div class="left-side">
                <h3>Qualifications and Certifications</h3>
                <p><span>Naval Architecture Expert:</span> Eric holds qualifications in naval architecture,
                   complemented by a master marine technician certification in composite
                   construction, diesel propulsion, and marine electrics.
                </p> 
                
              <p><span>USCG Master Mariner:</span> With a USCG master mariner’s ticket and towing and
               sailing endorsements, Eric’s credentials underscore his expertise in maritime
               operations and safety.
              </p>  

              <p>
               <span>Certified by RYA and SAMS:</span> Eric’s commitment to continuous learning is
               evident through his certifications in radio, radar, SOLAS, coastal and celestial
               navigation, obtained through rigorous study with esteemed organizations
               such as the Royal Yachting Association (RYA) and the Society of American
               Marine Surveyors (SAMS).
              </p>
           </div>
           <!-- left-side ends -->
           <div class="right-side">
               <h3>Qualifications and Certifications</h3>
               <p>
               <span>Engineering Innovations: </span>Eric’s contributions extend beyond traditional boat
               design, with involvement in groundbreaking projects such as the development
               of retractable Flettner rotor sails for cargo vessels, aimed at decarbonizing the
               shipping industry. 
               </p>

               <p>His numerous patents in sail development and drone submersible tug vessels
                   highlight his innovative spirit and commitment to advancing maritime
                   technology.
               </p>
           </div>
           <!-- right-side ends -->
       </section>
    </div>
</section>



<section>
    <div class="contain">
       <section class="about-us">
           <div class="left-side">
                <h3>Qualifications and Contributions</h3>
                <p><span>Academic Distinction:</span>Adakole’s educational journey is marked by distinction, being the sole Nigerian to
                    have pursued studies in Small Craft Naval Architecture at Westlawn, making him
                    a distinguished figure in Nigeria’s maritime education landscape.
                </p> 
                
              <p><span>Legislative Engagement:</span>
                Adakole’s influence extends beyond the classroom, as seen by his crucial
                position on the Standing Committee on Waterways, Ports, and Harbours Ad Hoc
                Committee of the Nigerian House of Representatives.
              </p>  

               <p>
                His involvement in the review of Nigeria’s Maritime Laws in 2017 underscores his
                commitment to shaping policies that drive progress in the maritime sector.
              </p>
           </div>
           <!-- left-side ends -->
           <div class="right-side">
               <img src="img/Figure → Mr-Adakole-Ejegbudu-768x461.png" alt=""/>
           </div>
           <!-- right-side ends -->
       </section>
    </div>
</section>
<section class="testimonial-wrapper">
    <h2>WHAT PEOPLE SAY ABOUT US</h2>
    <div class="testimonial contain">
        <div class="testimonial-left">
            <h3>Jerry Ogidigbo</h3>
             <h4>Senior Engineer</h4>
            <p>Flotilla Program focused on the essential materials and practical
                knowledge needed to succeed and advance my career. Your experienced instructors are
                valuable resources, as they all had a long careers at sea prior to being in the classroom.
                Sharing their experiences and other case studies with us was truly insightful and helped with
                my success."</p>
        </div>
        <!-- left-side end here -->

        <div class="testimonial-right">
            <img src="img/testi.jpeg" alt="">
             <div class="icon-container">
                 <div class="icon"><i class="fas fa-arrow-left"></i> </div>
                 <div class="icon"><i class="fas fa-arrow-right"></i> </div>
             </div>
        </div>
        <!-- left-side end here -->
    </div>
</section>


    
    
    
</main>
<x-footer/>
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