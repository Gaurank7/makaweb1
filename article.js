console.log("Hello world");
confirm("If you have any problem then please contact us at the chat/mail");

const coppy = document.getElementsByClassName("coppy");
console.log(coppy);

const handleCoppy=()=>{
    console.log("I am coppy");
    var text = document.getElementById("myBox");
    text.select();
    navigator.clipboard.writeText(text.value);
    alert("Coppied to clipboard");
};


coppy.addEventListener("click",()=>{
    handleCoppy();
})

const dt = new Date();