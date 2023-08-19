document.addEventListener("DOMContentLoaded", function() {
        
        var contactInfoDiv = document.getElementById("show-hide-contact");
        
    
        
        showHideLink.addEventListener("click", function() {
          if (contactInfoDiv.style.display === "none") {
            contactInfoDiv.style.display = "block";
            showHideLink.textContent = "Hide Contact Info";
          } else {
            contactInfoDiv.style.display = "none";
            showHideLink.textContent = "Show Contact Info";
          }
        });
      });