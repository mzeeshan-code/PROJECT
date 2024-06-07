
<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMDS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="css/style.css">
  <script type="text/javascript">
            window.history.forward();
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php require_once 'header.php';?>
    <div class="container-fluid no-gutters" id="home">
    <?php 
    if(isset($_SESSION['status'])){
      echo $_SESSION['status'];
      unset($_SESSION['status']);
    }
    ?>

              <div class="container-sm">
                <div class="col-md-4 home">
                    <img src="images/medicine.png" alt="">
                </div>
                <div class="col-md-6 home">                
                    <h2>Welcome to Our
                    </h2>
                    <h1>Online Medicine</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <a href="about.php"><button class="btn btn-primary">Read More</button></a>
                </div>
              </div>
    </div>

  <section class="feature_section  layout_padding">
    <div class="container">
      <div class="feature_container">
        <div class="box">
          <div class="img-box">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px" y="0px" viewBox="0 0 422.518 422.518" style="enable-background:new 0 0 422.518 422.518;"
              xml:space="preserve">
              <path d="M422.512,215.424c0-0.079-0.004-0.158-0.005-0.237c-0.116-5.295-4.368-9.514-9.727-9.514h-2.554l-39.443-76.258
             c-1.664-3.22-4.983-5.225-8.647-5.226l-67.34-0.014l2.569-20.364c0.733-8.138-1.783-15.822-7.086-21.638
             c-5.293-5.804-12.683-9.001-20.81-9.001h-209c-5.255,0-9.719,4.066-10.22,9.308l-2.095,16.778h119.078
             c7.732,0,13.836,6.268,13.634,14c-0.203,7.732-6.635,14-14.367,14H126.78c0.007,0.02,0.014,0.04,0.021,0.059H10.163
             c-5.468,0-10.017,4.432-10.16,9.9c-0.143,5.468,4.173,9.9,9.641,9.9H164.06c7.168,1.104,12.523,7.303,12.326,14.808
             c-0.216,8.242-7.039,14.925-15.267,14.994H54.661c-5.523,0-10.117,4.477-10.262,10c-0.145,5.523,4.215,10,9.738,10h105.204
             c7.273,1.013,12.735,7.262,12.537,14.84c-0.217,8.284-7.109,15-15.393,15H35.792v0.011H25.651c-5.523,0-10.117,4.477-10.262,10
             c-0.145,5.523,4.214,10,9.738,10h8.752l-3.423,35.818c-0.734,8.137,1.782,15.821,7.086,21.637c5.292,5.805,12.683,9.001,20.81,9.001
             h7.55C69.5,333.8,87.3,349.345,109.073,349.345c21.773,0,40.387-15.545,45.06-36.118h94.219c7.618,0,14.83-2.913,20.486-7.682
             c5.172,4.964,12.028,7.682,19.514,7.682h1.55c3.597,20.573,21.397,36.118,43.171,36.118c21.773,0,40.387-15.545,45.06-36.118h6.219
             c16.201,0,30.569-13.171,32.029-29.36l6.094-67.506c0.008-0.091,0.004-0.181,0.01-0.273c0.01-0.139,0.029-0.275,0.033-0.415
             C422.52,215.589,422.512,215.508,422.512,215.424z M109.597,329.345c-13.785,0-24.707-11.214-24.346-24.999
             c0.361-13.786,11.87-25.001,25.655-25.001c13.785,0,24.706,11.215,24.345,25.001C134.89,318.131,123.382,329.345,109.597,329.345z
              M333.597,329.345c-13.785,0-24.706-11.214-24.346-24.999c0.361-13.786,11.87-25.001,25.655-25.001
             c13.785,0,24.707,11.215,24.345,25.001C358.89,318.131,347.382,329.345,333.597,329.345z M396.457,282.588
             c-0.52,5.767-5.823,10.639-11.58,10.639h-6.727c-4.454-19.453-21.744-33.882-42.721-33.882c-20.977,0-39.022,14.429-44.494,33.882
             h-2.059c-2.542,0-4.81-0.953-6.389-2.685c-1.589-1.742-2.337-4.113-2.106-6.676l12.609-139.691l28.959,0.006l-4.59,50.852
             c-0.735,8.137,1.78,15.821,7.083,21.637c5.292,5.806,12.685,9.004,20.813,9.004h56.338L396.457,282.588z" />
<g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>
          </div>
          <div class="detail-box">
            <h5>
              Fast Delivery
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="m471.728 84.718h-431.456c-22.206 0-40.272 18.066-40.272 40.272v243.623 18.395.005c0 22.205 18.064 40.27 40.27 40.27h431.46c22.205 0 40.27-18.065 40.27-40.27v-.005-18.395-243.623c0-22.206-18.066-40.272-40.272-40.272zm-431.456 20h431.455c11.179 0 20.272 9.094 20.272 20.272v233.623h-294.622c-5.522 0-10 4.477-10 10s4.478 10 10 10h294.623v8.395c0 11.178-9.094 20.272-20.272 20.272h-431.456c-11.178 0-20.272-9.094-20.272-20.273v-8.395h89.418c5.522 0 10-4.477 10-10s-4.478-10-10-10h-89.418v-233.622c0-11.178 9.094-20.272 20.272-20.272z" />
              <path
                d="m280.063 167.544h53.989c5.522 0 10-4.477 10-10s-4.478-10-10-10h-53.989c-5.522 0-10 4.477-10 10s4.477 10 10 10z" />
              <path
                d="m377.55 167.544h55.505c5.522 0 10-4.477 10-10s-4.478-10-10-10h-55.505c-5.522 0-10 4.477-10 10s4.477 10 10 10z" />
              <path
                d="m280.063 210.314h152.992c5.522 0 10-4.477 10-10s-4.478-10-10-10h-152.992c-5.522 0-10 4.477-10 10s4.477 10 10 10z" />
              <path
                d="m280.063 254.169h45.989c5.522 0 10-4.477 10-10s-4.478-10-10-10h-45.989c-5.522 0-10 4.477-10 10s4.477 10 10 10z" />
              <path
                d="m422.75 234.169h-38.993c-13.348 0-24.207 10.859-24.207 24.207v37.636c0 13.348 10.859 24.208 24.207 24.208h38.993c13.348 0 24.207-10.859 24.207-24.208v-37.636c0-13.348-10.859-24.207-24.207-24.207zm4.207 61.843c0 2.32-1.888 4.208-4.207 4.208h-38.993c-2.319 0-4.207-1.888-4.207-4.208v-37.636c0-2.32 1.888-4.207 4.207-4.207h38.993c2.319 0 4.207 1.887 4.207 4.207z" />
              <path
                d="m280.063 298.297h45.989c5.522 0 10-4.477 10-10s-4.478-10-10-10h-45.989c-5.522 0-10 4.477-10 10s4.477 10 10 10z" />
              <path
                d="m79.072 319.081h140.993c5.522 0 10-4.477 10-10v-39.955-114.582c0-5.523-4.478-10-10-10h-140.993c-5.522 0-10 4.477-10 10v114.583 39.955c0 5.522 4.478 9.999 10 9.999zm130.993-20h-120.993v-28.724c.03-.113.06-.227.091-.339 4.169-15.41 18.521-26.172 34.902-26.172h51.008c16.38 0 30.732 10.763 34.902 26.169.03.113.061.226.09.339zm-81.794-96.534c0-11.744 9.554-21.298 21.298-21.298s21.298 9.554 21.298 21.298-9.554 21.298-21.298 21.298-21.298-9.554-21.298-21.298zm81.794 33.371c-7.335-5.755-16.118-9.714-25.618-11.298 4.058-6.39 6.42-13.958 6.42-22.073 0-17.041-10.376-31.702-25.14-38.003h44.339v71.374zm-76.653-71.374c-14.765 6.301-25.14 20.963-25.14 38.003 0 8.114 2.362 15.683 6.42 22.073-9.501 1.583-18.285 5.543-25.619 11.298v-71.374z" />
              <path
                d="m159.66 360.3c-7.549-5.03-17.605 2.261-15.18 10.977 1.142 4.104 4.876 7.118 9.141 7.321 4.271.204 8.264-2.408 9.808-6.389 1.66-4.282.096-9.38-3.769-11.909z" />
            </svg>
          </div>
          <div class="detail-box">
            <h5>
              license of government
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px" y="0px" viewBox="0 0 315.377 315.377" style="enable-background:new 0 0 315.377 315.377;"
              xml:space="preserve">
              <g>
                <g>
                  <path
                    d="M107.712,181.769l-7.938,7.705c-1.121,1.089-1.753,2.584-1.753,4.146v3.288c0,3.191,2.588,5.779,5.78,5.779h47.4
                 c3.196,0,5.782-2.588,5.782-5.779v-4.256c0-3.191-2.586-5.78-5.782-5.78h-26.19l0.722-0.664
                 c17.117-16.491,29.232-29.471,29.232-46.372c0-13.513-8.782-27.148-28.409-27.148c-8.568,0-16.959,2.75-23.629,7.74
                 c-2.166,1.625-2.918,4.537-1.803,7.007l1.458,3.224c0.708,1.568,2.074,2.739,3.735,3.195c1.651,0.456,3.433,0.148,4.842-0.836
                 c4.289-2.995,8.704-4.515,13.127-4.515c8.608,0,12.971,4.28,12.971,12.662C137.142,152.524,127.72,162.721,107.712,181.769z" />
                </g>
                <g>
                  <path d="M194.107,114.096c-0.154-0.014-0.31-0.02-0.464-0.02h-1.765c-1.89,0-3.658,0.923-4.738,2.469l-35.4,50.66
                 c-0.678,0.971-1.041,2.127-1.041,3.311v4.061c0,3.192,2.586,5.78,5.778,5.78h32.322v16.551c0,3.191,2.586,5.779,5.778,5.779h5.519
                 c3.19,0,5.781-2.588,5.781-5.779v-16.551h5.698c3.192,0,5.781-2.588,5.781-5.78v-3.753c0-3.19-2.589-5.779-5.781-5.779h-5.698
                 v-45.189c0-3.19-2.591-5.779-5.781-5.779h-5.519C194.419,114.077,194.261,114.083,194.107,114.096z M188.799,165.045h-17.453
                 c4.434-6.438,12.015-17.487,17.453-25.653V165.045z" />
                </g>
                <g>
                  <path
                    d="M157.906,290.377c-68.023,0-123.365-55.342-123.365-123.365c0-64.412,49.625-117.443,112.647-122.895v19.665
                 c0,1.397,0.771,2.681,2.003,3.337c0.558,0.298,1.169,0.444,1.778,0.444c0.737,0,1.474-0.216,2.108-0.643l44.652-30
                 c1.046-0.702,1.673-1.879,1.673-3.139c0-1.259-0.627-2.437-1.673-3.139l-44.652-30c-1.159-0.779-2.654-0.857-3.887-0.198
                 c-1.232,0.657-2.003,1.941-2.003,3.337v15.254C70.364,24.547,9.54,88.806,9.54,167.011c0,81.809,66.558,148.365,148.365,148.365
                 c37.876,0,73.934-14.271,101.532-40.183l-17.111-18.226C219.38,278.512,189.4,290.377,157.906,290.377z" />
                </g>
                <g>
                  <path d="M284.552,89.689c-5.111-8.359-11.088-16.252-17.759-23.456l-18.344,16.985c5.552,5.995,10.522,12.562,14.776,19.515
                 L284.552,89.689z" />
                </g>
                <g>
                  <path d="M280.146,150.258l24.773-3.363c-1.322-9.74-3.625-19.373-6.846-28.632l-23.612,8.211
                 C277.135,134.163,279.047,142.165,280.146,150.258z" />
                </g>
                <g>
                  <path d="M242.999,45.459c-8.045-5.643-16.678-10.496-25.66-14.427l-10.022,22.903c7.464,3.267,14.64,7.301,21.327,11.991
                 L242.999,45.459z" />
                </g>
                <g>
                  <path d="M253.208,245.353l19.303,15.887c6.244-7.587,11.75-15.817,16.363-24.462l-22.055-11.771
                 C262.983,232.195,258.404,239.041,253.208,245.353z" />
                </g>
                <g>
                  <path d="M280.908,176.552c-0.622,8.157-2.061,16.264-4.273,24.093l24.057,6.802c2.666-9.426,4.396-19.18,5.146-28.99
                 L280.908,176.552z" />
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>

          </div>
          <div class="detail-box">
            <h5>
              support24/7
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->
    <!-- about section -->
    <?php include 'about.php'; ?>
  <!-- end about section -->

  <!-- discount section -->

  <section class="discount_section">
  <div class="container-fluid no-gutters" id="home">
                <div class="col-md-4 home">                
                    <h2 style="color: black;">You get</h2>
                    <h1>Any Medicine</h1>
                    <p><b>on</b></p>
                    <h1 style="color: navy;">10% DISCOUNT</h1>
                    <a href="#"><button class="btn btn-primary">Read More</button></a>
                </div>
                <div class="container-sm">
                <div class="col-md-6 home">
                    <img src="images/medicine.png" alt="">
                </div>
              </div>
    </div>  </section>


  <!-- end discount section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          What is says our clients
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Client
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Client
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_detail">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in
                  some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="client_box ">
                <div class="img-box">
                  <img src="images/client.png " alt="">
                </div>
                <div class="name">
                  <h5>
                    Randomised
                  </h5>
                  <h6>
                    <span>
                      Client
                    </span>
                    <img src="images/quote.png" alt="">
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <?php include 'contact.php'; ?>

  <!-- end contact section -->

  <!-- footer section -->
    <?php require_once 'footer.php'; ?>
</body>
</html>