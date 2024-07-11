
const codes = document.querySelectorAll(".code");
codes[0].focus();

codes.forEach((code, idx) => {
    code.addEventListener("keydown", (e) => {
        if( e.key >= 0 && e.key <=9){
            codes[idx].value = "";
            setTimeout(() => codes[idx+1].focus(),10);
        }else if( e.key === "Backspace"){
            setTimeout(() => codes[idx-1].focus(),10);
        }
    })
})



const inputs=document.querySelectorAll("input"),
button = document.querySelector("button"),
mobile = document.getElementById("mobile"),
expire=document.getElementById("expire");

let OTP="",expireinterval="";

//otp generate
function generateOTPs() {
    OTP=
        Math.floor(Math.random()* 10)+
    ""+
        Math.floor(Math.random()* 10)+
    ""+
    Math.floor(Math.random()* 10)+
    ""+
    Math.floor(Math.random()* 10);

    alert("your OTP is: "+OTP)
    
    inputs[0].focus();

    expire.innerText = 10;
    const expireinterval = setInterval(function(){
        expire.innerText--;
        if(expire.innerText == 0){
            clearInterval(expireinterval);
        }
       
        
        
    },1000);
    
}

function clearOTPs() {
    inputs.forEach((input,i)=>{
        input.value="";
        if(i==0){
            input.removeAttribute("disabled")
        }
        if(i!=0){
            input.setAttribute("disabled",true)
        }
        input.setAttribute("disabled",true);
    });
    clearInterval(expireinterval);
    expire.innerText=0;
    button.setAttribute("disabled",true);
    button.classList.remove("active");
}

inputs.forEach((input,index)=>{
    input.addEventListener("keyup",function(e){
        const currentIndex = index,
        nextInput = input.nextElementSibling,
        prevInput=input.previousElementSibling;
        //console.log(currentIndex,nextInput,prevInput);


        
        if(
            nextInput &&
            nextInput.hasAttribute("disabled")&& 
        currentInput.value !== ""
        ){
            nextInput.removeAttribute("disabled", true);
            nextInput.focus();
        }
    });
});

function clearOTPs() {}
inputs.forEach((input,index)=>{
    input.addEventListener("keyup",function(e){
        const currentIndex = input,
        nextInput = input.nextElementSibling,
        prevInput = input.previousElementSibling;
        //console.log(currentIndex,nextInput);

    
        if(
            nextInput && nextInput.hasAttribute("disabled")&&
            currentInput.value!==""
            ){
            nextInput.removeAttribute("disabled",true);
            nextInput.focus();
        }
        if(e.key === "backspace"){
            inputs.forEach((input, index1)=>{
                if(index<=index1 && prevInput){
                    input.setAttribute("disabled",true);
                    prevInput.focus()
                    prevInput.value="";
                }
            });
        }
        if(!inputs[3].disabled && inputs[3].value!==""){
            inputs[3].blur();
            button.classList.add("active");
            return;
        }
        button.classList.remove("active");
    });
});
//mobile number
window.addEventListener("load",()=>{
    let x = prompt("Please enter your mobile number to verify your account");
    if(x){
        mobile.innerText = x;
        generateOTPs();
    }
});

button.addEventListener("click",()=>{
    let verify="";
    inputs.forEach((input)=>{
        verify +=input.value;
    });
   /* if(verify===OTP){
        alert("your account has been verified successfully!");
        clearOTPs();
    }else{
        alert("your verification failed!")
    }*/
});