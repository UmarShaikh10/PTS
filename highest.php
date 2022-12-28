<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - html chart</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <div id="navbar">
    <h1>PTS</h1>
    <ul class="navlist">
      <li class="nav-li"><a href="Highest.php">Highest</a> </li>
      <li class="nav-li"><a href="login.php">login</a> </li>
      <li class="nav-li"><a href="register.php">Register</a> </li>
      <li class="nav-li"><a href="welcome.php">Home</a> </li>
      <li class="nav-li logout"><a href="logout.php">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16"
            height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
            <path fill-rule="evenodd"
              d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
          </svg></a> </li>

    </ul>


  </div>

  <!-- partial:index.partial.html -->
  <div class="container">
    <h1>1<sup>st</sup> January - 10<sup>th</sup> Februry</h1>
    <hr>
    <div class="chart">
      <div class="part percent-75">
        <div class="label">Suraj</div>
        <div class="bar red">aw

        </div>
      </div>
      <div class="part percent-25">
        <div class="label">Jay</div>
        <div class="bar blue">aw

        </div>
      </div>
      <div class="part percent-38">
        <div class="label">Umar</div>
        <div class="bar green">aw

        </div>
      </div>
      <div class="part percent-75">
        <div class="label">Waseem</div>
        <div class="bar yellow">aw

        </div>
      </div>
      <div class="part percent-50">
        <div class="label">Tanmay</div>
        <div class="bar pink">aw

        </div>
      </div>
    </div>
  
  </div>

  <style>
    #navbar {
      width: 85%;
    margin: 8px 82px;
    display: flex;
    padding: 8px 0;
    justify-content: space-between;
    align-items: flex-start;
    }

    a {
      font-size: 20px;
      font-weight: bolder;
    }

    #navbar ul li {
      display: inline-block;
      margin: 5px 20px;
      list-style: none;

    }

    #navbar h1 {
      color: white;
    }


    #navbar ul li a {
      text-decoration: none;
      color: white;
      text-transform: uppercase;
      font-size: 16px;
      transition: 0.5s;

    }

    #navbar ul li a:hover {
      color: rgb(255, 255, 255);
      font-weight: bolder;
      font-size: 20px;
      text-shadow: 0 0 7px rgba(2, 196, 255, 0.764), 0 0 3px rgb(0, 187, 255);
    }

    html,
    body {
      padding: 0px;
      margin: 0px;
      font-family: sans-serif;
      height: 100%;

    }

    body {
      display: flex;
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(graph.jpg)no-repeat center center/cover;




    }

    .container {
      background: none;
      width: 1205px;
      margin: auto;
      top: 140px;

    }



    h1 {
      text-align: center;
      color: black;
      font-size: 36px;
    }

    .chart {
      position: relative;
      padding: 1em;
      background: transparent;
      border-radius: 5px;
      font-size: 16px;
    }

    .chart * {
      box-sizing: border-box;
    }

    .chart:after {
      content: "";
      position: absolute;
      left: 25%;
      top: 7.5%;
      transform: translateX(100%);
      width: 4px;
      background: #FFF;
      height: 86%;
      border-radius: 2px;
    }

    .chart .part {
      display: flex;
      height: 3em;
    }

    .chart .part>.label {
      flex: 1;
      flex-basis: 25%;
      text-align: right;
      padding-right: 1em;
      margin: 0.5em 0;
      height: 2em;
      line-height: 2em;
      color: black;
      font-weight: 600;
    }

    .chart .part .bar {
      flex: 3;
      flex-basis: 75%;
      position: relative;
      margin: 0.5em 0;
    }

    .chart .part .bar:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      border-radius: 0 2px 2px 0;
      -webkit-animation: grow 0.5s;
      animation: grow 0.5s;
    }

    .chart .part .bar.red:after {
      background: #f22;
    }

    .chart .part .bar.blue:after {
      background: #56a;
    }

    .chart .part .bar.green:after {
      background: #2a5;
    }

    .chart .part .bar.yellow:after {
      background: #C8A700;
    }

    .chart .part .bar.pink:after {
      background: #FF00E8;
    }

    .chart .part .bar .label {
      position: absolute;
      top: 50%;
      left: 0.5em;
      transform: translateX(0%) translateY(-50%);
      z-index: 1;
      color: #FFF;
      font-weight: 600;
    }

    .chart .part.percent-1 .bar:after {
      width: 1%;
    }

    .chart .part.percent-2 .bar:after {
      width: 2%;
    }

    .chart .part.percent-3 .bar:after {
      width: 3%;
    }

    .chart .part.percent-4 .bar:after {
      width: 4%;
    }

    .chart .part.percent-5 .bar:after {
      width: 5%;
    }

    .chart .part.percent-6 .bar:after {
      width: 6%;
    }

    .chart .part.percent-7 .bar:after {
      width: 7%;
    }

    .chart .part.percent-8 .bar:after {
      width: 8%;
    }

    .chart .part.percent-9 .bar:after {
      width: 9%;
    }

    .chart .part.percent-10 .bar:after {
      width: 10%;
    }

    .chart .part.percent-11 .bar:after {
      width: 11%;
    }

    .chart .part.percent-12 .bar:after {
      width: 12%;
    }

    .chart .part.percent-13 .bar:after {
      width: 13%;
    }

    .chart .part.percent-14 .bar:after {
      width: 14%;
    }

    .chart .part.percent-15 .bar:after {
      width: 15%;
    }

    .chart .part.percent-16 .bar:after {
      width: 16%;
    }

    .chart .part.percent-17 .bar:after {
      width: 17%;
    }

    .chart .part.percent-18 .bar:after {
      width: 18%;
    }

    .chart .part.percent-19 .bar:after {
      width: 19%;
    }

    .chart .part.percent-20 .bar:after {
      width: 20%;
    }

    .chart .part.percent-21 .bar:after {
      width: 21%;
    }

    .chart .part.percent-22 .bar:after {
      width: 22%;
    }

    .chart .part.percent-23 .bar:after {
      width: 23%;
    }

    .chart .part.percent-24 .bar:after {
      width: 24%;
    }

    .chart .part.percent-25 .bar:after {
      width: 25%;
    }

    .chart .part.percent-26 .bar:after {
      width: 26%;
    }

    .chart .part.percent-27 .bar:after {
      width: 27%;
    }

    .chart .part.percent-28 .bar:after {
      width: 28%;
    }

    .chart .part.percent-29 .bar:after {
      width: 29%;
    }

    .chart .part.percent-30 .bar:after {
      width: 30%;
    }

    .chart .part.percent-31 .bar:after {
      width: 31%;
    }

    .chart .part.percent-32 .bar:after {
      width: 32%;
    }

    .chart .part.percent-33 .bar:after {
      width: 33%;
    }

    .chart .part.percent-34 .bar:after {
      width: 34%;
    }

    .chart .part.percent-35 .bar:after {
      width: 35%;
    }

    .chart .part.percent-36 .bar:after {
      width: 36%;
    }

    .chart .part.percent-37 .bar:after {
      width: 37%;
    }

    .chart .part.percent-38 .bar:after {
      width: 38%;
    }

    .chart .part.percent-39 .bar:after {
      width: 39%;
    }

    .chart .part.percent-40 .bar:after {
      width: 40%;
    }

    .chart .part.percent-41 .bar:after {
      width: 41%;
    }

    .chart .part.percent-42 .bar:after {
      width: 42%;
    }

    .chart .part.percent-43 .bar:after {
      width: 43%;
    }

    .chart .part.percent-44 .bar:after {
      width: 44%;
    }

    .chart .part.percent-45 .bar:after {
      width: 45%;
    }

    .chart .part.percent-46 .bar:after {
      width: 46%;
    }

    .chart .part.percent-47 .bar:after {
      width: 47%;
    }

    .chart .part.percent-48 .bar:after {
      width: 48%;
    }

    .chart .part.percent-49 .bar:after {
      width: 49%;
    }

    .chart .part.percent-50 .bar:after {
      width: 50%;
    }

    .chart .part.percent-51 .bar:after {
      width: 51%;
    }

    .chart .part.percent-52 .bar:after {
      width: 52%;
    }

    .chart .part.percent-53 .bar:after {
      width: 53%;
    }

    .chart .part.percent-54 .bar:after {
      width: 54%;
    }

    .chart .part.percent-55 .bar:after {
      width: 55%;
    }

    .chart .part.percent-56 .bar:after {
      width: 56%;
    }

    .chart .part.percent-57 .bar:after {
      width: 57%;
    }

    .chart .part.percent-58 .bar:after {
      width: 58%;
    }

    .chart .part.percent-59 .bar:after {
      width: 59%;
    }

    .chart .part.percent-60 .bar:after {
      width: 60%;
    }

    .chart .part.percent-61 .bar:after {
      width: 61%;
    }

    .chart .part.percent-62 .bar:after {
      width: 62%;
    }

    .chart .part.percent-63 .bar:after {
      width: 63%;
    }

    .chart .part.percent-64 .bar:after {
      width: 64%;
    }

    .chart .part.percent-65 .bar:after {
      width: 65%;
    }

    .chart .part.percent-66 .bar:after {
      width: 66%;
    }

    .chart .part.percent-67 .bar:after {
      width: 67%;
    }

    .chart .part.percent-68 .bar:after {
      width: 68%;
    }

    .chart .part.percent-69 .bar:after {
      width: 69%;
    }

    .chart .part.percent-70 .bar:after {
      width: 70%;
    }

    .chart .part.percent-71 .bar:after {
      width: 71%;
    }

    .chart .part.percent-72 .bar:after {
      width: 72%;
    }

    .chart .part.percent-73 .bar:after {
      width: 73%;
    }

    .chart .part.percent-74 .bar:after {
      width: 74%;
    }

    .chart .part.percent-75 .bar:after {
      width: 75%;
    }

    .chart .part.percent-76 .bar:after {
      width: 76%;
    }

    .chart .part.percent-77 .bar:after {
      width: 77%;
    }

    .chart .part.percent-78 .bar:after {
      width: 78%;
    }

    .chart .part.percent-79 .bar:after {
      width: 79%;
    }

    .chart .part.percent-80 .bar:after {
      width: 80%;
    }

    .chart .part.percent-81 .bar:after {
      width: 81%;
    }

    .chart .part.percent-82 .bar:after {
      width: 82%;
    }

    .chart .part.percent-83 .bar:after {
      width: 83%;
    }

    .chart .part.percent-84 .bar:after {
      width: 84%;
    }

    .chart .part.percent-85 .bar:after {
      width: 85%;
    }

    .chart .part.percent-86 .bar:after {
      width: 86%;
    }

    .chart .part.percent-87 .bar:after {
      width: 87%;
    }

    .chart .part.percent-88 .bar:after {
      width: 88%;
    }

    .chart .part.percent-89 .bar:after {
      width: 89%;
    }

    .chart .part.percent-90 .bar:after {
      width: 90%;
    }

    .chart .part.percent-91 .bar:after {
      width: 91%;
    }

    .chart .part.percent-92 .bar:after {
      width: 92%;
    }

    .chart .part.percent-93 .bar:after {
      width: 93%;
    }

    .chart .part.percent-94 .bar:after {
      width: 94%;
    }

    .chart .part.percent-95 .bar:after {
      width: 95%;
    }

    .chart .part.percent-96 .bar:after {
      width: 96%;
    }

    .chart .part.percent-97 .bar:after {
      width: 97%;
    }

    .chart .part.percent-98 .bar:after {
      width: 98%;
    }

    .chart .part.percent-99 .bar:after {
      width: 99%;
    }

    .chart .part.percent-100 .bar:after {
      width: 100%;
    }

    @-webkit-keyframes grow {
      from {
        width: 0;
      }
    }

    @keyframes grow {
      from {
        width: 0;
      }
    }
  </style>
  <!-- partial -->

</body>

</html>