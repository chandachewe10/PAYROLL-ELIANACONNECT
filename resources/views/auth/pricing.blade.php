
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GET STARTED::HR PAYROLL MANAGEMENT SYSTEM</title>
  <meta name="description" content="This is the cloud based  Payroll Management System developed by Eliana Connect which is an integral part of any business and it is an important HR / accounting  function that needs to be handled with the utmost caution and confidentiality.  The main functions of this payroll system will be to run the payroll for all employees and compile their payslips in PDF Formats." />
<meta name="author" content="https://elianaconnect.com" />
  <link rel="stylesheet" href="{{asset('landing_page/css/style.css')}}">
  <!-- Favicons -->
  <link href="{{asset('landing_assets/img/fav.PNG')}}" rel="icon">
  <link href="{{asset('landing_assets/img/apple-touch-icon.PNG')}}" rel="apple-touch-icon">
</head>
<body>


<style type="text/css">
 .pricingTable{
            margin-top:30px;
            text-align: center;
            position: relative;
        }
        .pricingTable .pricing_heading:after{
            content: "";
            width: 36px;
            height: 29.5%;
            background:#EF476F;
            position: absolute;
            top: -1px;
            right: 0;
            z-index: 2;
            transform: skewY(45deg) translateY(18px);
            transition: all 0.4s ease 0s;
        }
        .pricingTable .title{
            font-size: 20px;
            font-weight: 700;
            line-height: 30px;
            color: #000;
            text-transform: uppercase;
            background: #EF476F;
            padding: 15px 0 0;
            margin: 0 35px 0 0;
            transition: all 0.4s ease 0s;
        }
        .pricingTable .value{
            display: block;
            font-size: 35px;
            font-weight: 700;
            color: #000;
            background: #EF476F;
            padding: 5px 0 10px;
            margin: 0 35px 0 0;
            transition: all 0.4s ease 0s;
        }
        .pricingTable:hover .title,
        .pricingTable:hover .value{
            color: #fff;
        }
        .pricingTable .month{
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #fff;
            text-transform: uppercase;
        }
        .pricingTable .content{
            border-left: 1px solid #f2f2f2;
            position: relative;
        }
        .pricingTable .content:after{
            content: "";
            width: 35px;
            height: 100%;
            background: #f8f8f8;
            box-shadow: 9px 9px 20px #ddd;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            transform: skewY(-45deg) translateY(-18px);
            transition: all 0.4s ease 0s;
        }
        .pricingTable .content ul{
            padding: 0;
            margin: 0 35px 0 0;
            list-style: none;
            background: #fff;
        }
        .pricingTable .content ul li{
            display: block;
            font-size: 15px;
            color: #333;
            line-height: 23px;
            padding: 11px 0;
            border-bottom: 1px solid #f2f2f2;
        }
        .pricingTable .link{
            background: #fff;
            padding: 20px 0;
            margin-right: 35px;
            border-bottom: 1px solid #f2f2f2;
        }
        .pricingTable .link a{
            display: inline-block;
            padding: 9px 20px;
            font-weight: 700;
            color: #EF476F;
            text-transform: uppercase;
            border: 1px solid #EF476F;
            background: #fff;
            transition: all 0.4s ease 0s;
        }
        .pricingTable:hover .link a{
            color: #fff;
            background: #06D6A0;
            border: 1px solid #06D6A0;
        }
        .pricingTable:hover .pricing_heading:after,
        .pricingTable:hover .title,
        .pricingTable:hover .value{
            background:#06D6A0;
        }
        @media only screen and (max-width: 990px){
            .pricingTable{
                margin-bottom: 35px;
            }
        }   
</style>

@include('sweetalert::alert')
  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <header class="templateux-navbar" role="banner">

      <div class="container"  data-aos="fade-down">
        <div class="row">

          <div class="col-1 templateux-logo">
             <img src="{{asset('landing_assets/img/logo1.PNG')}}" alt="E-SYSTEMS" class="img-fluid" style="width:80px; height:80px; border-radius:100%">
          </div>
          <nav class="col-11 site-nav">
            <button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> <!-- .templateux-toggle -->

            <ul class="sf-menu templateux-menu d-none d-md-block">
              <li class="active">
                <a target="_blank" href="https://elianaconnect.gitbook.io/product-docs/" class="animsition-link">Docs</a>
              </li>
             
              <li class="active">
                <a href="{{route('register')}}" class="animsition-link">Get Started</a>
              </li>

              <li class="active">
                <a href="{{route('pricing')}}" class="animsition-link">Pricing</a>
              </li>
			  <li class="active">
                <a href="{{route('login')}}" class="animsition-link">Employer Login</a>
              </li>
			  <li class="active">
                <a href="{{'login_view'}}" class="animsition-link">Employee Login</a>
              </li>
              
             
              </li>
                <li class="active">
                <a href="{{'agents_login_view'}}" class="animsition-link">Agent Login</a>
              </li>
              
            <!--
                <li class="active">
                <a href="{{'agents_register_view'}}" class="animsition-link">Agent Registration</a>
              </li>
             -->
             
              
              <li><a href="{{'contact_us'}}" class="animsition-link">Contact</a></li>
            </ul> <!-- .templateux-menu -->

          </nav> <!-- .site-nav -->
          

        </div> <!-- .row -->
      </div> <!-- .container -->
    </header> <!-- .templateux-navba -->
    
    <div class="templateux-cover" style="background-image: url({{asset('landing_page/images/hero_1.jpg')}})">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">Get Started<strong> - For Free  </strong></h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">Free Human Resorce and Payroll Software</p>
          
            
          </div>
           
        </div>
      </div>
    </div> <!-- .templateux-cover -->

<br>
    <div class="col-12 text-center mb-5">
          <h2><strong>Get Started</strong></h2>
          <p>Please select your Plan </p>
        </div>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-6">
            <div class="pricingTable">
                <div class="pricing_heading">
                    <h3 class="title">Free Plan</h3>
                    <span class="value">
                        $0.00
                        <span class="month">per month</span>
                    </span>
                </div>
                <div class="content">
                    <ul>
                        <li>Compile & Run Employee Payslips</li>
                        <li>Downloads of Payslips</li>
                        <li>Add up to 5 Employees</li>
                        <li>Employee QRCODE Attendance</li>
                        <li>Employee self on-boarding</li>
                    </ul>
                    <div class="link">
                        <a href="#">sign up</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-sm-6">
            <div class="pricingTable">
                <div class="pricing_heading">
                    <h3 class="title">Premium Plan</h3>
                    <span class="value">
                        $1
                        <span class="month">per month</span>
                    </span>
                </div>
                <div class="content">
                    <ul>
                        <li>Compile & Run Employee Payslips</li>
                        <li>Downloads of Payslips</li>
                        <li>Share Payslips to Employees Portal </li>
                        <li>Employees Self Downloads of Payslips </li>
                        <li>Employees Self Emailing of Payslips </li>
                        <li>Salary advance online application</li>
                        <li>Overtime online application </li>
                        <li>Leave days online application</li>
                        <li>Employee QRCODE/GPS Attendance</li>
                        <li>Employee self on-boarding</li>
                        <li>Unlimited Branches</li>
                        <li>Unlimited Employees</li>
                    </ul>
                    <div class="link">
                        <a href="#">sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{asset('landing_page/js/scripts-all.js')}}"></script>
<script src="{{asset('landing_page/js/main.js')}}"></script>
</body>
</html>
