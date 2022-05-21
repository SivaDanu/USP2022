<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>FlexStart</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('transaction.index')}}">Transactions</a></li>
          <li>
              @if (Auth::user()->role_id == 1)
              <a class="nav-link scrollto" href="{{route('typecar.index')}}">Type Cars</a>
              @endif
          </li>
          <li class="dropdown"><a href="#"><span>Income, Data User & Etc.</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/transaction/income/{nota}">Income</a></li>
              <li>
                  @if (Auth::user()->role_id == 1)
                  <a href="{{route('user.index')}}">Data Users</a>
                  @endif
              </li>
              <li class="dropdown"><a href="#"><span>Other Like : </span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><form action="{{route('logout')}}" method="POST" value="Logout">
                    @csrf
                    <button>Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://www.instagram.com/siva_danu/">Instagram</a></li>
          {{-- <li>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button>
                    <a href="" class="nav-link scrollto">Log Out</a>
                </button>
              </form>
          </li> --}}
          <li>
            @if (Auth::user()->role_id == 1)
              <a class="getstarted scrollto" href="{{route('transaction.create')}}">Lets Do Transaction</a>
            @endif
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Inner Page</li>
        </ol>
        <h2>Inner Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <h1 align="center">Data Income</h1>
            {{-- <a href="{{route('transaction.create')}}">
                <button class="btn btn-primary">
                    Add New Transaction
                </button> </a> --}}
                {{-- @if (Auth::user()->role_id == 1) --}}
                    {{-- <a href="{{route('transaction.create')}}">
                        <button class="btn btn-primary">
                            Add New Transaction
                        </button>
                    </a> --}}
                {{-- @endif --}}
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Total Client: </th>
                        {{-- <th>Id : </th> --}}
                        <th>Total Income : </th>
                        {{-- <th>Name : </th>
                        <th>Type Vehicle : </th>
                        <th>Total : </th>
                        <th>Date : </th>
                        <th>Action : </th> --}}
                    </tr>
                    @php
                        $nomor = 1;
                        // $sum = 0;
                        // while($row = mysqli_fetch_array($total_rows)):
                        // $total = 
                        // $total_income = $nomor*$total;
                    @endphp
                    @foreach ($data_income as $income)
                    {{-- echo $transaction->total->type; --}}
                    <tr>
                        <td>{{$nomor++}}</td>
                        {{-- <td>{{$transaction->id}}</td> --}}
                        <td>{{$income->total}}</td>
                        {{-- <td></?php echo $total_income; ?></td> --}}
                        {{-- <td></?php echo $to ?></td> --}}
                        {{-- <td>{{$transaction->name}}</td>
                        <td>{{$transaction->type}}</td>
                        <td>{{$transaction->total}}</td>
                        <td>{{$transaction->date}}</td> --}}
                        {{-- <td>
                            <a href="{{route('transaction.edit', $transaction->nota)}}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href="/transaction/detail/{$nota}">
                                <button class="btn btn-info">Show</button>
                            </a>
                            @if (Auth::user()->role_id == 1)
                                <form action="{{route('transaction.destroy', $transaction->nota)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </form>
                            @endif
                        </td> --}}
                    </tr>
                    @endforeach
                    {{-- </?php endwhile; ?> --}}
                </table>
        </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src={{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src={{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src={{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src={{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src={{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src={{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src={{asset('assets/js/main.js')}}"></script>

</body>

</html>
