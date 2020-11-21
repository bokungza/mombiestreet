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