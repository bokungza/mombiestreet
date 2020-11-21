<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
<style>
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  position: relative;
  font-family: "Times New Roman"
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  
  }

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
.header-right {
    float: none;
  }
}
/*-------------------------------------------------------------------*/
.container {
  position: relative;
  text-align: center;
  color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 25%;
  font-size: 50px; 
  text-align: left;
  line-height: 15pt;
  transform: translate(-50%, -50%);
}
/*-------------------------------------------------------------------*/
.center1 {
  text-align: center;
  background: black;
  text-align: center;
  color: white;
  border: 1px solid black;
  left: 0;
  bottom: 0;
  width: 98%;
  padding: 20px;
}
/*-------------------------------------------------------------------*/
.center2 {
  text-align: center;
  background: #ffc200;
  text-align: center;
  color: black;
  border: 1px solid black;
  left: 0;
  bottom: 0;
  width: 98%;
  padding: 20px;
}

.card {
  display: inline-block;
  position: relative;
  text-align: center;
  color: white;
  font-size: 30px;
  line-height: 5pt;
  text-shadow: 2px 2px black;
}

.img{
  border-radius: 10px;
  width:100%;
  height:100%;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.centered2 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/*-------------------------------------------------------------------*/
.footer {
  left: 0;
  bottom: 0;
  width: 98%;
  background-color: black;
  color: white;
  text-align: center;
  padding: 20px;
}

</style>
    </head>
    <body>
    <div class="header">
        <a href="#default" class="logo"><span>Something</span><span style="color:#ffc200">New</span ></a>
        <div class="header-right">
            <a href="#about">ABOUT</a>
            <a href="#our_services">OUR SERVICES</a>
            <a href="#our_team">OUR TEAM</a>
            <a href="#contact_us">CONTACT US</a>
        </div>
    </div>
    <div class="container">
        <img src='{{asset('img/mainimg.jpg')}}' alt="Snow" style="width:100%;">
        <div class="centered"><span>We</span> <span style="color:#ffc200">collect and curate</span >
            <p>articales, opinions and images</p>
            <p>from around the world</p>
        </div>
    </div>
    <div class="center1">
        <h1>Bottom Line</h1>
        <p>We deliver the news that is relevant to you.</p>
    </div>
    <div class="center2">
        <h1>Our Expertise</h1>
        <p>This is a subtitle, to make it look good</p>

        <br>
        
        <div class="card">
          <img src='{{asset('img/cardimg1.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>Television</p>
            <p>Boardcast</p>
          </div>
        </div>
        <div class="card">
          <img src='{{asset('img/cardimg2.jpg')}}' alt="Snow" class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>Print</p>
            <p>Boardcast</p></div>
        </div>

        <div class="card">
          <img src='{{asset('img/cardimg3.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>online</p>
            <p>Megazines</p>
          </div>
        </div>

        <br>

        <div class="card">
          <img src='{{asset('img/cardimg4.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>Radio</p>
            <p>Boardcast</p>
          </div>
        </div>

        <div class="card">
          <img src='{{asset('img/cardimg5.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>Megazine</p>
          </div>
        </div>

        <div class="card">
          <img src='{{asset('img/cardimg6.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>Photo</p>
            <p>Journalism</p>
          </div>
        </div>
        
        <br>
        
        <div class="card">
          <img src='{{asset('img/cardimg7.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>Podcasts</p>
          </div>
        </div>

        <div class="card">
          <img src='{{asset('img/cardimg8.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>Online</p>
            <p>Newspaper</p>
          </div>
        </div>

        <div class="card">
          <img src='{{asset('img/cardimg9.jpg')}}' class="img" alt="Avatar" style="width:100%">
          <div class="centered2">
            <p>RSS</p>
            <p>Readers</p>
          </div>
        </div>
    </div>
    <div class="footer">
        <h1 style="color:#ffffff">Headline</h1>
        <p style="color:#ffffff">1000 7th Avenue</p>
        <p style="color:#ffffff">New York, NY</p>
        <p style="color:#ffffff">(484) 192-8372</p>
    </div>

    <script>
      for (var i=1; i <= 100; i++){
          if (i % 3 == 0 && i % 5 == 0){
            console.log("%d FizzBuzz", i);
          }
          else if (i % 3 == 0 && i % 5 != 0){
            console.log("%d Fizz", i);
          }
          else if (i % 3 != 0 && i % 5 == 0){
            console.log("%d Buzz", i);
          }
          else{
            console.log(i);
          }
      }
    </script>

    <script>
      let wide = 9;
      let long = 4;
      let output = "";
      for (var i = 1 ; i <= long; i++){
        for (var j = 1 ; j <= wide; j++){
          if (i % 2 == 0){
            output = output + " #";
          }
          else{
            output = output + "# ";
          }
        }
        console.log(output);
        output = "";
      }
    </script>

    <script>
      function range(num1, num2, num3){
        let array = [];
        let j = 0;
        if (num3 == null){
          for (let i = num1 ; i <= num2 ; i++){
            array[j] = i;
            j = j + 1;
          }
          return array;
        }
        else{
          for (let i = num1 ; i >= num2 ; i--){
            array[j] = i;
            j = j + 1;
          }
        }
        return array;
      }
      function sum(a){
        let array = a;
        let sum = 0;
        for (i = 0; i < array.length ; i++){
          sum = sum + array[i];
        }
        return sum;
      }
      console.log(range(1,10));
      console.log(range(5,2,-1));
      console.log(sum(range(1, 10)));
    </script>

    <script>
      function int_to_roman(num) {
        let roman = "";
        let number = [[1000,"M"],[900,"CM"],[500,"D"],[400,"CD"],[100,"C"],[90,"XC"],[50,"L"],[40,"XL"],[10,"X"],[9,"XI"],[5,"V"],[4,"IV"],[1,"I"]];
        let j = 0;
        for (let i = num ; i >= 0 ; i = i = i - j){
          if (i >= number[0][0]){
            j = number[0][0];
            roman = roman + number[0][1];
          }
          else if (i >= number[1][0]){
            j = number[1][0];
            roman = roman + number[1][1];
          }
          else if (i >= number[2][0]){
            j = number[2][0];
            roman = roman + number[2][1];
          }
          else if (i >= number[3][0]){
            j = number[3][0];
            roman = roman + number[3][1];
          }
          else if (i >= number[4][0]){
            j = number[4][0];
            roman = roman + number[4][1];
          }
          else if (i >= number[5][0]){
            j = number[5][0];
            roman = roman + number[5][1];
          }
          else if (i >= number[6][0]){
            j = number[6][0];
            roman = roman + number[6][1];
          }
          else if (i >= number[7][0]){
            j = number[7][0];
            roman = roman + number[7][1];
          }
          else if (i >= number[8][0]){
            j = number[8][0];
            roman = roman + number[8][1];
          }
          else if (i >= number[9][0]){
            j = number[9][0];
            roman = roman + number[9][1];
          }
          else if (i >= number[10][0]){
            j = number[10][0];
            roman = roman + number[10][1];
          }
          else if (i >= number[11][0]){
            j = number[11][0];
            roman = roman + number[11][1];
          }
          else if (i >= number[12][0]){
            j = number[12][0];
            roman = roman + number[12][1];
          }
        }
        return roman;
      }
      console.log(int_to_roman(1998));
    </script>
    </body>
</html>
