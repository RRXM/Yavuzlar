
const SORULAR_KEY = 'sorular';


function getSorular() {
    let sorular = localStorage.getItem(SORULAR_KEY);
    return sorular ? JSON.parse(sorular) : [];
}


function addSoru(soru) {
    let sorular = getSorular();
    sorular.push(soru);
    localStorage.setItem(SORULAR_KEY, JSON.stringify(sorular));
}


function deleteSoru(index) {
    let sorular = getSorular();
    sorular.splice(index, 1); 
    localStorage.setItem(SORULAR_KEY, JSON.stringify(sorular));
}


function displaySorular() {
    let sorular = getSorular();
    const soruContainer = document.querySelector('.kay');

    
    soruContainer.innerHTML = '';

    sorular.forEach((soru, index) => {
        const soruDiv = document.createElement('div');
        soruDiv.classList.add('soru');
        
        const soruText = document.createElement('h2');
        soruText.textContent = `Soru: ${soru.soruMetni}`;
        
        const sikklarText = document.createElement('p');
        sikklarText.textContent = `Şıklar: ${soru.sikklar.join(', ')}`;

        const dogruCevapText = document.createElement('p');
        dogruCevapText.textContent = `Doğru Cevap: ${soru.dogruCevap}`;
        
        const puanText = document.createElement('p');
        puanText.textContent = `Puan: ${soru.puan}`;

        const duzenleButton = document.createElement('button');
        duzenleButton.classList.add('duzenle');
        duzenleButton.textContent = 'Düzenle';
        duzenleButton.id = `duzenleButton-${index}`;
        duzenleButton.addEventListener('click', function() {
            goToDuzenle(index);
        });
        

        const silButton = document.createElement('button');
        silButton.classList.add('sil');
        silButton.textContent = 'Sil';
        silButton.onclick = () => {
            deleteSoru(index);
            displaySorular();
        };

        soruDiv.appendChild(soruText);
        soruDiv.appendChild(sikklarText);
        soruDiv.appendChild(dogruCevapText);
        soruDiv.appendChild(puanText);
        soruDiv.appendChild(duzenleButton);
        soruDiv.appendChild(silButton);
        soruContainer.appendChild(soruDiv);
    });
}


function listeleSorular() {
    let sorular = getSorular();
    const soruContainer = document.querySelector('.listele');

    soruContainer.innerHTML = '';

    sorular.forEach((soru, index) => {
        const soruDiv = document.createElement('div');
        soruDiv.classList.add('soru');
        
        const soruText = document.createElement('h2');
        soruText.textContent = `Soru: ${soru.soruMetni}`;
        
        const sikklarText = document.createElement('p');
        sikklarText.textContent = `Şıklar: ${soru.sikklar.join(', ')}`;

        const dogruCevapText = document.createElement('p');
        dogruCevapText.textContent = `Doğru Cevap: ${soru.dogruCevap}`;
        
        const puanText = document.createElement('p');
        puanText.textContent = `Puan: ${soru.puan}`;

        const duzenleButton = document.createElement('button');
        duzenleButton.classList.add('duzenle');
        duzenleButton.textContent = 'Düzenle';

        const silButton = document.createElement('button');
        silButton.classList.add('sil');
        silButton.textContent = 'Sil';
        silButton.onclick = () => {
            deleteSoru(index);
            displaySorular();
        };

        soruDiv.appendChild(soruText);
        soruDiv.appendChild(sikklarText);
        soruDiv.appendChild(dogruCevapText);
        soruDiv.appendChild(puanText);
        soruDiv.appendChild(duzenleButton);
        soruDiv.appendChild(silButton);
        soruContainer.appendChild(soruDiv);
    });
}
