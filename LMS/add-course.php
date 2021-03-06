<?php
require_once '../backend/config.php';
if(!(isset($_SESSION['logged'])) || $_SESSION['logged'] != true){
	header('Location: login.php');
}else if($_SESSION['role'] != 1){
  session_destroy();
  header('Location: login.php');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="alternate" type="application/json+oembed"
    href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F220715805341550"
    title="oEmbed Form">
  <link rel="alternate" type="text/xml+oembed"
    href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F220715805341550"
    title="oEmbed Form">
  <meta property="og:title" content="Class Registration">
  <meta property="og:url" content="https://form.jotform.com/220715805341550">
  <meta property="og:description" content="Please click the link to complete this form.">
  <meta name="slack-app-id" content="AHNMASS8M">
  <link rel="shortcut icon"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOQAAADdCAMAAACc/C7aAAABfVBMVEX19fb29vf4+PguAGL39/j39/f5+fn29vY1KLpZRMf///9Wgd6Ww+mswO6fwN8AaMiVze5ru+mfz+9RV6kjAFxTPMZukuKYjNmBbJ1UQMXJ1fIsHLj9/vofAFq/3uuhmdsAYseEfdHu7PYqFbeap+N8dc+Yx+q1reJ0kNkuAF0zHqIxI7nc1+ItDGa+2O/M4PF4pNqHjtuSnuGpt92GdKDLw9VDInCsyOKekLLo8PZXTsVMe90/ML1bhd9SddFPbsPS2OuxpMFdRoGbjbAAAFC6sMhJLnTW4u44FWl6wevI3fDj3+kuQJO7yu4ZALVMZ9NuWo4/N4KTlsdyZY5kUoWCbp6p1e3GvtFvW46ejrNPLXrb7vleSIJXO37OyOt7nd52ZdAXAGdbsOYLSqYeec41itVNoN0vD3omVKU/JZYnJ4AmF3aSst5XPq5AIX0tNrw5T8SupeJpYsbGv+tJLqYlAZ5OSrZiVJlNSJmAg71eY6+jps5vbqV5ZKN6bcDDBe68AAAR4UlEQVR4nOXd+V/bRhYAcFkSEzpNm4SIBoKUQ+QoxUBbsINZsmtzOnjp0iQcCYVmt9sjmyZtju2m2eNv39Fha0bzng6jw7Tv019KTMKX9+bNaHQpSvo4w6ICxJAYej8R+jugf6bC/vk+fur0SPAfz8CYSHmmAGWeiTxlyD6NYWWJyJNVq8riJKksEZnMqAYx0Kk8AVIVY3CRiYZkEiLKHIB6RZDxiQSMsDJRKnNH9lWtoDGBcmCRyY0gc1CRcYnEjf0o8x6USYZkOuNvBRlpBJSxrSd/ZNbGOOWpQMYaZWW5yH6qNQEyUgkjc1QmQPZjTJvKMpBRiUxklJSl1mtuyChlCch01ZrUmB6ZmzL9kEyMVHFkwYMydbUmN6ZLZbnIvo1RqfydIvPsPCmRqYwRysKRuSVyYOo1X6Q6EMh8q/V3gkSVA4U8oTFFKgtGpkwkSayMrddykEmMNbOfVBaLPGm1kp3skPkoT44ker0qFKyuqIT/QunIVEMSSaRitYRUVjYvNxWOmTiVhSIrsBFDdtYOxNZDlOZ8U4eVJSETVytsVM2WpVVCSqJcnm8Odb/4G0DSVcOqhmcRQuzt+aY/uZTdXk+OJMqKYbWo/PVKc37b9oZmilSWgEyQSNIxNGNVRrI/aWzPX26QwUSmH5LGAx1a9RDSnJ/fZMkseVCeHEkPDE2r2/DSzknmtiIoBxqJVuuMpmlGB1m/+slUkyHzqdcUK9eIatU0ub0GTHt+/rJCIGVxSPlfSoMkdMVwkEB77X1E2XbabHmd58RDktQ0J6xHOJItblnJNns9doCRCIAuONWqGQsIknix6ZTsaUUS200km0Mo+AlyOLs1d3jYUJhy3i/ZwUP6mVARJF21POTDCoF/EXvn/bgye2cztvMUj2RdhXZqTlR1SsDZXveMmrbipUn+iB4or1w5TIDMXhmFJKT6aKWuGYahtY92awqVmbTVRdY7BK5q0lOOMOWVilr8HIIjVVLd0SzDN2iGddRSpEMNpa2FkJByhMvlFUUtfFCiSKIsBkKfuVINtVC6aPX+uEqwDkUUQdlQC0aiRrWya2nhMKx9oWS9FV0YCSgb5zFlqUj6SDayWFvllf4cGYtkEwmmLBNJqhDRWdlwB47+YkdCQso5RFkm0myBiXRKdr2rJOShISCjlMF0OSIoy0TSMQNBBkeOdF34DENGFWzQfARlqcgDFNktWGK3ha9X3ZURrgyaz16UMnskejRpLmDlylJJ5a7TQ2KTpTAsXaVSOpLs40jNPT6mtbXwV+OUe6LyDIbMWAkhvWlSOULr1XDOYXFrncTIRm9Yui32SkGDEkUOmet4KlkmCZHquYuMUAazpas8VEtGqrKiG3V2PEKlcmZrV0EJIFV1Vm4+ZSLZ2nUHVjrdlXTqEj0JMuiwPWUhSOkf6R1oKV9BSoPNk4SOSX90ZJNYpc51WG9YKiUjhyCKZrSrpnDw0f36ipIAqat3PmRx69atkZERr/mUjBzS6fpMSGMddZixJnde4wElsUr2tcaHQYzs7e0dquUi2c9J7dUZ/ri5vciOm4kCVXEypE5mOaQTh+FcZj5RxiF1QjutnQ3NYqFtHKzb7ECLVHaAKdRY4JHIdo+TSuXDkFIpHekwaadardWqVZuaxNkxlwek5m4uJ0Ky3hNSzqrlI/XerqR38EHhVYK1LiHhetWVOyLyfKhgs0ZGTJM8kv9pKXI0bVUJiU+l+yvbjC7Y8pHErsNrWstOipRSOTI7NFBI5/IAOJMzyZFyKoWCLRtJ6AGyoDWOFJJAqUupdJV7QsGWi0Qaq4t8QJIj5VTOqQODxHe3nFV7EmT3DOWHYWVjUJDy4RWHbIWRJAIpzZUjs6RIZJQR3SuQZ5DoeoVSOZQjMnEiaS283yEgw30nGsmvYD3kHhkAJK22IxKpPdZTIYWDEW/dE6SyNCTpIIsAL4xdyQgPyu5fScKzCLciKAsZY4T6TgxyE09lSUgzxqg5p/RSIXUljAxSWQ4y1qityX0HHpS9v1NuPb0GWwqSVjdijNoMkMhopC61nt6BZRlIGpvH8LYAUK/iHzhfOCO1nm4qM16hJ0GSTuTc4Q3J9Rgkacy6sTXnxiaLxuwdJ4AVbPFIWtNijdwpAiyTyq2zUlAWRG80GpubWyPcwUjhSLofL9S0NphIflCSOzLykAaxd+HevXv+RkjRSGRDJxTGTjxyTkbe4ZCNC07cI8UjVbqYoFTRISkgGzLyLIek91yl23oKRRK6msiIDUlhDoEGZYNDzrpIdxYpEkmUiFPqQhzJq3MJqQKDcg6u1wKRxEZO3UlhjMHVKk6UWzLyFlyvxSHNzlFCo2bVkiA3YwblXq9es0VG7H4kmx69aHcQo7BEVwDkJoc89Oo183LFL4ugrcREzTjAEikehwCdZ4tP5YVuvRaDJATdeoSqFTqWlJFkVkaO8Mjz3XotBJm8rXqZRKtVRAKdRxiUWy7yfDGZJB3wWgHU+LCSDAl1Hn6m9AdlY6gAJK3JRx3WSkS1LqLVKiKhNQ8/UxJvEjnMHwld88AcVTy3a3i1io3HBJCz8qDcI3kjiSJflG3Va8hlzG4c4UZxyUOA9ip0Hm9ld17NFzlEqtJwNKwFhdAH+IWheG8NI4GF3VkdGZS5IVWyLg1Ha6XGflj7CK9WGzeGkFB75ZHe8tUblHkh2cwhEdstheoqekE6S/TjiESGkFB75Q+c/eXrrJofkkiLVVapHepuu+Kns7BDSQh5CCCFNY/XeUZIXkjnog4xj5a126Hej0l38UVeVLWGkNAcIrRXb41+L69yJXboMjpLW/CJzpU86DSJbXxASLUCIPktEDoXdJ7skTrdF7aPDau92gluDSAd9KSdgR5lAUgCIG8hnSdzJFFWDc5oGCstm/aIDImffZUuh4hEjgBKfmGne8g5NXOkTqp8x7HaBzXFJPypkO59oHKErjXzw8Ri9uytbsBIr73uZY4U0mhZj1tsKKri+R66gSVSg5Z05vHxbT+uivHZx934+lMnfjx79sdmtRNur+dJtki2HN/opsla01ar1EmieL6ne9cyMCLBzR3zyfIoHMuTE35M9uKvayw07fHR7mpr/dO/ebtZmSJNduToptGwWK9xmghwUgsfkvDmjnlz/D04Rofl+L77CzPYz/DNuWt///a7C2aGSJXs1y1XqD1crbIW0t0ZCJ25kxZC3Z9rBWw75tVRBDkegXRi6odzLK6dY3NIRsQKqY45vz7taKzVUVg3DbY/QkhsAkHW5umQT6c45J/PubGpZoSsKIvsIOpobL3qThfCHo+AJJ01BNmG5w/z9UmRW5khF1b3ax3CchEAQSTFrjXDtgROgPyHa7x2h2RVrs7Po0bsoPfKFVu4WsjJAfMYQ74HID/hkNqzrJFORJ0m6Bor2IjE9nYikMvJkPNmwUj0HsPwVbxZIGeKRnZPpyNrOnyTzmxi82RiZGHl6iOxnY8NdGkegYwbkz7y04IzSZDNyIj9q9OHRDYj5UvOTzNSeQhOIFbNRJHktCGRfTpjDCcSYmPGAUUivTXiRNYpRCpgb2XTB7LaOY1I8QkmQbAFby5If8XzY6HI8EMh/ETuU70/ZOJlXYbG+HKFDiWtMWdbPQ9k9yikUCRZh+aPuvtYs6yQ38vHk+wopEAkBe/rXadqv0hgTArIH4pHEhsYkdaC/0jaPpDJ9njOXdtSi0OCewJ15zmueSG/6e7xZIzE79VSdenRF05ndZ/qHoXE165JkY2hwpAk/MAdt1i9Bw71hxydCGLaCYYU/vprHjLTaTLy1kKVyI/JMuqUiMjw6Q690agc+8jxUIw+uc7iphdLTgwPL7P89aLtGb8tDuk8+FuK7jOHdb2yudlksb29/QGLG1+z+MiJuyyAmcKJyZf8yR33iFw5Xma/jaXnz58/ffrihT9Nflcc0pTX5kbwyGFi333/D1y8z8Vd2Dg8+ZpKIWxfji//9PPP1zJe1UU+jkd+4o41Fjz91EGigSC/OJaRwm776PSwM063C0PK9y8bG9xDQftC2jLypoB0PzZxnOk+VtTTo4CDrCr3ThDS+Cg9UjbSJ3wndsfy9E+drM4SBEoYKT8HzFrn33tCFBz5l2lEKRvtJX6KcT80vZTp6UkYWfHmj/DZZefM+cmQ00sysimvFSZuZnl6Mgppho8/jIfis4j7QE5cl5HCZruHnHxZFJI+Dj2kd8MOv78mNXLyqox8KfedyWZB5Wruh1Z07fDrFfpB3o5prl7fWe5kevEHilRJ+BmL0svB+kBC0+TSeLhap19lbUSQ4TkyeG5tEuTdnxGkLhmFgzJ/SF7KekjCSBKaI8H380QglxBkTN8Z9fOdB1KeKEOJtFaB5/FHIeH1OTSDXAWGpJ1HuUrI0KqVHULq6ZCgcXjikowU1jvep14pmV4+iCHFzVZrR4eeihCFnACR0DHIMDxL5o8Uz/FYBxXweQHpkRNyc3UPJoVqHf6ik+3F2QiS8o/6ssYU+BF0UVMIjFyWj0GEpYA/cCuZVyuAFLborJXum3dSIOFpcno8ekj61Xo12wvQe0rBqPKXRFpfBW8XOikSWLlW+Gr1J5BmEUj+IcR+z0mJRNYCQN95vSxV67JZwMPeSY03VrhrtE+KnLgsIS+NytVaAFJVgsNIa1ch+HuKIsoVXPBML0mLugp/wOz11okmyR/JFevaKhEuRE8+JsHeOv0qegLxPvSLmde7CbibfIJrlK2WeyV6P5mcDF2A7cYX8nEWUK2vSe6vtyGd3t0hxrp4tb3KPVHH2ypX7rLhx/5zwqH9kcWfnPj4Myc+d+NGEN2dcxaXnIvub99+/ubNG8cXrFvHbTVvZPBmCaO+T/0zW6q3+V9RbMV2onl8/Nq9S+DSxbdvv/SjzmKGhbPVb/36ARjL3HkQN7f/dD6tTc1oz569ePrLT8vLzlFWJW9k7+DD2OiY3RMi9u2XL69evX7z1ZMnzg63E96dAePBKQz+rL9m3QeNn0vLIO7s69SXF1n88rxJ8n6vVu8qOmtH6d1UQDrjvonFe0JgV6bfAJE3w8hl7hVHMxfd+JXklMgeUrf9AyxrkbtxQrWfYOfhEOQGXK3j4XnlaTiRF99W80bquvd4WqNdI9y7vVTlFYacgpFHoPGGNKdwidS8RN53n5CVI3KIeOewrJ0OEV7oZ17HLkOGkca/klXrJ0gi80R67xwytMWKeAfMEH6TB4xE+o5UrfKIvO89FjQ/pHd5mXVUo979ExzydspMgn3n87CRv0TprYe01VyRZ9xH0xlrjyrdZ6xyFw40l2HjGxgJ951X4Wp9FhTrY69Y181KfkimJPZjgx07VmnvNhgOaSOZhJHIkJzEE9mdPnxjXkhV2bGsekvnnnrMtVdsDkGQ4Hrns3AiuRHpFes7O3iOZB5IVTlY01Zt4W4mrr3qSHt9CiKtf0PI8MFX8L1+Z71YI7kmcujMgnVQpaE3PcS3VxjZBttOqFo/CRJZ9wbkv3tVlE/fURZ2qpRUKhiSILeXgUhjB2w7oUQGq9bugNTzehSxF0PVmikRk7RXGAkNyRshY9B1pjzjOyWoo5zKlUS/V1xV4Ey+gJAWlMjwaqdXrFP+DCka80Dir7vzkRW4vYLIOpTI0PmfXglMeQPyXUd8mH0uyLjXUZNLYCqfAUbjP/GJDIq1LRuLRfLt9SV4R/33liHFGrBwvcFvCbDofZ87Q759VxU6QllIcnwJiv+OAXFZjg+uC/G/3e5nF+47IRpz6jtK7KAcgh9zIZ/ZYAFd/Yp9n/e/8puYCkSKL4lHdyYThfD93N9b0DvFy0WCxrKQJ1Tqg4CM6zyZImOrdTCQqZUDjEQHZVokWq1F9p3UgzKlMsWQPLXIlIkcGGQq5WAjs0mlPijI+M7TdyojjCUgc6rXVIksG9mnUk+NzM2YflAmVQ5QteaGTJ/IcpH9KKOMxSMTtFcJmUDZBzJHYz/1Gq+UvmHwkalTmdqYN7Kveo1Wyh8veUgmQqZTxhgHCBmXSlwJfLb0ak00KFMogU+eYiTMjDUOFDK2XiEl/LEkxpyRiQYlotQTEJMlcpCRnBP9wABUa8J6jVDGxFAssoBEFossqVoT1mu/yvhEFobML5V5IP8PWygCSFt7GJsAAAAASUVORK5CYII=">
  <link rel="canonical" href="https://form.jotform.com/220715805341550" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
  <meta name="HandheldFriendly" content="true" />
  <title>add course</title>
  <style type="text/css">
    @media print {
      .form-section {
        display: inline !important
      }

      .form-pagebreak {
        display: none !important
      }

      .form-section-closed {
        height: auto !important
      }

      .page-section {
        position: initial !important
      }
    }
  </style>
  <link type="text/css" rel="stylesheet"
    href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402" />
  <link type="text/css" rel="stylesheet"
    href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.31739" />
  <link type="text/css" rel="stylesheet"
    href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.31739" />
  <script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
  <script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.31739" type="text/javascript"></script>
  <script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.31739" type="text/javascript"></script>
  <script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.31739"></script>
  <script type="text/javascript">	JotForm.newDefaultTheme = true;
    JotForm.extendsNewTheme = false;
    JotForm.newPaymentUIForNewCreatedForms = false;
    JotForm.newPaymentUI = true;

    JotForm.init(function () {
      /*INIT-START*/
      if (window.JotForm && JotForm.accessible) $('input_5').setAttribute('tabindex', 0);
      if (window.JotForm && JotForm.accessible) $('input_10').setAttribute('tabindex', 0);
      setTimeout(function () {
        $('input_11').hint('ex: 23');
      }, 20);
      setTimeout(function () {
        JotForm.initMultipleUploads();
      }, 2);
      /*INIT-END*/
    });

   
  </script>
  <!-- Custom CSS -->
  <link href="assets/css/styles.css" rel="stylesheet">

  <!-- Custom Color Option -->
  <link href="assets/css/colors.css" rel="stylesheet">

</head>
<body style="background-color: #f4f5f7;">
    <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->


  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light">
      <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
          <div class="nav-header">
            <a class="nav-brand" href="#">
              <img src="assets/img/logo-header.png" class="logo" alt="" />
            </a>
            <div class="nav-toggle"></div>
          </div>
          <div class="nav-menus-wrapper" style="transition-property: none;">
            <ul class="nav-menu">

              <li><a href="index.php">Home<span class="submenu-indicator"></span></a></li>

              <li><a href="full-width-course.php">Courses</a></li>

              <li><a href="contact.php">Contact</a></li>

              <li><a href="about-us.php">About</a></li>

            </ul>

            <ul class="nav-menu nav-menu-social align-to-right">

              <li class="login_click light active">
                <a href="dashboard.php">Dashboard</a>
              </li>
              <li class="login_click theme-bg">
                <a href="../backend/userController/logoutUser.php">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

<form class="jotform-form" action="../backend/courseController/addCourse.php" method="post" enctype="multipart/form-data" name="form_220715805341550" id="220715805341550" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="220715805341550" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Add course
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Fill out the form carefully
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Course Title </label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <input type="text" id="input_5" name="title" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder=" " data-component="textbox" aria-labelledby="label_5" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Course Owner </label>
        <div id="cid_10" class="form-input-wide" data-layout="half">
          <input type="text" id="input_10" name="owner" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_10" />
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> Duration </label>
        <div id="cid_11" class="form-input-wide" data-layout="half">
          <input type="number" id="input_11" name="duration" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_11" step="any" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Course description </label>
        <div id="cid_10" class="form-input-wide" data-layout="half">
          <textarea id="input_10" name="desc" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_10" ></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Category </label>
        <div id="cid_7" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="input_7" name="category" style="width:310px" data-component="dropdown">
            <option value=""> Please Select </option>
            <option value="networking"> Networking </option>
            <option value="development"> Develepment </option>
            <option value="security"> Security </option>
            <option value="soft-skills"> Soft Skills </option>
            
          </select>
        </div>
      </li>
      
      <li>
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Course Image </label>
        <div id="cid_10" class="form-input-wide" data-layout="half">
          <input type="file" name="image" class="form-textbox" data-defaultvalue="" style="width:310px" size="310">
        </div>
        
      </li>

      <li>
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Course Video </label>
        <div id="cid_10" class="form-input-wide" data-layout="half">
          <input type="file" name="video" class="form-textbox" data-defaultvalue="" style="width:310px" size="310">
        </div>
        
      </li>
      
      <li class="form-line" data-type="control_button" id="id_15">
        <div id="cid_15" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_15" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
     
    </ul>
  </div>
  


</form>
</body>
</html>