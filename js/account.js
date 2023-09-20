
 function openCity( cityName) {
  let i, tabcontent;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
 
  document.getElementById(cityName).style.display = "block";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
