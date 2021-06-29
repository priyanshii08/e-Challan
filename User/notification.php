<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notify</title>


    <link rel="stylesheet" href="user.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>




    <style media="screen">
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(to right, #267871, #136a8a);

  /* background: #136a8a; */
}
.center{
  display: flex;
  justify-content: center;
  align-items: center;
}
.notification{
  width: 50px;
  height: 50px;
  background: white;
  border-radius: 50%;
  position: relative;
}
.num{
  position: absolute;
  top: -2px;
  right: -2px;
  background: rgb(230, 85, 85);
  width: 20px;
  height: 20px;
  border-radius: 50%;
  color: white;
}
.number .jaii{
  color: #fff;
}
.notification input {
  position: absolute;
  width: 100%;
  height: 100%;
  cursor: pointer;
  appearance: none;
  -webkit-appearance: none;
}
.notification input::before{
  content: '\f0f3';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: 'Font Awesome 5 Free';
  font-weight: 700;
  font-size: 1.8em;
  color: rgb(43, 43, 43);
}
.notification .box{
  width: 200px;
  height: 250px;
  background: white;
  position: absolute;
  border-radius: 20px;
  top: -250px;
  left: -200px;
  clip-path: circle(0% at 100% 100%);
  transition: clip-path 0.4s;
}
.notification input:checked ~ .box{
  clip-path: circle(141.4% at 100% 100%);
}
.notification .heading{
  margin:  0.2em auto;
  background: linear-gradient(to right, #267871, #136a8a);
  background: linear-gradient(to bottom, #207a2f, #136a8a);
  border-radius: 18px;
  color: white;
  box-shadow:  0 0 10px rgba(0, 0, 0, 0.432);
  width: 95%;
  height: 40px;
}
.notification_box{
  margin: 0.4em auto 0 auto;
  width: 85%;
  height: 190px;
  overflow-x: auto;
}
.notification_box p{
  margin-bottom: 0.4em;
  color: rgb(43, 43, 43);
}
.notification_box::-webkit-scrollbar{
  width: 2px;
}
.notification_box::-webkit-scrollbar-thumb{
  background: #f1f1f1;
}
.notification_box::-webkit-scrollbar-thumb{
  background: #888;
}
.notification_box::-webkit-scrollbar-thumb:hover{
  background: #555;
}

    </style>


</head>


<body class="sb-nav-fixed">
  <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
              <div class="sb-sidenav-menu">
                  <div class="nav">
                      <div class="sb-sidenav-menu-heading">Core</div>
                      <a class="nav-link" href="user.html">
                          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                          Dashboard
                      </a>
                      <div class="sb-sidenav-menu-heading">Updates</div>
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                          <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                          Pay Challan
                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                      </a>
                      <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                          <nav class="sb-sidenav-menu-nested nav">
                            <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_H9BPfTxqThtQLj/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
      <script>
        (function(){
          var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
          if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
          s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['_rzp_'];
          rzp && rzp.init && rzp.init()}})();
      </script>
    </div>
                          </nav>
                      </div>



                      <a class="nav-link collapsed" href="history.html" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                          <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Settings
                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                      </a>
                      <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                          <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                  Authentication
                                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>
                              <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                  <nav class="sb-sidenav-menu-nested nav">

                                      <a class="nav-link" href="history.html">Transaction History</a>
                                      <a class="nav-link" href="password.html">Forgot Password</a>
                                  </nav>
                              </div>
                              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                  Layouts
                                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>
                              <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                  <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="dark.html">Dark Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                  </nav>
                              </div>
                          </nav>
                      </div>
                      <div class="sb-sidenav-menu-heading">Addons</div>
                      <a class="nav-link" href="http://localhost/phpdoc/minor%20project/User/notification.php">
                          <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
                          Notification





                      </a>
                      <a class="nav-link" href="http://localhost/phpdoc/minor%20project/feedbacks.php">
                          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Feedback
                      </a>

                      <a class="nav-link" href="http://localhost/phpdoc/minor%20project/home.html">
                          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Log Out
                      </a>
                  </div>
              </div>
          <!--    <div class="sb-sidenav-footer">
                  <div class="small">Logged in as:</div>
                  Admin Portal
              </div>-->
          </nav>
      </div>















<div class="">


    <div class="notification center">
        <input type="checkbox" name="" id="">
        <div class="num number center">4</div>
        <div class="box">
            <div class="heading center">
                <p class="jaii"><i class="fas fa-bell"></i> <span class="number">4</span> Notifications</p>
            </div>


            <div class="notification_box">
              <?php
              include 'config.php';
              $view='select * from new';
              $run=mysqli_query($conn,$view);

              while ($row=mysqli_fetch_array($run)) {
                // code...
              //  $S_no=$row[0];
                //$name=$row[1];
              //  $Challan_no=$row[2];
                //$crime=$row[3];
            //    $vechile_no=$row[4];//
                $message=$row[5];



               ?>
                <p><i class="fas fa-user"></i><?php echo $message; ?></p>
                <?php } ?>
            <!--    <p><i class="fas fa-user"></i> Someone liked your photo</p>
                <p><i class="fas fa-user"></i> Someone liked your photo</p>
                <p><i class="fas fa-user"></i> Someone liked your photo</p>
                <p><i class="fas fa-user"></i> Someone liked your photo</p>-->

            </div>
        </div>
    </div>

    <script>
        const box = document.querySelectorAll('.notification_box p');
        const number = document.querySelectorAll('.number');
        console.log(box.length);

        number.forEach((e) => {
            e.innerText = box.length;
        });
    </script>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="user.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>




</body>
</html>
