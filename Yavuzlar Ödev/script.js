const goToHomePageButton = document.getElementById("homePageButton");
const goToPanelButton = document.getElementById("panelButton");
const goToSorularButton = document.getElementById("sorularButton");
const goToSoruEkleButton = document.getElementById("SoruEkleButton");

function goToHomePage() {
    window.location.href = "index.html";
}

function goToPanel(){
    window.location.href = "panel.php";
}

function goToSorular(){
    window.location.href = "sorular.php";
}

function goToSoruEkle(){
    window.location.href = "soruekle.html";
}




homePageButton.addEventListener("click", goToHomePage);
panelButton.addEventListener("click", goToPanel);
sorularButton.addEventListener("click", goToSorular);
SoruEkleButton.addEventListener("click", goToSoruEkle);