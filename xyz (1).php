<?php
session_start();
@ob_start();
$id = $_SESSION['user_id'];
require 'config.php';
$select1 = "SELECT COUNT(accepted_id) As accept FROM users_campaign WHERE user_id=$id";
$result1 = mysqli_query($conn, $select1);
$row1 = mysqli_fetch_assoc($result1);


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kollab</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-2 col-md-2 xy ">

        <div class="ml-4 pb-5 pt-3 ">
          <img src="img/KOL_LAB_New Design-01.png" width="40%">
        </div>

        <div class="ml-3 pb-5 ">
          <ul class="navbar-nav yz">
            <li class="nav-item pb-1">
              <a class="nav-link " href="#">&nbsp;&nbsp;<span><i class="fa fa-edit"></i></span>&nbsp;&nbsp;My
                Project</a>
            </li>
            <li class="nav-item pb-1">
              <a class="nav-link" href="#">&nbsp;&nbsp;<span><i class="fa fa-th-large" aria-hidden="true"></i></span>&nbsp;&nbsp;All Project</a>
            </li>
            <li class="nav-item pb-1">
              <a class="nav-link" href="#">&nbsp;&nbsp;<span><i class="fa fa-inbox" aria-hidden="true"></i></span>&nbsp;&nbsp;Inbox</a>
            </li>
            <li class="nav-item pb-1">
              <a class="nav-link " href="#">&nbsp;&nbsp;<span><i class="fa fa-cube" aria-hidden="true"></i></span>&nbsp;&nbsp;Reward</a>
            </li>
            <li class="nav-item pb-1">
              <a class="nav-link" href="#">&nbsp;&nbsp;<span><i class="fa fa-signal" aria-hidden="true"></i>
                </span>&nbsp;&nbsp;All Wallet</a>
            </li>
            <li class="nav-item pb-1">
              <a class="nav-link" href="#">&nbsp;&nbsp;<span><i class="fa fa-eye" aria-hidden="true"></i></span>&nbsp;&nbsp;Profile</a>
            </li>
            <li class="nav-item pb-1">
              <a class="nav-link" href="#">&nbsp;&nbsp;<span><i class="fa fa-globe" aria-hidden="true"></i>
                </span>&nbsp;&nbsp;News</a>
            </li>
            <li class="nav-item pb-1">
              <a class="nav-link" href="#">&nbsp;&nbsp;<span><i class="fa fa-user" aria-hidden="true"></i>
                </span>&nbsp;&nbsp;Referrals</a>
            </li>
          </ul>

        </div>
        <div>

        </div>
      </div>
      <div class="col-lg-10 col-sm-12 pl-5 pr-3">
        <div class="row">
          <div class="col-lg-12 col-sm-12  pr-4 pl-4 py-4 pl-3 ">
            <div class="zx ">
              <a><i class="fa fa-cog pr-2 pl2" aria-hidden="true"></i>
              </a>
              <a>
                <i class="fa fa-bell-o pr-2 pl-2" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-sm-12 ">
            <div class="row">
              <div class="col-lg-5  col-sm-5 ">
                <a class="card-link" data-toggle="collapse" href="#collapseOne" style="text-decoration: none; color: black;">
                  <h4>
                    Active project <i class="fa fa-angle-down"></i>
                  </h4>
                </a>

                <small>Project that are open,confirm or not,posted or not yet</small>
              </div>
              <div class="col-lg-4 col-sm-3 float-right mt-2">
                <input class="x1 pl-3" type="text" placeholder="Search....">
              </div>
              <div class="col-lg-3 col-sm-2 x2 mt-2">

                <form action="#" class="pt-2">
                  <label for="cars">Sort by:</label>
                  <select name="cars" id="">
                    <option value="volvo">Latest </option>
                    <option value="saab">By date</option>
                    <option value="opel">By time</option>
                  </select>

                </form>
              </div>
            </div>

            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="row mt-2">
                <?php
                $loginuser = $_SESSION['user_id'];

                $query = "SELECT  * FROM new_campaign inner join users_campaign on users_campaign.campaign_id = new_campaign.campaign_id AND users_campaign.user_id='$loginuser' AND users_campaign.progress != '100'
                                 where users_campaign.permission ='active'";
                // $query = "SELECT  * FROM new_campaign inner join users_campaign on users_campaign.campaign_id = new_campaign.campaign_id
                //  where users_campaign.permission ='active' AND users_campaign.user_id='$_SESSION['user_id']'";
                $q = mysqli_query($conn, $query);
                // $check_campaign = mysqli_num_rows($q) > 0;
                if (mysqli_num_rows($q) > 0) {
                  while ($row = mysqli_fetch_array($q)) {
                    $id = $row['campaign_id'];
                ?>
                    <div class="col-lg-4 col-sm-12 my-2">
                      <div class="card bg">
                        <img class="card-img-top" src="img/3100.png" alt="Card image cap">
                        <div class="top-left pb-3 pt-3 pl-3 pr-5 ml-4">
                          <p>Addidas</p>
                          <small>Sport</small>
                        </div>
                        <div class="top-right  pt-2 pl-3 mr-4">
                          <p>350<i class="fa fa-eur" aria-hidden="true"></i></p>

                        </div>

                        <div class="card-body my-card-body pb-1">
                          <div class="group">
                            <div class="row g1 ">
                              <div class="column pl-3">
                                <h5>Live dangerous</h5>
                              </div>
                              <div class="column pl-5 ml-4">
                                <small> <i class="fa fa-plus" aria-hidden="true"></i></small>
                              </div>
                            </div>
                            <div class="row ">
                              <div class="pl-3">
                                <small>posted:</small>
                                <p>1/1/2020</p>
                              </div>
                              <div class="pl-4 ml-5">
                                <small>Closed:</small>
                                <p>1/2/2020</p>
                              </div>
                            </div>


                          </div>
                        </div>
                        <div class="card-body my-card-body1 pb-1">
                          <div class="group">
                            <div class="row">
                              <div class="col-sm-12 mt-2 mb-2">
                                <div class="progress " style="height: 3px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                  </div>
                                </div>
                                <div class="row " style="font-size: 15px;">
                                  <div class="col-lg-3"><small>taken</small></div>
                                  <div class=" col-lg-3"><small>Closed</small></div>
                                  <div class=" col-lg-3"><small>taken</small></div>
                                  <div class="col-lg-3"><small>posted</small></div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                } else {
                  ?>
                  <div class="alert alert-danger" role="alert">
                    <strong>No Records Found</strong>
                  </div>
                <?php
                }
                ?>

                <!-- <div class="col-lg-4 col-sm-12  my-2">
                  <div class="card bg">
                    <img class="card-img-top" src="img/2100.png" alt="Card image cap">
                    <div class="top-left pb-3 pt-3 pl-3 pr-5 ml-4">
                      <p>Addidas</p>
                      <small>Sport</small>
                    </div>
                    <div class="top-right  pt-2 pl-3 mr-4">
                      <p>350<i class="fa fa-eur" aria-hidden="true"></i></p>

                    </div>

                    <div class="card-body my-card-body pb-1">
                      <div class="group">
                        <div class="row g1 ">
                          <div class="column pl-3">
                            <h5>Live dangerous</h5>
                          </div>
                          <div class="column pl-5 ml-4">
                            <small> <i class="fa fa-plus" aria-hidden="true"></i></small>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="pl-3">
                            <small>posted:</small>
                            <p>1/1/2020</p>
                          </div>
                          <div class="pl-4 ml-5">
                            <small>Closed:</small>
                            <p>1/2/2020</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body my-card-body1 pb-1">
                      <div class="group">
                        <div class="row">
                          <div class="col-sm-12 mt-2 mb-2">
                            <div class="progress " style="height: 3px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                            <div class="row " style="font-size: 15px;">
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>Closed</small></div>
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>posted</small></div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12  my-2">
                  <div class="card bg">
                    <img class="card-img-top" src="img/4100.png" alt="Card image cap">
                    <div class="top-left pb-3 pt-3 pl-3 pr-5 ml-4">
                      <p>Addidas</p>
                      <small>Sport</small>
                    </div>
                    <div class="top-right  pt-2 pl-3 mr-4">
                      <p>350<i class="fa fa-eur" aria-hidden="true"></i></p>

                    </div>

                    <div class="card-body my-card-body pb-1">
                      <div class="group">
                        <div class="row g1 ">
                          <div class="column pl-3">
                            <h5>Live dangerous</h5>
                          </div>
                          <div class="column pl-5 ml-4">
                            <small> <i class="fa fa-plus" aria-hidden="true"></i></small>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="pl-3">
                            <small>posted:</small>
                            <p>1/1/2020</p>
                          </div>
                          <div class="pl-4 ml-5">
                            <small>Closed:</small>
                            <p>1/2/2020</p>
                          </div>
                        </div>


                      </div>
                    </div>
                    <div class="card-body my-card-body1 pb-1">
                      <div class="group">
                        <div class="row">
                          <div class="col-sm-12 mt-2 mb-2">
                            <div class="progress " style="height: 3px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                            <div class="row " style="font-size: 15px;">
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>Closed</small></div>
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>posted</small></div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-lg-5  col-sm-5 ">
                <a class="card-link" data-toggle="collapse" href="#collapseTwo" style="text-decoration: none; color: black;">
                  <h4>
                    Past project <i class="fa fa-angle-down"></i>
                  </h4>
                </a>

                <small>Successful project that have been paid for</small>
              </div>
              <div class="col-lg-4 col-sm-3 float-right mt-2">
                <input class="x1 pl-3" type="text" placeholder="Search....">
              </div>
              <div class="col-lg-3 col-sm-2 x2 mt-2">

                <form action="#" class="pt-2">
                  <label for="cars">Sort by:</label>
                  <select name="cars" id="">
                    <option value="volvo">Latest </option>
                    <option value="saab">By date</option>
                    <option value="opel">By time</option>
                  </select>

                </form>
              </div>
            </div>


            <div id="collapseTwo" class="collapse show" data-parent="#accordion">
              <div class="row">
                <div class="col-lg-4 col-sm-12 my-2">
                  <div class="card bg">
                    <img class="card-img-top" src="img/3100.png" alt="Card image cap">
                    <div class="top-left pb-3 pt-3 pl-3 pr-5 ml-4">
                      <p>Addidas</p>
                      <small>Sport</small>
                    </div>
                    <div class="top-right  pt-2 pl-3 mr-4">
                      <p>350<i class="fa fa-eur" aria-hidden="true"></i></p>

                    </div>

                    <div class="card-body my-card-body pb-1">
                      <div class="group">
                        <div class="row g1 ">
                          <div class="column pl-3">
                            <h5>Live dangerous</h5>
                          </div>
                          <div class="column pl-5 ml-4">
                            <small> <i class="fa fa-plus" aria-hidden="true"></i></small>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="pl-3">
                            <small>posted:</small>
                            <p>1/1/2020</p>
                          </div>
                          <div class="pl-4 ml-5">
                            <small>Closed:</small>
                            <p>1/2/2020</p>
                          </div>
                        </div>


                      </div>
                    </div>
                    <div class="card-body my-card-body1 pb-1">
                      <div class="group">
                        <div class="row">
                          <div class="col-sm-12 mt-2 mb-2">
                            <div class="progress " style="height: 3px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                            <div class="row " style="font-size: 15px;">
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class=" col-lg-3"><small>Closed</small></div>
                              <div class=" col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>posted</small></div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-12  my-2">
                  <div class="card bg">
                    <img class="card-img-top" src="img/2100.png" alt="Card image cap">
                    <div class="top-left pb-3 pt-3 pl-3 pr-5 ml-4">
                      <p>Addidas</p>
                      <small>Sport</small>
                    </div>
                    <div class="top-right  pt-2 pl-3 mr-4">
                      <p>350<i class="fa fa-eur" aria-hidden="true"></i></p>

                    </div>

                    <div class="card-body my-card-body pb-1">
                      <div class="group">
                        <div class="row g1 ">
                          <div class="column pl-3">
                            <h5>Live dangerous</h5>
                          </div>
                          <div class="column pl-5 ml-4">
                            <small> <i class="fa fa-plus" aria-hidden="true"></i></small>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="pl-3">
                            <small>posted:</small>
                            <p>1/1/2020</p>
                          </div>
                          <div class="pl-4 ml-5">
                            <small>Closed:</small>
                            <p>1/2/2020</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body my-card-body1 pb-1">
                      <div class="group">
                        <div class="row">
                          <div class="col-sm-12 mt-2 mb-2">
                            <div class="progress " style="height: 3px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                            <div class="row " style="font-size: 15px;">
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>Closed</small></div>
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>posted</small></div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12  my-2">
                  <div class="card bg">
                    <img class="card-img-top" src="img/4100.png" alt="Card image cap">
                    <div class="top-left pb-3 pt-3 pl-3 pr-5 ml-4">
                      <p>Addidas</p>
                      <small>Sport</small>
                    </div>
                    <div class="top-right  pt-2 pl-3 mr-4">
                      <p>350<i class="fa fa-eur" aria-hidden="true"></i></p>

                    </div>

                    <div class="card-body my-card-body pb-1">
                      <div class="group">
                        <div class="row g1 ">
                          <div class="column pl-3">
                            <h5>Live dangerous</h5>
                          </div>
                          <div class="column pl-5 ml-4">
                            <small> <i class="fa fa-plus" aria-hidden="true"></i></small>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="pl-3">
                            <small>posted:</small>
                            <p>1/1/2020</p>
                          </div>
                          <div class="pl-4 ml-5">
                            <small>Closed:</small>
                            <p>1/2/2020</p>
                          </div>
                        </div>


                      </div>
                    </div>
                    <div class="card-body my-card-body1 pb-1">
                      <div class="group">
                        <div class="row">
                          <div class="col-sm-12 mt-2 mb-2">
                            <div class="progress " style="height: 3px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              </div>
                            </div>
                            <div class="row " style="font-size: 15px;">
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>Closed</small></div>
                              <div class="col-lg-3"><small>taken</small></div>
                              <div class="col-lg-3"><small>posted</small></div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>
          <div class="col-lg-3 col-sm-12 my-2 ">
            <div class="yi">
              <div class="text-center pt-5 pb-3 ">
                <img class="x3 img-fluid" src="img/img_avatar.png" width="40%">

              </div>
              <div class="text-center x4">
                <h5>Susanne Hu</h5>
                <p>Shanghai, China</p>
              </div>
              <div class="text-center mr-4 ml-4 mt-5 mb-5 yu">
                <div class="row ">
                  <div class="col-sm-6 text-center pt-5 pb-3" id="x5">
                    <h3>437</h3>
                    <small>JOBS OPEN</small>
                  </div>
                  <div class=" col-sm-6 text-center pt-5 pb-3 " id="x6">
                    <h3>422</h3>
                    <small>JOBS CLOSE</small>
                  </div>
                  <div class="pl-4 pb-3 ml-2" id="x7">
                    <h3 class="">13780&nbsp;<i class="fa fa-eur" aria-hidden="true"></i>
                    </h3>
                    <small>EARN SINCE START</small>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>