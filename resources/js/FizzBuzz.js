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