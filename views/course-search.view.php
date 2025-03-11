<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Page</title>
    <!-- Add FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .search-container {
            background: #f9f9f9;
            padding: 20px;
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            border-radius: 8px;
        }

        .courses-wrapper {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .course-item-l {
            flex: 1;
            min-width: 250px;
        }

        .course-item-r {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .course-item-r a {
            background: #073E5D;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            text-align: center;
            font-size: 14px;
            border-radius: 4px;
        }

        .input-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 10px;
        }

        .input-group .input-item {
            flex: 1;
            min-width: 200px;
            border: 1px solid #ddd;
            background: white;
            display: flex;
            align-items: center;
            padding: 5px;
            border-radius: 4px;
        }

        .input-item input,
        .input-item select {
            flex: 1;
            width: 100%;
            border: none;
            padding: 10px;
            font-size: 14px;
        }

        .input-item input:focus,
        .input-item select:focus {
            outline: none;
        }

        .search-wrapper button {
            background: #25AAE1;
            color: white;
            border: none;
            padding: 13px 40px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .course-heading {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 10px;
        }

        .course-heading a {
            font-size: 14px;
            color: #073E5D;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .course-heading a i {
            font-size: 12px;
        }

        .course-detail {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .course-detail-item {
            flex: 1;
            min-width: 150px;
            padding-left: 20px; /* Space for the line */
            position: relative;
        }

        /* Thin vertical line for all items except the first one */
        .course-detail-item:not(:first-child)::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 1px;
            background: #ddd; /* Color of the line */
        }

        .course-detail-item h4 {
            margin-bottom: 5px;
            font-size: 16px;
        }

        .course-detail-item p {
            font-size: 14px;
            color: #555;
        }

        .certificate-heading {
            text-align: center;
            margin: 40px 0;
            font-size: 24px;
        }

        @media (max-width: 768px) {
            .input-group {
                flex-direction: column;
            }

            .course-item-r {
                width: 100%;
                margin-top: 20px;
            }

            .course-heading {
                flex-direction: column;
                align-items: flex-start;
            }

            .course-detail-item {
                padding-left: 0; /* Remove padding on small screens */
            }

            .course-detail-item:not(:first-child)::before {
                display: none; /* Hide the line on small screens */
            }
        }
    </style>
</head>
<body>
    <div class="search-container">
        <h2>Refine Your Result</h2>
        <div class="search-wrapper">
            <div class="input-group">
                <div class="input-item">
                    <i class="fa fa-graduation-cap"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="input-item">
                    <i class="fas fa-search"></i>
                    <select name="" id="">
                        <option value="">Select Location</option>
                    </select>
                </div>
                <button>
                    <i class="fas fa-search"></i> Search
                </button>
            </div>

            <div class="input-group">
                <div class="input-item">
                    <select name="" id="">
                        <option value="">Date + Time</option>
                    </select>
                </div>
                <div class="input-item">
                    <select name="" id="">
                        <option value="">Training Method</option>
                    </select>
                </div>
                <div class="input-item">
                    <select name="" id="">
                        <option value="">Simulation</option>
                    </select>
                </div>
                <div class="input-item">
                    <select name="" id="">
                        <option value="">Name</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <section>
        <h2 class="certificate-heading">CERTIFICATE COURSES</h2>
        <div class="courses-wrapper">
            <div class="course-item-l">
                <div class="course-heading">
                    <h3>General Boat Appreciation</h3>
                    <span><a href="">Read More <i class="fas fa-chevron-down"></i></a></span>
                    <span><a href="">Upcoming Sessions</a></span>
                </div>
                <div class="course-detail">
                    <div class="course-detail-item">
                        <h4>Course Format</h4>
                        <p>Video based</p>
                    </div>
                    <div class="course-detail-item">
                        <h4>Length</h4>
                        <p>7 weeks</p>
                    </div>
                    <div class="course-detail-item">
                        <h4>Training Method</h4>
                        <p>Lecture</p>
                    </div>
                    <div class="course-detail-item">
                        <h4>Simulation</h4>
                        <p>None</p>
                    </div>
                </div>
            </div>
            <div class="course-item-r">
                <a href="">VIEW NOW</a>
                <a href="">VIEW NOW</a>
            </div>
        </div>

        <div class="courses-wrapper">
            <div class="course-item-l">
                <div class="course-heading">
                    <h3>General Boat Appreciation</h3>
                    <span><a href="">Read More <i class="fas fa-chevron-down"></i></a></span>
                    <span><a href="">Upcoming Sessions</a></span>
                </div>
                <div class="course-detail">
                    <div class="course-detail-item">
                        <h4>Course Format</h4>
                        <p>Video based</p>
                    </div>
                    <div class="course-detail-item">
                        <h4>Length</h4>
                        <p>7 weeks</p>
                    </div>
                    <div class="course-detail-item">
                        <h4>Training Method</h4>
                        <p>Lecture</p>
                    </div>
                    <div class="course-detail-item">
                        <h4>Simulation</h4>
                        <p>None</p>
                    </div>
                </div>
            </div>
            <div class="course-item-r">
                <a href="">VIEW NOW</a>
                <a href="">VIEW NOW</a>
            </div>
        </div>
    </section>
</body>
</html>