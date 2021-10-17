<?php 
include('dbconnect.php');
error_reporting(0);
 ?>
<!DOCTYPE html>  
<html>  
<head>  
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <title>ENTRY PAGE</title> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <style type="text/css">  
       body {  
         background-image:url('https://wallpaper.wiki/wp-content/uploads/2017/04/wallpaper.wiki-Desktop-Best-And-Website-background-2560x1600-PIC-WPD0012553.jpg');
         background-repeat:no-repeat;
         background-size:cover;
             } 
        }  
        .showSlide {  
            display: none  

          }  
        .showSlide img {  
                width: 100%; 
                height: 550px;
                border-radius: 40px;  
            }  
        .slidercontainer {  
            max-width: 900px;  
            position: relative;  
            margin: auto; 

          }  
        .left, .right {  
            cursor: pointer;  
            position: absolute;  
            top: 50%;  
            width: auto;  
            padding: 16px;  
            margin-top: -22px;  
            color: white;  
            font-weight: bold;  
            font-size: 18px;  
            transition: 0.6s ease;  
            border-radius: 0 3px 3px 0;  
        }  
        .right {  
            right: 0;  
            border-radius: 3px 0 0 3px;  
          }  
        .left:hover, .right:hover {  
                background-color: rgba(115, 115, 115, 0.8);  
            }  
        .content {  
            color: #eff5d4;  
            font-size: 30px;  
            padding: 8px 12px;  
            position: absolute;  
            top: 10px;  
            width: 100%;  
            text-align: center;  
           }  
        button
           {
          border-radius:20px; 
          background:orange; 
          padding:14px;
        }
        nav
        {
          width: 900px;
         background:#354245;
         border-radius: 14px;
        }
        .sticky {
          position: fixed;
          top: 0;
          }
        .contianer
         {
         width:70%;
         }
        .active {  
            background-color: #717171;  
        }   
        .fade {  
            -webkit-animation-name: fade;  
            -webkit-animation-duration: 1.5s;  
            animation-name: fade;  
            animation-duration: 1.5s;  
        }  
        @-webkit-keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 1  
            }  
        }  
        @keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 1  
            }  
        }  
        img
        img:hover
         {
           background:white;
          }
        #fcf-form {
            display:block;
              }
        .fcf-body {
             margin: 0;
             font-family: -apple-system, Arial, sans-serif;
             font-size: 1rem;
             font-weight: 400;
             line-height: 1.5;
             color: #212529;
             text-align: left;
             background-color: #fff;
             padding: 30px;
             padding-bottom: 10px;
             border: 1px solid #ced4da;
             border-radius: 12px;
             max-width: 65%;
         }
       .fcf-form-group {
            margin-bottom: 1rem;
        }

       .fcf-input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
           -ms-flex-wrap: wrap;
           flex-wrap: wrap;
          -ms-flex-align: stretch;
          align-items: stretch;
          width: 100%;
        }
      .fcf-form-control {
         display: block;
         width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
       line-height: 1.5;
       color: #495057;
       background-color: #fff;
       background-clip: padding-box;
       border: 1px solid #ced4da;
       outline: none;
       border-radius: 0.25rem;
       transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .fcf-form-control:focus {
       border: 1px solid #313131;
     }
     select.fcf-form-control[size], select.fcf-form-control[multiple] {
        height: auto;
       }
     textarea.fcf-form-control {
          font-family: -apple-system, Arial, sans-serif;
          height: auto;
       }

     label.fcf-label {
         display: inline-block;
        margin-bottom: 0.5rem;
      }
     .fcf-credit {
       padding-top: 10px;
       font-size: 0.9rem;
       color: #545b62;
     }
    .fcf-credit a {
        color: #545b62;
       text-decoration: underline;
     }

    .fcf-credit a:hover {
       color: #0056b3;
       text-decoration: underline;
    }

    .fcf-btn {
        display: inline-block;
        font-weight: 400;
       color: #212529;
       text-align: center;
       vertical-align: middle;
       cursor: pointer;
       -webkit-user-select: none;
       -moz-user-select: none;
       -ms-user-select: none;
       user-select: none;
       background-color: transparent;
       border: 1px solid transparent;
       padding: 0.375rem 0.75rem;
       font-size: 1rem;
       line-height: 1.5;
       border-radius: 0.25rem;
       transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
     @media (prefers-reduced-motion: reduce) {
       .fcf-btn {
           transition: none;
       }
       }
     .fcf-btn:hover {
        color: #212529;
    text-decoration: none;
}

.fcf-btn:focus, .fcf-btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.fcf-btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.fcf-btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}

.fcf-btn-primary:focus, .fcf-btn-primary.focus {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.fcf-btn-lg, .fcf-btn-group-lg>.fcf-btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

.fcf-btn-block {
    display: block;
    width: 100%;
}

.fcf-btn-block+.fcf-btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].fcf-btn-block, input[type="reset"].fcf-btn-block, input[type="button"].fcf-btn-block {
    width: 100%;
}

    </style>  

</head>
<header>
  <div >
  <h2 style="margin-top:90px;"><i><center><font color="red">WELCOME TO AIRLINE RESERVATION</font></center></i></h2>
</div>
</header>  
<body>  
  <div class="slidercontainer">  
        <div class="showSlide fade">  
           <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img width="240px" height="240px" src="https://www.latrobe-airport.com/img/parking/aa2.jpg">
          
        </div>  
        <div class="showSlide fade">  
            <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img width="240px" height="240px" src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/09/23/c4/02.jpg">
            
        </div>  
  
        <div class="showSlide fade">  
           <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrwXxTVIeBfAzEAnh7nHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+the+images+of+facilities+are+providedby+airlines&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=50&iurl=http%3A%2F%2Fwww.ba-mro.com%2Fbaemro%2Fimages%2FTrainingroom2.jpg&action=click" target="_blank">
    <img width="240px" height="240px" src="http://www.ba-mro.com/baemro/images/Trainingroom2.jpg"> 
            
        </div>  
        <div class="showSlide fade">  
            <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrwXxTVIeBfAzEAnh7nHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+the+images+of+facilities+are+providedby+airlines&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=50&iurl=http%3A%2F%2Fwww.ba-mro.com%2Fbaemro%2Fimages%2FTrainingroom2.jpg&action=click" target="_blank">
    <img width="240px" height="240px" src="https://cdn-image.travelandleisure.com/sites/default/files/styles/1600x1000/public/1499787797/portland-oregon-airport-PDX0717.jpg?itok=FBuTfqnL">
        </div>  

        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)"><font color="red">❮</font></a>  
        <a class="right" onclick="nextSlide(1)"><font color="red">❯</font></a>  
    </div>  
     <div id="login">
  <script type="text/javascript">  
        var slide_index = 1;  
        displaySlides(slide_index);  
  
        function nextSlide(n) {  
            displaySlides(slide_index += n);  
        }  
  
        function currentSlide(n) {  
            displaySlides(slide_index = n);  
        }  
  
        function displaySlides(n) {  
            var i;  
            var slides = document.getElementsByClassName("showSlide");  
            if (n > slides.length) { slide_index = 1 }  
            if (n < 1) { slide_index = slides.length }  
            for (i = 0; i < slides.length; i++) {  
                slides[i].style.display = "none";  
            }  
            slides[slide_index - 1].style.display = "block";  
        }  
    </script>


    <nav class="sticky" style="margin-left: 90px;">
  <ul >
     
      <button ><a href="#about us">about us</a></button>
      <button style="margin-left: 20%"><a href="#gallery">gallery</a></button>
      <button style="margin-left: 20%"><a href="#contact us">contact us</a></button>
      <button style="margin-left: 20%"><a href="#login">login</a></button>
     </ul>
    
      </nav>


  <center><br><br><br><br><br>
<table style="width:50%" >
  <tr>
    <th> 
          <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=Awrxgvmg_tZfeTgAsQTnHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+icons+of+user+for+mini+project&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=25&iurl=https%3A%2F%2Fwww.freeiconspng.com%2Fuploads%2Fuser-login-icon-29.png&action=click">
      <a href="Dbms.php" title="ADMIN PAGE"> 
      <img src="https://www.freeiconspng.com/uploads/user-login-icon-29.png">
    </a>
   </th>
    <th>
      <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=Awrxgvmg_tZfeTgAsQTnHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+icons+of+user+for+mini+project&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=25&iurl=https%3A%2F%2Fwww.freeiconspng.com%2Fuploads%2Fuser-login-icon-29.png&action=click">
        <a href="customersignin.html" title="USER PAGE"><div  id="about us"> 
      <img src="https://www.freeiconspng.com/uploads/user-group-icon-28.png">
    </a>

   </th>
  </tr>
</table>
</center>

<center><section  size="50%">
  <div class="contianer">

    <div>
      <h1 align="left"><i><u>ABOUT US</u></i></h1>
    </div>
  <p style="text-align: justify;">
    Airline reservation systems incorporate airline schedules, fare tariffs, passenger reservations and ticket records. An airline's direct distribution works within their own reservation system, as well as pushing out information to the GDS. The second type of direct distribution channel are consumers who use the internet or mobile applications to make their own reservations. </p>
    <p style="text-align: justify;">Travel agencies and other indirect distribution channels access the same GDS as those accessed by the airline reservation systems, and all messaging is transmitted by a standardized messaging system that functions on two types of messaging that transmit on SITA's high level network (HLN). These messaging types are called Type A [usually EDIFACT format] for real time interactive communication and Type B [TTY] for informational and booking type of messages.</p> 
    <p style="text-align: justify;">Message construction standards set by IATA and ICAO, are global, and apply to more than air transportation. Since airline reservation systems are business critical applications, and they are functionally quite complex, the operation of an in-house airline reservation system is relatively expensive.</p>

<p style="text-align: justify;">Prior to deregulation, airlines owned their own reservation systems with travel agents subscribing to them. Today, the GDS are run by independent companies with airlines and travel agencies being major subscribers.</p>


<p style="text-align: justify;">Reservation systems may host "ticket-less" airlines and "hybrid" airlines that use e-ticketing in addition to ticket-less to accommodate code-shares and interlines.</p>
<div id="gallery">
<p style="text-align: justify;">In addition to these "standardized" GDS, some airlines have proprietary versions which they use to run their flight operations. A few examples are Delta's OSS and Deltamatic systems and EDS SHARES. SITA Reservations remains the largest neutral multi-host airline reservations system, with over 100 airlines currently managing inventory.</p>
  </p></center>
  </div>
</section><br>
<center>
  <section >
  <div><h1 align="left" style="margin-left:190px;"><i><u>GALLARY</u></i></h1></div>
   <div class="row" >
  
  <div class="column">
  <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img width="210px" height="210px" src="https://www.latrobe-airport.com/img/parking/aa2.jpg">
    <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img width="210px" height="210px" src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/09/23/c4/02.jpg">
      <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img width="210px" height="210px" src="https://i.pinimg.com/originals/ca/95/e8/ca95e8bbabeaa16285965062552dd1a7.jpg">
      <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrwXxTVIeBfAzEAnh7nHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+the+images+of+facilities+are+providedby+airlines&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=50&iurl=http%3A%2F%2Fwww.ba-mro.com%2Fbaemro%2Fimages%2FTrainingroom2.jpg&action=click" target="_blank">
    <img width="210px" height="210px" src="http://www.ba-mro.com/baemro/images/Trainingroom2.jpg">
  </div>
  <div class="column">
      <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrwXxTVIeBfAzEAnh7nHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+the+images+of+facilities+are+providedby+airlines&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=50&iurl=http%3A%2F%2Fwww.ba-mro.com%2Fbaemro%2Fimages%2FTrainingroom2.jpg&action=click" target="_blank">
    <img width="210px" height="210px" src="https://www.multivu.com/players/English/8473051-alaska-air-redesigned-airbus-cabin-amenities/image/Newcabin1_1549907408044-HR.jpg">
      <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrwXxTVIeBfAzEAnh7nHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+the+images+of+facilities+are+providedby+airlines&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=50&iurl=http%3A%2F%2Fwww.ba-mro.com%2Fbaemro%2Fimages%2FTrainingroom2.jpg&action=click" target="_blank">
    <img width="210px" height="210px" src="https://www.evaair.com/Images/enus/b_039__1_Ceva_2017_00015-0036_tcm35-54306.png">
     <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrwXxTVIeBfAzEAnh7nHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+the+images+of+facilities+are+providedby+airlines&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=50&iurl=http%3A%2F%2Fwww.ba-mro.com%2Fbaemro%2Fimages%2FTrainingroom2.jpg&action=click" target="_blank">
    <img width="210px" height="210px" src="https://cdn-image.travelandleisure.com/sites/default/files/styles/1600x1000/public/1499787797/portland-oregon-airport-PDX0717.jpg?itok=FBuTfqnL">
    <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrwXxTVIeBfAzEAnh7nHgx.;_ylu=Y29sbwMEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=give+the+images+of+facilities+are+providedby+airlines&type=87fjnhltxzm001720&param1=y6bdVFVIsvuYsgEClQfz8NEPSp4FWG51g5cOG5gIsG5eN5gaG2pSooNlohoMr1MWGsRbLqkfLWgbhCfqntGedj13p0CzI4FmFePOLvrN8TvzrwBfoJAUlZLz6soVaw%2F6N6kFMPw%2BrZND09kYNCUzGJnenvmSYqaAN1MoprFIINRJV2uMF%2Fs%2Fai8SpyJq9vVy70%2BbTfl3FIOHar2qrxXXGmWzp4eiEOJ5G4zvcX2jHfEk%2FeILdvemSyPyEOFzeKRnSkNBiGahWEHSvpmOydSeOOmuC53R8%2BpgvEdhsg0p%2BFoqy%2FMXr6MBxepq3ADngQc5pShV8tAvlNCfuMTBRo4EpAvNvlCEfD0dBZvJ8k4IYyN75RtvHwMg1IJGMsJ9p6qcVypN91vsBbcCaJYfmJ7hww%3D%3D&hsimp=yhs-001&hspart=omr&ei=UTF-8&fr=yhs-omr-001#id=50&iurl=http%3A%2F%2Fwww.ba-mro.com%2Fbaemro%2Fimages%2FTrainingroom2.jpg&action=click" target="_blank">
    <img width="210px" height="210px" src="https://www.anna.aero/wp-content/uploads/2014/11/socih-airport.jpg">
  </div>
  <div class="column">
  
     <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img width="210px" height="210px" src="https://i.pinimg.com/originals/da/10/94/da10945f36ba6319486e365a200e0864.jpg">
     <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img width="210px" height="210px"src="https://i.pinimg.com/736x/17/02/65/170265d3a426fec57104b458db01032a.jpg">
     <a href="https://in.images.search.yahoo.com/yhs/search;_ylt=AwrxhWYsGeBf3WwAvAXnHgx.;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Nj?p=give+images+of+airport+and+the+facilities+provided&fr=yhs-omr-001&hspart=omr&hsimp=yhs-001" target="_blank">
    <img  width="210px" height="210px" src="http://www.friendshipcircle.org/blog/wp-content/uploads/2012/05/Airport-travel-with-special-needss-travel.jpg">
  </div>
</div>
</a>
</a>
</a>
</div>
</a>
</a>
</a>
</a>
</div>
</a>
</a>
</a>
</a>
</div>
</div>
</section>
</center><br><br><br><br><br>
<center><section id="contact us">
  <form>
  <div class="fcf-body">

    <div id="fcf-form">
   <i> <h1 class="fcf-h3">Contact us</h1></i><br>

    <form   method="post" action="">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button"  name="submit">Send Message</button>
        </div>

    </form>
    </div>

</div>

</section></center>
</body>  
</html>   
<?php 
include('connection.php');
$na=$_GET['name'];
$em=$_GET['email'];
$mess=$_GET['message'];
$query="insert into contact values('$na','$em','$mess')";
$data=mysqli_query($conn,$query);
session_destroy();
if($data)
{
  echo "data inserted";
} 
else
{
  echo "data insertion failed";
}


?>

 