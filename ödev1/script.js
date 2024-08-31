const goToHomePageButton = document.getElementById("homePageButton");
const goToPanelButton = document.getElementById("panelButton");
const goToSorularButton = document.getElementById("sorularButton");
const goToSoruEkleButton = document.getElementById("SoruEkleButton");
const duzenleButton = document.getElementById('duzenleButton');
const soruaraButton = document.getElementById('soruaraButton');
        

function goToHomePage() {
    window.location.href = "index.html";
}

function goToPanel(){
    window.location.href = "panel.html";
}

function goToSorular(){
    window.location.href = "sorular.html";
}

function goToSoruEkle(){
    window.location.href = "soruekle.html";
}
function goToDuzenle(index){
    window.location.href = `duzenle.html?id=${index}`;
}

function goTosoruara(index){
    window.location.href = `soruara.html?id=${index}`;
}


duzenleButton.addEventListener('click',goToDuzenle);
homePageButton.addEventListener("click", goToHomePage);
panelButton.addEventListener("click", goToPanel);
sorularButton.addEventListener("click", goToSorular);
SoruEkleButton.addEventListener("click", goToSoruEkle);
soruaraButton.addEventListener("click", goTosoruara);