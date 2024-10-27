let a = prompt("Enter your grade :");
if (a>=90&& a<=100){
    console.log("A")
}
else if (a>=70&& a<=89){
    console.log("B")
}
else if (a>=60&& a<=69){
    console.log("C")
}
else if (a>=50&& a<=59){
    console.log("D")
}
else if (a>=0&& a<=49){
    console.log("F")
}
else {
    console.log("Provide grades between 1 to 100")
}