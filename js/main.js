// fungsi untuk about page
function menampilkanContentAbout(idKategoriKonten){

    document.getElementById('main-skill').style.display = 'none';
    document.getElementById('rewards').style.display = 'none';
    document.getElementById('education').style.display = 'none';
    document.getElementById(idKategoriKonten).style.display = 'block';


    document.getElementById('btn-main-skills').classList.remove('active');
    document.getElementById('btn-awards').classList.remove('active');
    document.getElementById('btn-education').classList.remove('active');

    if(idKategoriKonten === 'main-skill'){
        document.getElementById('btn-main-skills').classList.add('active');
    } else if(idKategoriKonten === 'rewards'){
        document.getElementById('btn-awards').classList.add('active');
    } else if(idKategoriKonten === 'education'){
        document.getElementById('btn-education').classList.add('active');
    }

}
menampilkanContentAbout('main-skill');



// bagian services
let posisiGeser = 0;
function geserCard(arah) {
    const container = document.querySelector('.contain-services');
    const cardWidth = document.querySelector('.card').offsetWidth + 20; // lebar card + jarak antar card

    if (arah === 'kiri') {
        posisiGeser = posisiGeser + cardWidth;
        if (posisiGeser > 0) {
            posisiGeser = 0;
        }
    } else if (arah === 'kanan') {
        posisiGeser = posisiGeser - cardWidth;
        const maxGeser = -(container.scrollWidth - container.offsetWidth);
        if (posisiGeser < maxGeser) {
            posisiGeser = maxGeser;
        }
    }

    container.style.transform = `translateX(${posisiGeser}px)`;
}



// bagian review


