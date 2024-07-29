document.addEventListener("DOMContentLoaded", function () {
    if(document.querySelector("footer")) {
      var footer = document.querySelector("footer");
      if (footer) {
          var footerInnerDiv = footer.querySelector("div");
          if (footerInnerDiv) {
              var htmlContent = `
                  <div style="color: #fff; margin-block-start: var(--wp--preset--spacing--40) !important; font-family: var(--wp--preset--font-family--urbanist) !important;">
                          Designed By Shreyans Jain 
                  </div>
              `;
              footerInnerDiv.innerHTML += htmlContent;
          }
      }
  }
  });