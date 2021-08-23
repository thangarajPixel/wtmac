<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to WTMAC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo-new.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#acquisition-criteria">Guiding Principles</a></li>
          <li><a class="nav-link scrollto" href="index.php#tabs">About WTMAC</a></li>
           <li><a class="nav-link scrollto" href="index.php#team">Our People</a></li>
		  <li><a class="nav-link scrollto" href="index.php#partners">Our Partners</a></li>
		  <li><a class="nav-link scrollto" href="index.php#news">News</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
		  <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">SEC Filings</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <div style="margin:100px 0px;">
<section class="section-bg mt-5">
      <div class="container">
         <div class="row">            
            <div class="col wow fadeInUp" data-wow-duration="1s"> 
			   <h2 class="text-center">Thank You</h2>
			  <h4 class="text-center">For spending your valuable time. We will reach you soon ...</h4>	  
            </div>
         </div>
      </div>
</section>
</div>

<?php
$aname = $_POST['aname'];
$aphone = $_POST['aphone'];
$aemail = $_POST['aemail'];
$amessage = $_POST['amessage'];
$source = $_POST['source'];


$to  = 'websupport@pixel-studios.com, thangaraj.pixel@gmail.com';

$subject = 'Welsbach :: Contact Enquiry';

$message = '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #f5f8fa;">
<tbody>
  <tr>
    <td style="padding: 30px;"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="background: #fff;">
      <tbody>
        <tr>
          <td align="center" style="background: #FFF; padding: 15px; border-top:5px solid #152b7e; " ><img src="http://pixel-studios.net/clients/welsbach/demo/assets/img/logo.png"/></td>
        </tr>
        <tr>
          <td align="center" style="padding:20px; color: #152b7e; font-family:Helvetica, Arial; font-size:22px;"> <b>Welsbach</b><br>
            &quot;Contact Enquiry &quot;</td>
        </tr>
        <tr>
          <td style="padding: 20px; "><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Name</td>
                </tr>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >'.$aname.'</td>
                </tr>
              <tr>
                <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                </tr>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Phone</td>
                </tr>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >'.$aphone.'</td>
                </tr> 
              <tr>
                <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                </tr>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Email</td>
                </tr>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >'.$aemail.'</td>
                </tr>              
              <tr>
                <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                </tr>				
				
                <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Message</td>
                </tr>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >'.$amessage.'</td>
                </tr>
              <tr>
                <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                </tr>
				<tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #929292; " >Source</td>
                </tr>
              <tr>
                <td height="30" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >'.$source.'</td>
                </tr>
              <tr>
                <td height="20" style="font-size: 16px; font-family:Helvetica, Arial; color: #454545; " >&nbsp;</td>
                </tr>
               
              </tbody>
            </table></td>
        </tr>
        </tbody>
    </table></td>
  </tr>
</tbody>
</table>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:contact@wtmac.co' . "\r\n";
//$headers .= 'From:'.$email. "\r\n";
$headers .= 'Bcc: websupport@pixel-studios.com, thangaraj.pixel@gmail.com' . "\r\n";



mail($to, $subject, $message, $headers);

?>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Contact Us</h3>
            <p><i class="bx bx-map"></i>
              #37-00 Singapore Land Tower,<br/>50 Raffles Place,<br/>Singapore 048623<p>
              <p><i class="bx bx-phone-call"></i> <a href="tel:+65 6978 7988" target="_blank">+65 6978 7988</a></p>
              <p><i class="bx bx-envelope"></i> <a href="mailto:contact@wtmac.co" target="_blank">contact@wtmac.co</a></p>
          </div>

          <div class="col-lg-3 col-md-6">
            <h3>Connect with Us</h3>
			<div class="social-links pt-3">
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			</div>
          </div>

          <div class="col-lg-6 col-md-12 footer-form">
            <h3>Reach Us</h3>
			<form onSubmit="return valid_chk3()" name="form" method="post" action="<?php echo BASE_URL; ?>thanks.php"  id="form">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="text" name="aname" class="form-control jsrequired" id="aname" placeholder="Your Name" required>
				  <input type="text" class="form-control jsrequired" name="aphone" id="aphone" placeholder="Your Phone" required onkeypress="return CheckNumericKeyInfo(event.keyCode, event.which)" ;="" maxlength="10">
                  <input type="email" class="form-control jsrequired" name="aemail" id="aemail" placeholder="Your Email" required>
                </div>
				<div class="col-sm-6 form-group">
					<textarea class="form-control jsrequired" name="amessage" id="amessage" placeholder="Message" required></textarea>
				</div>
				<div class="col-sm-12 text-right">
					<button type="submit">Send Message</button>
				</div>
              </div> 
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">

      <div class="text-center">
        <div class="copyright">
          &copy; Copyright Welsbach. All Rights Reserved. Design by <a href="https://www.pixel-studios.com/" target="_blank">Pixel Studios</a>.
        </div>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>