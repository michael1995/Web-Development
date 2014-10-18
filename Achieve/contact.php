<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <?php include 'fragments/head.html'; ?>
</head>
<body>

<script>
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHbqVMDlk2r16WB2NQLpq_HuV5Pexljek">
</script>

<script>
    function initialize() {
        var myLatlng = new google.maps.LatLng(-27.488130, 153.038555);
        var mapOptions = {
            zoom: 18,
            center: myLatlng
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
        'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;
</script>

<?php include 'fragments/navigation.html'; ?>
<?php include 'fragments/header.html'; ?>

<div class="jumbotron jumbotron-light">
    <div class="container">
        <i class="fa fa-phone fa-3x"></i>
        <h1>Our Details</h1>
        <hr></>
        <p>Veniam adipisicing cupidatat dolor do adipisicing ipsum lorem modo.
            Reprehenderit minim blandit quam pulvinar vulputate.</p>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <i class="fa fa-phone fa-2x"></i>
                <h4>(07) 3391 3817</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <i class="fa fa-fax fa-2x"></i>
                <h4>(07) 3393 0614</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <i class="fa fa-envelope fa-2x"></i>
                <h4 class="wrap-text"><a href="#">reception@achievecorporateservices.com.au</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-dark">
    <div class="container">
        <i class="fa fa-envelope fa-3x"></i>
        <h1>Get in touch</h1>
        <hr></>
        <p>Veniam adipisicing cupidatat dolor do adipisicing ipsum lorem modo.
        Reprehenderit minim blandit quam pulvinar vulputate.</p>
        <div class="row">
            <form class="form-horizontal col-lg-12" role="form">
                <div class="form-group">
                    <label class="sr-only " for="exampleInputEmail2">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <textarea style="resize: vertical" class="form-control" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <a class="btn btn-primary btn-lg" role="button">Send Message</a>
            </form>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-green">
    <div class="container">
        <i class="fa fa-compass fa-3x"></i>
        <h1>Find us</h1><hr></>
        <p>Veniam adipisicing cupidatat dolor do adipisicing ipsum lorem modo.
            Reprehenderit minim blandit quam pulvinar vulputate.</p>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <i class="fa fa-building-o fa-4x"></i>
            <h4>Unit 6/34 Nile Street,</h4>
            <h4>Woolloongabba,</h4>
            <h4>Qld, 4102</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <i class="fa fa-envelope-square fa-4x"></i>
            <h4>PO Box 1454,</h4>
            <h4>Coorparoo DC,</h4>
            <h4>QLD, 4151</h4>
        </div>
    </div>
</div>

<div id="map-canvas" class="jumbotron map-container"></div>

<?php include 'fragments/footer.html'; ?>

</body>
</html>