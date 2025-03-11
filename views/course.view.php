<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Course Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        .container {
            display: flex;
            padding: 20px;
        }
        .video-section {
            flex: 2;
            padding: 20px;
        }
        .video-section video {
            width: 100%;
            border-radius: 10px;
        }
        .course-details {
            flex: 1;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .course-details h3 {
            margin-bottom: 10px;
        }
        .chapter {
            background: #ddd;
            padding: 10px;
            margin-bottom: 5px;
            cursor: pointer;
            border-radius: 5px;
        }
        .chapter-content {
            display: none;
            padding-left: 20px;
            background: #f9f9f9;
            border-left: 3px solid #666;
        }
        .reviews, .subscribe {
            padding: 20px;
            background: white;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .subscribe input, .subscribe button {
            padding: 10px;
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="video-section">
            <video controls>
                <source src="video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h2>Basic Training Revalidation</h2>
            <p>This course is required for mariners who already hold a STCW Basic Training endorsement...</p>
        </div>
        <div class="course-details">
            <h3>Course Curriculum</h3>
            <div class="chapter" onclick="toggleChapter(1)">Chapter 1: Course Overview <i class="fa fa-chevron-down"></i></div>
            <div class="chapter-content" id="chapter-1">
                <p>Introduction and general overview of the course.</p>
            </div>
            <div class="chapter" onclick="toggleChapter(2)">Chapter 2: Curriculum <i class="fa fa-chevron-down"></i></div>
            <div class="chapter-content" id="chapter-2">
                <p>General Boat Appreciation</p>
                <p>Steel Boat</p>
                <p>Plastic Boat</p>
                <p>Marine Charts</p>
                <p>Boat Navigation</p>
            </div>
        </div>
    </div>
    
    <div class="reviews">
        <h3>Student Reviews</h3>
        <div><strong>Leonardo Da Vinci</strong> - Loved the course. Learned some subtle techniques!</div>
        <div><strong>Titanic S</strong> - Great insights on maritime topics!</div>
    </div>
    
    <div class="subscribe">
        <h3>Join and get amazing discount</h3>
        <input type="email" placeholder="Email Address">
        <button>Subscribe</button>
    </div>
    
    <script>
        function toggleChapter(chapter) {
            var content = document.getElementById("chapter-" + chapter);
            content.style.display = content.style.display === "block" ? "none" : "block";
        }
    </script>
</body>
</html>
