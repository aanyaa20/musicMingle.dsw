// document.addEventListener("DOMContentLoaded", function() {
//     var fadeInContent = document.getElementById("back");
//     var startTimestamp;
//     var duration = 2000; // Set the duration of the fade-in effect in milliseconds
  
//     function fadeIn(timestamp) {
//       if (!startTimestamp) {
//         startTimestamp = timestamp;
//       }
  
//       var progress = timestamp - startTimestamp;
//       var opacity = progress / duration;
  
//       fadeInContent.style.opacity = opacity;
  
//       if (progress < duration) {
//         requestAnimationFrame(fadeIn);
//       }
//     }
  
//     // Start the fade-in animation
//     requestAnimationFrame(fadeIn);
//   });
document.addEventListener("onload",function()
{
    animation();
})
document.getElementById("drum").addEventListener("click",function()
{
    window.location.href='http://localhost/musicMingle/store.php#drum';
}

)
document.getElementById("guitar").addEventListener("click",function()
{
    window.location.href='http://localhost/musicMingle/store.php#guitar';
}

)
document.getElementById("piano").addEventListener("click",function()
{
    window.location.href='http://localhost/musicMingle/store.php#piano';
}

)
document.getElementById("violin").addEventListener("click",function()
{
    window.location.href='http://localhost/musicMingle/store.php#violin';
}

)
document.getElementById("other").addEventListener("click",function()
{
    window.location.href='http://localhost/musicMingle/store.php#other';
}

) 
document.getElementById("cart").addEventListener("click",function()
{
    window.location.href='cart.php';
}

)
function animation()
{

}