<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="first">Clean</span><span class="second">ly</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#s1">How it work</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#s2">Services</a>
          </li>

        </ul>
        <form action="{{route('booking')}}" method="get" class="form-class">
          <button type="submit" class="btn-form2 border border-info rounded">Book a cleaning</button>
        </form>
        <!--<button type="button" class="btn btn-info">Online Booking</button>-->
      </div>
    </div>
  </nav>
  <!-- slider-->
  <div id="carouselExampleSlidesOnly" class="carousel slide border-bottom border-primary" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <div class="position-relative">
          <img src="{{ asset('image/slide1.jpg') }}" class="d-block w-100" alt="..." height="500px">
      </div>
      <div class="position-absolute top-50 start-50 translate-middle">
          <h1 class="text-center">Cleaning Made Easy</h1>
          <p>Book expert home cleaners and handymen at a moment's notice.</p>
          <p>Just pick a time and we’ll do the rest.</p>
      </div>
      </div>
    </div>
  </div>
  
  <section id="s1">
    <div class="container work">
      <span class="p1">How it <span class="p2">works</span></span>
      <p>We’ve made all the hardwork for making it simple for you. Here’s how it works</p>
    </div>
    <div class="container work-details">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <i class="bi bi-calendar-date"></i>
          <h4 class="head-1 text-center">Book a Cleaning</h4>
          <p>Click the book now button to make a booking on your preffered date and time</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <i class="bi bi-lock"></i>
          <h4 class="head-1 text-center">Confirm Booking</h4>
          <p>We will confirm your booking along with your instructions via secure transaction.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <i class="bi bi-house"></i>
          <h4 class="head-1 text-center">We’ll Clean it</h4>
          <p>Our trusted & experienced maid will come to your door-step on the time for a cleaning</p>
        </div>
      </div>  
    </div>
  </section>

  <div class="container-fluid words">
    <div class="container">
      <div class="row">
        <span class="p1">Don’t take our <span class="p2">word</span></span>
      </div>
      <div class="row">
       <p class="words-para">Read what our past customers said about our cleaning and services.</p>
      </div>
      <div class="words-test">
      <div class="row gx-5 gy-5">
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <i class="bi bi-quote"></i>
              <p class="card-text">I had them out to help me clean my new place for an office dinner I was having. I was very happy with the results. Jennifer came to the location on time. It is such a treat to have the home professionally cleaned.</p>
              <h6>-MILAN</h6>
              <h6>Australia</h6>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <i class="bi bi-quote"></i>
              <p class="card-text">They did such a good job. Whether you want to give a unique gift or have your own home cleaned, Maid for you provides a large range of top-notch services that I highly recommend to anyone and very professional.</p>
              <h6>-IVY</h6>
              <h6>Australia</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <i class="bi bi-quote"></i>
              <p class="card-text">Maid Services NYC is a wonderful service. I utilized their services to clean a one bedroom apartment I was staying in NYC after throwing a get together. They were prompt, left the place spotless, and very professional.</p>
              <h6>-IVY</h6>
              <h6>Australia</h6>
            </div>
          </div>
        </div>

      </div>
      </div>

    </div>
  </div> 

  <section id="s2">
    <div class="container-fluid services">
      <div class="container text-center">
        <span class="p3">Check out some of our </span> <span class="p4">services !</span></span>
      </div>
    </div>
  </section>

  <div>
    <div class="row g-0">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="{{ asset('image/ser1.webp') }}" alt="" height="380px" width="100%">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="container service px-5 py-3">
          <span class="p5">Make Better </span> <span class="p6">Living room</span></span>
        </div>
        <div class="container py-4">
          <ul class="ser-li" style="list-style-type:none;">
            <li>
              <i class="bi bi-check "></i>
                <span>Cleaning and highrise dusting</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Furniture Dusting/Vacuuming</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Fixtures cleaning - A/C,Fan etc</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Wall marks cleaning (Washable paint)</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Floor scrubbing / Dry and Wet mop
                </span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Carpet vacuuming</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div>
    <div class="row g-0">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="container service px-5 py-3">
          <span class="p5">Your Beautiful</span> <span class="p6"> Kitchen</span></span>
        </div>
        <div class="container py-4">
          <ul class="ser-li" style="list-style-type:none;">
            <li>
              <i class="bi bi-check "></i>
                <span>Wash and scrub sink</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Wash cabinet faces and appliances</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Dust and wipe all reachable surfaces</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Wipe mirrors and glass fixtures</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Vacuum and mop all floors
                </span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Take out trash and recyclables</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="{{ asset('image/ser2.jpg') }}" alt="" height="380px" width="100%">
      </div>
    </div>
  </div>


  <div>
    <div class="row g-0">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="{{ asset('image/ser3.jpeg') }}" alt="" height="380px" width="100%">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="container service px-5 py-3">
          <span class="p5">Tidy</span> <span class="p6"> Bathroom</span></span>
        </div>
        <div class="container py-4">
          <ul class="ser-li" style="list-style-type:none;">
            <li>
              <i class="bi bi-check "></i>
                <span>Wash and sanitize toilet, shower and sink</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Dust and wipe all reachable surfaces</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Wipe door handles and light switches
                </span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Wipe mirrors and glass fixtures</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Vacuum and mop all floors</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Take out trash and recyclables
                </span>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div>
    <div class="row g-0">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="container service px-5 py-3">
          <span class="p5">The Perfect</span> <span class="p6">Bedroom</span></span>
        </div>
        <div class="container py-4">
          <ul class="ser-li" style="list-style-type:none;">
            <li>
              <i class="bi bi-check "></i>
                <span>Make beds and change linens</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Dust and wipe all reachable surfaces</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Wipe door handles and light switches</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Wipe mirrors and glass fixtures</span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Vacuum and mop all floors
                </span>
            </li>
            <li>
              <i class="bi bi-check "></i>
                <span>Take out trash and recyclables</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="{{ asset('image/ser4.jpg') }}" alt="" height="380px" width="100%">
      </div>
    </div>
  </div>

  <div class="container-fluid words">
    <div class="container">
      <div class="row justify-content-center">
        <span class="p1">Don’t wait, Book a cleaning now.</span>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="words-para1">Book expert home cleaners and handymen at a moment's notice. Just pick a time
          and we’ll do the rest.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 d-sm-none d-xs-none d-none d-md-block">
          <form  action="{{route('booking')}}" method="get" onsubmit="return validateForm()">
            @csrf
            <div class="btn-group" role="group" aria-label="Basic example">
              <input type="email" placeholder="Email Address" class="btn-group1 border border-info" id="email">
              <input type="number" placeholder="Zip Code" class="btn-group2 border border-info" id="zip">
              <button type="submit" class="btn-form border border-info">Continue<i class="pe-7s-angle-right"></i></button>
            </div>
          </form>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12 col-xs-12 d-lg-none d-md-none">
          <form  action="{{route('booking')}}" method="get" onsubmit="return validateForm1()">
            @csrf
            <div class="row">
                <div class="mb-3 mt-2">
                    <input type="email" placeholder="Email Address" class="form-control btn-group3 border border-info" id="email1" aria-describedby="emailHelp">  
                </div>
            </div>
            <div class="row">
                <div class="mb-3 mt-2">
                    <input type="number" placeholder="Zip Code" class="form-control btn-group4 border border-info" id="zip1" aria-describedby="emailHelp"> 
                </div>
            </div>
            <div class="row">
                <div class="mb-3 mt-2">
                    <button type="submit" class="btn-form1 border border-info">Continue</button>
                </div>
            </div>
        </form>
        </div>
      </div>
     
    </div>
  </div>

  <div class="container-fluid footer">
    
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <p class="footp1">OUR LOCATIONS</p>
          <span class="footp2">Clenly</span>
          <br>
          <span class="footp3">57 A Gray Street</span>
          <br>
          <span class="footp3">Plympton </span>
          <br>
          <span class="footp3">5038 </span>
          <br>
          <span class="footp3">South Australia </span>
          <br>
          <span class="footp3">cleanly@gmail.com </span>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="footer-icon">
            <span class="social-icon">
              <a href=""><i class="bi bi-facebook d-inline px-2"></i></a>
              <a href=""><i class="bi bi-twitter d-inline px-2"></i></a>
              <a href=""><i class="bi bi-linkedin  d-inline px-2"></i></a>
              <a href=""><i class="bi bi-whatsapp d-inline px-2"></i></a>
            </span>
            <p class="footer-para">© indhulibin 2023</p>
            <span class="footer-para1">indhumohan19@gmail.com</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <p class="footp1">QUICK LINK</p>
          <div class="qlink">
            <ul>
              <li><a href="#s2">Services</a></li>
              <li><a href="#s1">How to work</a></li>
              <li><a href="#" id="top">BACK TO TOP</a></li>
            </ul>
          </div>
        </div>

      </div>
  
  </div>
  <script>
  function validateForm() {
        var email = document.getElementById("email").value;
        var zip = document.getElementById("zip").value;
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (email === "") {
            alert("Email Address must be filled out");
            return false;
        }
        else if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
        }
        if (zip === "") {
            alert("Zip Code must be filled out");
            return false;
        }

        return true;
    }
    function validateForm1() {
        var email1 = document.getElementById("email1").value;
        var zip1 = document.getElementById("zip1").value;
        var emailPattern1 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (email1 === "") {
            alert("Email Address must be filled out");
            return false;
        }
        else if (!emailPattern1.test(email1)) {
        alert("Please enter a valid email address");
        return false;
        }
        if (zip1 === "") {
            alert("Zip Code must be filled out");
            return false;
        }

        return true;
    }
</script>
  
   

</body>
</html>