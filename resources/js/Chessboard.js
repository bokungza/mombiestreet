let wide = 4;
let long = 10;
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