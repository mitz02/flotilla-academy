<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.dashboard {
    display: flex;
}
a{
    text-decoration: none;
    
}

.sidebar {
    width: 200px;
    background: #1F1F34;

    color: white;
    position: fixed;
    height: 100vh;
    
    padding: 20px;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.menu {
    list-style: none;
    padding: 30px 0;
}

.menu-item {
    padding: 10px;
    margin: 10px 0;
    cursor: pointer;
    transition: background-color 0.3s;
}
.menu-item i {
    margin-right: 10px;
}

.menu-item:hover {
    background-color: #34495e;
}

.menu-item.active {
    background-color: #34495e;
}
.user-info{
    position: absolute;
    display: flex;
    bottom: 50px;
    align-items: center;

}
.user-info  img{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 10px;
   
}

.main-content {
    flex-grow: 1;
    padding: 20px;
    margin-left: 250px;
}

.page {
    display: none;
}

.page.active {
    display: block;
    animation: fadeIn 0.5s;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.course {
    background-color: white;
    padding: 20px;
    position: relative;
    margin: 20px 0;
    max-width: 270px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.plan{
    background: #f3f4f5;
    padding: 5px 7px;
    border-radius: 4px;
}
.courses-wrapper{
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.course-title{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.course-title a{
    background: #25AAE1;
    color:white;
    padding: 10px 20px;
    border-radius: 5px;


}
.course h2{
    font-size: 18px;
}
.course h2::after{
    content: '';
    display: block;
    width: 100%;
    height: 2px;
    background: #f3f4f5f6;
    margin-top: 10px;
    
}
.plan-wrapper{
    display: flex;
    gap:20px;
    justify-content: space-between;
    flex-wrap: wrap;
}
.plan-item{
  
    flex:1;
}
.plan-item h4{
    margin-bottom: 5px;
}
.plan-item span {
    color:#25AAE1;
    font-size: 14px;
}

    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="logo">Ada Course</div>
            <ul class="menu">
                <li class="menu-item active" data-page="home"><i class="fas fa-home"></i> Home</li>
                <li class="menu-item" data-page="courses"><i class="fas fa-book"></i> Courses</li>
                <li class="menu-item" data-page="orders"><i class="fas fa-shopping-cart"></i> Orders</li>
                <li class="menu-item" data-page="shelf"><i class="fas fa-archive"></i> Shelf</li>
            </ul>
            <div class="user-info">
                <img src="img/Figure free-listuing-768x461.png" alt="">
                <p>Hi, Ronauld</p>
            </div>
        </div>
        <div class="main-content">
            <div class="page home-page active">
                <h1>Welcome to Ada Course</h1>
                <p>Explore our courses and enhance your skills.</p>
            </div>


            <div class="page courses-page">
                <div class="course-title">
                <h2>Courses</h2>
                <a href="">Add course</a>
                </div>
                 <div class="courses-wrapper">
                        <div class="course">
                        <span class="plan">Paid</span>
                            <h2>Beginner's Guide to Design</h2>
                            <p>13 Chapters</p>
                            <p>25 Certificates</p>
                            <p>254 Orders</p>
                            <p>500 Added to Shelf</p>
                            <p>Price: Free</p>
                        </div>
                        <div class="course">
                            <span class="plan">Free</span>
                            <h2>Beginner's Guide to Design</h2>
                                <div class="plan-wrapper">
                                        <div class="plan-item">
                                        <h4>50,000</h4>
                                        <span>Price</span>
                                    </div>

                                    <div class="plan-item">
                                        <h4>13</h4>
                                        <span>Chapters</span>
                                    </div>

                                    <div class="plan-item">
                                        <h4>256</h4>
                                        <span>Orders</span>
                                    </div>

                                    <div class="plan-item">
                                        <h4>25</h4>
                                        <span>Certificates</span>
                                    </div>

                                    
                                    <div class="plan-item">
                                        <h4>25</h4>
                                        <span>Reviews</span>
                                    </div>
                                    

                                    <div class="plan-item">
                                        <h4>500</h4>
                                        <span>Add to shelf</span>
                                    </div>
                                </div>
                        </div>
                 </div>
            </div>


            <div class="page orders-page">
                <h1>Orders</h1>
                <p>Total Orders: 254</p>
            </div>
            <div class="page shelf-page">
                <h1>Shelf</h1>
                <p>Total Items Added to Shelf: 500</p>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item');
    const pages = document.querySelectorAll('.page');

    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            const targetPage = this.getAttribute('data-page');
            menuItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');

            pages.forEach(page => {
                page.classList.remove('active');
                if (page.classList.contains(`${targetPage}-page`)) {
                    page.classList.add('active');
                }
            });
        });
    });
});
    </script>
</body>
</html>