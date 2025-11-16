<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Card Hover Effects</title>
  <!-- <link rel="stylesheet" href="./style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
        /* Existing CSS styles */
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
    .gradient-background {
      background: linear-gradient(300deg,#605052,#2e242c,	#211a23,	#110c11,	#000000);
      background-size: 300% 300%;
      animation: gradient-animation 30s ease infinite;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 800px;
}

@keyframes gradient-animation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
  
}
    .container {
      position: relative;
      width: 1100px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 30px;
    }

    .container .card {
      position: relative;
      max-width: 300px;
      height: 215px;
      background-color: #4B4453;
      margin: 30px 0px;
      padding: 30px 0px;
      display: flex;
      flex-direction: column;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
      border-radius: 15px;
      cursor: pointer; /* Add cursor pointer to indicate it's clickable */
      transition: 0.3s ease-in-out;
    }

    .container .card.expanded {
      height: 320px;
    }

    .container .card .image {
      position: relative;
      width: 260px;
      height: 260px;
      top: -40%;
      left: 8px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      z-index: 1;
      padding-top: 20px;
    }

    .container .card .image .img3 {
      max-width: 100%;
      border-radius: 10px; 
    }

    .container .card .content {
      position: relative;
      top: -150px;
      padding: 10px 15px;
      color: #fff;
      text-align: center;
      visibility: hidden;
      opacity: 0;
      transition: 0.3s ease-in-out;
    }
    
    .container .card.expanded .content {
      margin-top: 40px;
      visibility: visible;
      opacity: 1;
    }
    .card .content p{
      font-size: 15px;
      text-align: justify;
    }
    .button-54 {
  font-family: "Open Sans", sans-serif;
  font-size: 10px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  color: #000;
  cursor: pointer;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-54:active {
  box-shadow: 0px 0px 0px 0px;
  top: 5px;
  left: 5px;
}

@media (min-width: 768px) {
  .button-54 {
    padding: 0.25em 0.75em;
  }
}
  </style>
</head>
<body>

<div class="gradient-background">

  <!-- first column start -->

  <div class="container" >
    <div class="animate__animated animate__bounceInLeft animate__delay-1s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/aston.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Aston Martin</h3>
          <p>Aston Martin, established in 1913 by Lionel Martin and Robert Bamford, is now under the ownership of Lawrence Stroll's consortium, which obtained a substantial stake in 2020.</p>
          <br>
          <button class="button-54" role="button">aston martin</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-1s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/audi.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Audi</h3>
          <p>Audi AG was established on May 24, 1932, and it is a subsidiary of Volkswagen AG, a German automotive conglomerate.</p>
          <br>
          <button class="button-54" role="button" onclick="location.href='./AUDI.php'">Audi</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-1s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/bmw.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>BMW</h3>
          <p>BMW, a German multinational manufacturer of luxury vehicles and motorcycles, was founded on March 7, 1916, as a manufacturer of aircraft engines.</p>
          <BR>
          <button class="button-54" role="button" onclick="location.href='./BMW.PHP'">BMW</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-1s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/ferrari.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Ferrari</h3>
          <p>Ferrari was founded in 1939 by Enzo Ferrari. It is currently a publicly traded company on the New York Stock Exchange under the ticker symbol "RACE," with multiple shareholders.</p>
          <br>
          <button class="button-54" role="button">Ferrari</button>
        </div>
      </div>
    </div>
  </div>

    <!-- second column start -->

  <div class="container">
    <div class="animate__animated animate__bounceInLeft animate__delay-2s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/ford.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Ford</h3>
          <p>Ford Motor Company was established on June 16, 1903, by Henry Ford. It is a publicly traded company on the New York Stock Exchange (NYSE) under the ticker symbol "F."</p>
          <button class="button-54" role="button" onclick="location.href='./FORD.PHP'">Ford</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-2s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/hyundai.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Hyundai</h3>
          <p>Hyundai Motor Company, founded in 1967, is a subsidiary of the Hyundai Motor Group, a South Korean conglomerate.</p>
          <br>
          <button class="button-54" role="button" onclick="location.href='./HUNDAI.PHP'">Hyundai</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-2s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/jaguar.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Jaguar</h3>
          <p>Jaguar was founded in 1922 as the Swallow Sidecar Company and later became Jaguar Cars. It is currently owned by Tata Motors, an Indian automotive company.</p>
          <br>
          <button class="button-54" role="button" onclick="location.href='./Jaguar.PHP'">Jaguar</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-2s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/jeep.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Jeep</h3>
          <p>Jeep, founded in 1941, is currently owned by Stellantis, a multinational automotive corporation formed by the merger of Fiat Chrysler Automobiles and PSA Group in 2021.</p>
          <button class="button-54" role="button" onclick="location.href='./JEEP.PHP'">Jeep</button>
        </div>
      </div>
    </div>
  </div>

  <!-- third column start -->

  <div class="container">
    <div class="animate__animated animate__bounceInLeft animate__delay-3s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/kia.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Kia</h3>
          <p>Kia Corporation was established in December 1944 and is owned by Hyundai Motor Group, a South Korean conglomerate that holds a significant stake in the company.</p>
          <BR>
          <button class="button-54" role="button" onclick="location.href='./KIA.PHP'">Kia</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-3s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/land.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Land Rover</h3>
          <p>Land Rover was founded in 1948 and has been owned by Tata Motors, an Indian automotive company, since 2008, while maintaining its British heritage and manufacturing.</p>
          <BR>
          <button class="button-54" role="button" onclick="location.href='./LAND ROVER.PHP'">Land Rover</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-3s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/mercedes.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Mercedes</h3>
          <p>Mercedes-Benz, founded in 1926, is a division of Daimler AG. However, it's important to note that Daimler AG has undergone restructuring, and the name has changed to Mercedes-Benz AG.</p>
          <button class="button-54" role="button" onclick="location.href='./MERCEDES.PHP'">Mercedes</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-3s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/mg.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Morris Garages</h3>
          <p>MG (Morris Garages) was established in 1924 and is currently owned by SAIC Motor Corporation, a Chinese automotive manufacturer, which acquired MG in 2007.</p>
          <br>
          <button class="button-54" role="button" onclick="location.href='./MG.PHP'">Morris Garages</button>
        </div>
      </div>
    </div>
  </div>

    <!-- fourth column start -->

  <div class="container">
    <div class="animate__animated animate__bounceInLeft animate__delay-4s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/nissan.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Nissan</h3>
          <p>Nissan Motor Co., Ltd. was founded on December 26, 1933. It is part of the Nissan Group and has various stakeholders, including Renault, making up its ownership structure.</p>
          <br>
          <button class="button-54" role="button" onclick="location.href='./NISSAN.PHP'">Nissan</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-4s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/porsche.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Porsche</h3>
          <p>Porsche AG was founded in 1931, and it is owned by Volkswagen AG, a German automotive conglomerate. Volkswagen AG is publicly traded on the Frankfurt Stock Exchange.</p>
          <BR>
          <button class="button-54" role="button" onclick="location.href='./PORSCHE.PHP'">Porsche</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-4s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/skoda.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Škoda</h3>
          <p>Škoda Auto was founded in 1895, and it is a subsidiary of the Volkswagen Group, a German automotive conglomerate.</p>
          <br>
          <button class="button-54" role="button" onclick="location.href='./SKODA.PHP'">Škoda</button>
        </div>
      </div>
    </div>
    <div class="animate__animated animate__bounceInLeft animate__delay-4s">
      <div class="card">
        <div class="image">
          <img class="img3"  src="./IMAGES/ALL CAR LOGO/resize/tesla.jpg" alt="Card Image">
        </div>
        <div class="content">
          <h3>Tesla</h3>
          <p>Tesla, Inc. was founded in 2003 by Martin Eberhard and Marc Tarpenning, with Elon Musk joining as an investor and chairman. Elon Musk is the CEO and largest shareholder.</p>
          <br>
          <button class="button-54" role="button">Tesla</button>
        </div>
      </div>
    </div>
    <!-- Repeat the same card structure four times for the second row -->
    <!-- You can duplicate the card structure and modify the content as needed -->
  </div>
</div>
  <script>
    const cards = document.querySelectorAll(".card");
  
    cards.forEach((card) => {
      card.addEventListener("click", () => {
        // Collapse all cards
        cards.forEach((c) => {
          if (c !== card) {
            c.classList.remove("expanded");
          }
        });
  
        // Toggle the clicked card
        card.classList.toggle("expanded");
      });
    });
  </script>
  
</body>
</html>
