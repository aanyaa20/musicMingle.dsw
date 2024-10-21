document.addEventListener("DOMContentLoaded", function() {
    var fadeOutContent = document.getElementById("fade-out-content");
    var startTimestamp;
    var duration = 4000; // Set the duration of the fade-out effect in milliseconds
  
    function fadeOut(timestamp) {
      if (!startTimestamp) {
        startTimestamp = timestamp;
      }
  
      var progress = timestamp - startTimestamp;
      var opacity = 1 - progress / duration;
  
      fadeOutContent.style.opacity = opacity;
  
      if (progress < duration) {
        requestAnimationFrame(fadeOut);
      } else {
        // Redirect to the fade-in page after the fade-out animation completes
        window.location.href = "index.html";
      }
    }
  
    // Start the fade-out animation
    requestAnimationFrame(fadeOut);
  });