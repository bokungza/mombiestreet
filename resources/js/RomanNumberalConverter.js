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