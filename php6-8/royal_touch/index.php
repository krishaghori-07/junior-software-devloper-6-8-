<?php
include 'connect.php';

if(isset($_POST['feedback']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    $query = "INSERT INTO feedback(name,email,message,rating)
              VALUES('$name','$email','$message','$rating')";
    $data=mysqli_query($con,$query);
if($data)
    {
        echo "<script>alert('Thank you for your feedback!');</script>";

    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nail Studio - Home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#fff0f5;
    font-family:Arial,sans-serif;
}
.navbar{
    background:#ff3399;
}
.navbar-brand,
.nav-link{
    color:#fff!important;
}
.navbar-brand img{
    width:70px;
    height:70px;
    border-radius:50%;
    object-fit:cover;
}
.hero{
    background:url('banner.jpg') center/cover;
    height:500px;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#fff;
}
.hero h1{
    background:rgba(0,0,0,.5);
    padding:20px;
    border-radius:10px;
}
.section-title{
    text-align:center;
    color:#ff3399;
    margin:40px 0 20px;
}
.card img{
    height:250px;
    object-fit:cover;
}
.gallery-img{
    width:100%;
    height:300px;
    object-fit:cover;
    border-radius:10px;
}
.review,
.feedback-box,
.card{
    box-shadow:0 0 10px #ccc;
}
.review,
.feedback-box{
    background:#fff;
    padding:20px;
    border-radius:12px;
}
footer{
    background:#ff3399;
    color:#fff;
    text-align:center;
    padding:20px;
    margin-top:40px;
}
.btn-custom{
    background:#ff3399;
    color:#fff;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="#">
    <img src="images/logo.png"> Nail Studio
</a>

<button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#nav"></button>

<div class="collapse navbar-collapse" id="nav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
<li class="nav-item"><a class="nav-link" href="appointment.php">Appointment</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
</ul>
</div>
</div>
</nav>

<div class="hero">
    <h1>Beautiful Nails, Beautiful You ✨</h1>
</div>

<div class="container">

<h2 class="section-title">Nail Designs</h2>

<div class="row g-4">
<div class="col-md-4">
    <div class="card">
        <img src="images/img1.jpg" class="card-img-top">
        <div class="card-body">
            <h5>Acrylic Nails</h5>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <img src="images/img2.jpeg" class="card-img-top">
        <div class="card-body">
            <h5>Gel Extensions</h5>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <img src="images/img3.jpg" class="card-img-top">
        <div class="card-body">
            <h5>French Tips</h5>
        </div>
    </div>
</div>
</div>

<h2 class="section-title">Gallery</h2>

<div class="row g-3">

<div class="col-md-4">
    <img src="images/gallery1.jpg" class="gallery-img">
</div>

<div class="col-md-4">
    <img src="images/gallery2.jpg" class="gallery-img">
</div>

<div class="col-md-4">
    <img src="images/gallery3.jpg" class="gallery-img">
</div>

<div class="col-md-4">
    <img src="images/gallery4.jpg" class="gallery-img">
</div>

<div class="col-md-4">
    <img src="images/gallery5.jpg" class="gallery-img">
</div>

<div class="col-md-4">
    <img src="images/gallery6.jpg" class="gallery-img">
</div>

</div>

<h2 class="section-title">Customer Reviews</h2>
<div class="row g-4">

<?php
$query = "SELECT * FROM feedback ORDER BY id DESC";
$data = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($data))
{
?>
    <div class="col-md-4">
        <div class="review">
            <h5>
                <?php echo $row['name']; ?>

                <span style="color:gold;">
                    <?php
                    for($i=1; $i<=$row['rating']; $i++)
                    {
                        echo '<i class="bi bi-star-fill"></i>';
                    }
                    ?>
                </span>
            </h5>

            <p><?php echo $row['message']; ?></p>
        </div>
    </div>
<?php
}
?>

</div>



</div>

</div>

<h2 class="section-title">Feedback Form</h2>

<div class="feedback-box mb-5">

<form method="POST">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Message</label>
<textarea name="message" class="form-control" rows="4" required></textarea>
</div>

<div class="mb-3">
<label>Rating</label>
<select name="rating" class="form-control" required>
<option value="">Select Rating</option>
<option value="1">⭐</option>
<option value="2">⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="5">⭐⭐⭐⭐⭐</option>
</select>
</div>

<button type="submit" name="feedback" class="btn btn-custom">
    Send Feedback
</button>

</form>

</div>

</div>

<!---footer--->

<footer>

<h5>Royal Touch</h5>

<p>Beautiful Nails,Beautiful You.</p>

<p>
<i class="bi bi-telephone-fill"></i>
+91 7847384787
</p>

<p>
<i class="bi bi-envelope-fill"></i>
royaltouch223@gmail.com
</p>

<p>
<i class="bi bi-instagram"></i>
@royal_touch
</p>

<p>
2026 Royal Touch | All Rights Reserved
</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>