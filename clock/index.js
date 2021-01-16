setInterval(() => {
    a=new Date();
    let date=a.toLocaleDateString();
    let time = a.getHours()+":"+a.getMinutes() +":" +a.getSeconds() + "<hr>" +date;
    document.getElementById("clock").innerHTML=time;
}, 500);
var dark=true;
function theme(){
    if(dark==true){
        document.getElementsByTagName("body")[0].style.background="white";
        document.getElementById("clock").style.background="white";
        document.getElementById("clock").style.color="black";
        document.getElementsByClassName("name")[0].style.background="white";
        document.getElementsByClassName("name")[0].style.color="black";
        dark=false;

    }
    else{
        document.getElementsByTagName("body")[0].style.background="black";
        document.getElementById("clock").style.background="black";
        document.getElementById("clock").style.color="white";
        document.getElementsByClassName("name")[0].style.background="black";
        document.getElementsByClassName("name")[0].style.color="white";
        dark=true;

    }


    
}