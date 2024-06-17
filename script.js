function showSection(section) {
    document.querySelectorAll('.section').forEach(sec => {
        sec.style.display = 'none';
    });
    document.getElementById(`${section}-section`).style.display = 'block';
}

function cekKhodam() {
    const name = document.getElementById('name-input').value;
    fetch('cek_khodam.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `name=${encodeURIComponent(name)}`,
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('khodam-result-text').innerText = data.khodam;
        const history = document.getElementById('khodam-history');
        const li = document.createElement('li');
        li.textContent = `${name}: ${data.khodam}`;
        history.appendChild(li);
    });
}

function cekCok() {
    const word = document.getElementById('cok-input').value;
    fetch('cek_cok.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `word=${encodeURIComponent(word)}`,
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('cok-result-text').innerText = data.cok;
    });
}

function cekBebas() {
    const input = document.getElementById('bebas-input').value;
    fetch('cek_bebas.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `input=${encodeURIComponent(input)}`,
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('bebas-result-text').innerText = data.bebas;
    });
}

function cekBau() {
    const name = document.getElementById('bau-input').value;
    fetch('cek_bau.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `name=${encodeURIComponent(name)}`,
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('bau-result-text').innerText = data.bau;
    });
}

document.addEventListener('DOMContentLoaded', () => {
    showSection('khodam');
});
