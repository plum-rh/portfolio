@section('title', 'PLUM | WORKS - Coffeeショップ -')
@extends('layouts.app2')

@section('style')
    <style>
        body{
            font-family: 'Oswald';
            margin: 0;
        }
        p,a,label,table,input{
            font-family: 'Raleway';
        }
        nav h3{
            font-family: 'Zen Kaku Gothic Antique', sans-serif;
        }

        header{
            width: 85%;
            margin: 0 auto;
            height: 70px;
            top: 0;
        }
        header h1{
            margin: 0;
            float: left;
            color: #8c6e66	;
            line-height: 70px;

        }
        header ul{
            font-family: 'Raleway';
            margin: 0;
        }
        header li{
            float: right;
            list-style: none;
        }
        header a{
            margin: 0;
            color:black;
            text-decoration: none;
            padding: 0 15px;
            line-height: 70px;
        }
        .top-item{
            background-image:url("../images/banner-bg.jpg");
            height: 500px;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .top-text{
            position: absolute;
            left: 7.5%;
            top: 35%
        }
        .top-text h2{
            color: #BD956A;
            font-size: 50px;
            margin: 0;
        }
        .top-text span{
            color: #96746b;
        }
        .top-text p{
            color: white;
        }
        .top-bottom{
            background-color: rgba(255, 255, 255,0.1);
            width: 150px;
            height: 50px;
            text-align: center;
        }
        .top-bottom a{
            text-decoration: none;
            color: white;
            padding-top: 20px;
            line-height: 50px;

        }
        .second-item{
            margin:3% 7.5%;

        }

        .card-sentence{
            color: white;
            margin: 0;
            position: absolute;
            left: 10%;
            top: 30%;
        }
        .card-sentence h2{
            text-shadow: 3px 4px 3px #808080;
        }
        .second-left, .second-right{
            float: left;
            width: 48%;
        }
        .second-left{
            background-image:url("../images/ads-img1.jpg");
            height: 350px;
            background-size: cover;
            background-position: center;
            margin: 1%;
            padding: 0;
            position: relative;
        }

        .second-right{
            background-image:url("../images/ads-img2.jpg");
            height: 350px;
            background-size: cover;
            background-position: center;
            margin: 1%;
            padding: 0;
            position: relative;
        }
        .third-item-1{
            margin:0 7.5%;
        }
        .space{
            clear: both;
        }
        .third-item-2{
            margin:0 7.5%;
        }

        .item-box{
            float: left;
            width: 23%;
            margin: 1%;
            box-sizing: border-box;
        }
        .item-box img{
            width: 100%;
        }
        .item-box h3{
            font-weight: bold;
            margin: 0;
        }
        .item-box p{
            margin: 0;
        }
        .fourth-item{
            clear:both;
            text-align: center;
            background-image:url("../images/discount-img.jpg");
            height: 350px;
            background-size: cover;
            background-position: center;
            margin:0 8%;
            position: relative;
            margin-top: 30%;

        }
        .fourth-contents{
            position: relative;
            top: 30%;
            text-align: center;

        }
        .fourth-contents span,h2{
            color: white;
            margin: 0;
        }
        .fourth-contents span{
            font-style: italic;
            font-family: 'Raleway';
        }
        .fourth-contents h2{
            text-shadow: 2px 2px 3px black;

        }
        .fourth-bottom{
            background-color: white;
            opacity: .5;
            padding: 2px;
            width: 150px;
            margin: 0 auto;
            margin-top: 2%;

        }

        .contents-top{
            clear: left;
            text-align: center;
            margin:0 35%;
            padding-top: 100px;
        }
        .contents-top span{
            color: #c7a17a;
            font-style: italic;
            font-family: 'Raleway';
        }
        .contents-top h2{
            color: #312a26;
            margin: 0;
        }
        .contents-top hr{
            color: #c7a17a;
            width: 350px;
        }
        .fifth-item{
            margin:0 7.5%;
        }
        .sixth-item{
            clear: both;
            margin:0 7.5%;
            padding-top: 100px;

        }
        .sixth-upleft, .sixth-upright, .sixth-downleft,.sixth-downright {
            float: left;
            width: 48%;
        }

        .sixth-upleft{
            background-image:url("../images/ads-img3.jpg");
            height: 350px;
            background-size: cover;
            background-position: center;
            margin: 1%;
            padding: 0;
            position: relative;
        }

        .sixth-upright{
            background-image:url("../images/ads-img4.jpg");
            height: 350px;
            background-size: cover;
            background-position: center;
            margin: 1%;
            padding: 0;
            position: relative;
        }
        .sixth-downleft{
            background-image:url("../images/ads-img5.jpg");
            height: 350px;
            background-size: cover;
            background-position: center;
            margin: 1%;
            padding: 0;
            position: relative;
        }

        .sixth-downright{
            background-image:url("../images/ads-img6.jpg");
            height: 350px;
            background-size: cover;
            background-position: center;
            margin: 1%;
            padding: 0;
            position: relative;
        }
        .card-sentence a{
            color: white;
            text-decoration: none;
            text-shadow: 2px 2px 3px #464646;

        }
        .card-sentence h3{
            margin: 0;
            font-size: 25px;
            text-shadow: 2px 2px 3px #464646;

        }
        .reservation-form{
            margin:0 7.5%;


        }
        form{
            display: flex;
            justify-content: space-between;
        }

        .form-box{
            width: 100%;
            background-color: #F2F2F2;
            margin:0 1%;
            padding:3%;
            font-weight: bold;
        }

        .form-box input,select,textarea{
            border: none;
            height: 30px;
            width: 100%;
            margin:10px 0;
        }
        textarea{
            height: 170px;
        }
        .center-text{
            text-align: center;
        }
        .form-box img{
            height: 25px;
            background-size: cover;
            background-position: center;
            margin: 0;
        }
        .form-box h4{
            margin: 0;
            margin-top: 15px;
        }
        .check-item input{
            height: 15px;
            width: 15px;
        }
        .form-box button{
            border: none;
            background-color: #C7A17A;
            width: 100%;
            height: 40px;
            font-weight: bold;
        }

        .bottom-item{
            display: flex;
            justify-content: space-between;
            background-image:url("../images/footer-img.jpg");
            background-size: cover;
            background-position: center;
            margin-top: 30px;
            padding:3% 7.5%;

        }
        .bottom-box h3{
            color: white;
            text-transform: uppercase;
        }
        .bottom-box h4, .bottom-box h5{
            color: white;
            text-transform: uppercase;
            margin: 0;

        }

        .bottom-box table{
            color: white;
            margin: 0;
        }
        .bottom-box p{
            color: #c7a17a;
            margin: 0;
        }
        .serchbox{
            display: flex;
            height: 30px;
            width: 100%;

        }

        .serchbox button{
            border: none;
            background-color: #C7A17A;
            font-weight: bold;
            margin: 1%;
            height: 40px;

        }
        .serchbox input{
            border: none;
            margin: 1%;
            height: 38px;
            outline: none;
        }
        .footer{
            display: flex;
            justify-content: space-between;
            color: white;
            background-color: #19100f;
            padding: 0 20%;
            height: 50px;
            align-items: center;
        }
        .footer img{
            height: 25px;
        }



    </style>

@endsection


@section('content')

        <header class ="text-start bg-white mt-5">
            <h1>COFFEE BEAN</h1>
            <ul>
                <li><a href="#">Reservation</a></li>
                <li><a href="#">On Sale</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="#">Merchandise</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </header>
        <div class="top-item">
            <div class="top-text">
                <h2>UNIQUELY <span>FRESH TASTE</span></h2>
                <p>
                    Try our tasty coffee bean, produced with unque taste.
                </p>

                <div class="top-bottom">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>

        <div class="second-item">
            <div class="second-left">
                <div class="card-sentence">
                    <h2>SEASONAL COFFEE</h2>
                    <h2>FLAVORS</h2>
                    <u><p><a href="#">READ MORE</a></p></u>
                </div>
            </div>
            <div class="second-right">
                <div class="card-sentence">
                    <h2>COFFEE BUNDLE</h2>
                    <h2>PACKAGES</h2>
                    <u><p><a href="#">READ MORE</a></p></u>
                </div>
            </div>
        </div>

        <div class="contents-top">
            <span>What Happens here</span>
            <h2>COFFEE HOUSE MERCHANDISE</h2>
            <hr/>
        </div>
        <div class="third-item-1">
            <div class="item-box">
               <img src="../images/merch-img1.jpg">
               <h3>Arbica - Extra Course</h3>
               <span>*****</span>
               <p>$70.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img2.jpg">
               <h3>Arbica - Fine Grind</h3>
               <span>*****</span>
               <p>$70.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img3.jpg">
               <h3>French Vanilla</h3>
               <span>*****</span>
               <p>$80.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img4.jpg">
               <h3>Deluxe Chocolate</h3>
               <span>*****</span>
               <p>$100.00</p>
            </div>
        </div>
        <div class="space"></div>
        <div class="third-item-2">
            <div class="item-box">
               <img src="../images/merch-img5.jpg">
               <h3>Original Beans</h3>
               <span>*****</span>
               <p>$100.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img6.jpg">
               <h3>Paper Pouch</h3>
               <span>*****</span>
               <p>$71.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img7.jpg">
               <h3>Freshly Picked</h3>
               <span>*****</span>
               <p>$71.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img8.jpg">
               <h3>Mug</h3>
               <span>*****</span>
               <p></p>$25.00</p>
            </div>
        </div>

        <div class="fourth-item">
            <div class="fourth-contents">
                <span>We brew them fresh daily</span>
                <h2>MEMBER'S DISCOUNTS UP TO 40%</h2>
                <div class="fourth-bottom">
                    <p>View Products</p>
                </div>
            </div>
        </div>

        <div class="contents-top">
            <span>What happens here</span>
            <h2>MERCHANDISE SALE</h2>
            <hr>
        </div>

        <div class="fifth-item">
            <div class="item-box">
               <img src="../images/merch-img9.jpg">
               <h3>Arabica with cup</h3>
               <span>*****</span>
               <p></p>90.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img10.jpg">
               <h3>Duble Arabica</h3>
               <span>*****</span>
               <p></p>120.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img11.jpg">
               <h3>Paper Pouch</h3>
               <span>*****</span>
               <p></p>100.00</p>
            </div>
            <div class="item-box">
               <img src="../images/merch-img12.jpg">
               <h3>Double Mug</h3>
               <span>*****</span>
               <p></p>40.00</p>
            </div>
        </div>

        <div class="sixth-item">
            <div class="sixth-upleft">
                <div class="card-sentence">
                    <h3>COFFEE BEAN</h3>
                    <h3>VARIETIES</h3>
                    <u><p><a href="#">READ MORE</a></p></u>
                </div>
            </div>
            <div class="sixth-upright">
                <div class="card-sentence">
                    <h3>OUR BARISTA'S</h3>
                    <h3>FAVORITE</h3>
                    <u><p><a href="#">READ MORE</a></p></u>
                </div>
            </div>
                <div class="sixth-downleft">
                <div class="card-sentence">
                    <h3>THE COFFEE - BEST</h3>
                    <h3>SELLERS</h3>
                    <u><p><a href="#">READ MORE</a></p></u>
                </div>
            </div>
            <div class="sixth-downright">
                <div class="card-sentence">
                    <h3>MORE THAN JUST</h3>
                    <h3>THE COFFEE</h3>
                    <u><p><a href="#">READ MORE</a></p></u>
                </div>
            </div>
        </div>

        <div class="contents-top">
            <h2>RESERVATION FORM</h2>
            <hr>
        </div>

        <div class="reservation-form">
            <form  action="#">
                <div class="form-box">
                    <label class="form-label">Full Name<br></label>
                    <input type="text" name="name" placeholder="Last Name, First Name" class="form-control rounded-0 border-0"><br>

                    <label class="form-label">Email Address<br></label>
                    <input type="email" name="email" placeholder="mail@mail.com" class="form-control rounded-0 border-0"><br>

                    <label class="form-label">Phone Number<br></label>
                    <input type="text" name="phone" placeholder="(+53)912345678" class="form-control rounded-0 border-0"><br>

                    <div class="center-text">
                        <p>Reservation Details</p>
                    </div>

                    <label class="form-label">Number of Guest<br></label>
                    <select class="form-select rounded-0 border-0">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>more than 4</option>
                    </select><br>

                    <label>
                        Reservation Date<br></label>
                    <input type="date" name="date" class="form-control rounded-0 border-0"><br>

                    <div class="center-text">
                        <div class="check-item">
                            <p>Reservation Time</p>
                            <label><input type="radio">Morning</label>
                            <label><input type="radio">Afternoon</label>
                            <label><input type="radio">Night</label>
                        </div>
                    </div>
                </div>

                <div class="form-box">
                    <label class="form-label ">Additional Request</label>
                    <textarea class="form-control border-0 rounded-0" rows="100"></textarea>

                    <div class="center-text mt-5">
                        <h4>PAYMENT</h4>
                        <img src="../images/reservation-cards.png">
                        <p>Payment Accepted Cards</p>
                    </div>

                    <label class="form-label">Full Name</label>
                    <input type="text"  class="form-control border-0 rounded-0">

                    <label class="form-label">
                        Credit Card Number</label>
                    <input type="number" placeholder="1234567890"  class="form-control border-0 rounded-0"><br>

                    <div class="check-item">
                        <label class="form-label">
                            <input type="checkbox">
                            I agree in the terms and conditions.
                        </label>
                    </div>
                    <button type="">SEND</button>
                </div>
            </form>
        </div>

        <div class="bottom-item small">
            <div class="bottom-box">
                <h4>OPENING HOURS</h4>
                <table>
                    <th>Day</th>
                    <th>………</th>
                    <th>Availability</th>
                    <tr>
                        <td>Monday</td>
                        <td>………</td>
                        <td>Closed</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>………</td>
                        <td>09:00-22:00</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>………</td>
                        <td>Closed</td>
                    </tr>
                    <tr>
                        <td>Thusday</td>
                        <td>………</td>
                        <td>09:00-22:00</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>………</td>
                        <td>09:00-22:00</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>………</td>
                        <td>09:00-22:00</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>………</td>
                        <td>Closed</td>
                    </tr>
                </table>
            </div>

            <div class="bottom-box">
                <h4>LATEST POST</h4>
                <h5>Expand your mind, Change Everything</h5>
                <p>14.02.2017</p>
                <h5>Places to get lost</h5>
                <p>14.02.2017</p>
                <h5>Lewis Howes</h5>
                <p>14.02.2017</p>
                <h5>Elecate your Expection</h5>
                <p>14.02.2017</p>
            </div>


            <div class="bottom-box">
                <h4>LATEST POST</h4>
                <p>info@coffeebean.com</p>
                <p>1-444-123-4559</p>
                <p>Raymond Boulevard 224. New York</p>
                <h4>THE LAST STANDARD POST</h4>
                <div class="serchbox">
                    <form>
                        <input>
                        <button type="submit">SEARCH</button>
                    </form>

                </div>

            </div>
            <div class="bottom-box">
                <h4>OTHER LOCATIONS</h4>
                <h5>Coffee Bean Philippines</h5>
                <p>1234 IT Park</p>
                <p>Cebu City</p>
                <h5>Coffee Bean Tokyo</h5>
                <p>1234Business Park</p>
                <p>Tokyo Japan</p>
            </div>
        </div>

        <div class="footer">
            <h3>COFFEE BEAN</h3>
            <div class="icons">
                <img src="../images/icon-fb.png" alt="facebook">
                <img src="../images/icon-ig.png" alt="instagram">
                <img src="../images/icon-tw.png" alt="twitter">
            </div>
            <p>©2021｜Kredo IT Abroad</p>
        </div>



@endsection
