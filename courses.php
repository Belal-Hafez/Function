<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">


    <style>
        <body>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .title {
            text-align: center;
        }

        .container {
            padding: 2px 16px;
            background-color: brown;
            width: 300px;
        }

        body {
            height: 100vh;
            width: 100%;
            image: url("images/calculus.jpg");
            /* Assuming you meant background-image instead of image */
        }

        form input {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
    </style>

</head>
    <div class="title">
        <h1>Welcome To Function 3U</h1>
    </div>

    <a href="index.php" class="previous">&laquo; Home</a>
    <a href="index.php" class="previous round">&#8249;</a>



    <div class="card-list">
        <a href="content.php" class="card-item">
            <img src="https://www.ontariovirtualschool.ca/wp-content/uploads/course-images/MCR3U.jpg" alt="Card Image" style="width:200px">
            <h3>content</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>

        <a href="test.php" class="card-item">
            <img src="https://previews.123rf.com/images/alexandraklestova/alexandraklestova2103/alexandraklestova210300037/165722542-online-exam-vector-web-test-internet-education-landing-page-home-workplace-laptop-screen.jpg" alt="Card Image" style="width:200px">
            <h3>All Unit Tests.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="https://www.calculator.net/scientific-calculator.html" target="_blank" class="card-item">
            <img src="https://t4.ftcdn.net/jpg/03/48/61/49/360_F_348614985_rL5rUmTpztC874L42b2lSJZhKdTmCARu.jpg" alt="Card Image" style="width:200px">
            <h3>Calculator</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="https://www.desmos.com/calculator" target="_blank" class="card-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2zkvP8QwrSZE1d0MbK7YhRrZ3y927qFc91mMEU60DoX4N-RnTqRwuLAioTAqFM-E17kE&usqp=CAU" alt="Card Image" style="width:200px">
            <h3>DISMOS </h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
</body>
</html>