function submitForm() {
    const formData = new FormData(document.getElementById('plate_form'));

    fetch(routeEnter, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        body: formData
    })
    .then(response => {
        // Verifica se a resposta não foi bem-sucedida
        if (! response.ok) {
            return response.json().then(data => {
                // Lança um erro com a mensagem do servidor
                throw new Error(data.message || 'Erro desconhecido');
            });
        }
        return response.json();
    })
    .then(data => {
        console.log('sucesso')

        // Preenche o modal com os dados retornados
        document.getElementById('resident').innerText    = `Morador: ${data.resident}`;
        document.getElementById('condominium').innerText = `Condomínio: ${data.condominium}`;
        document.getElementById('domicile').innerText    = `Residência: ${data.domicile}`;
        document.getElementById('datetime').innerText    = `Data/Horário: ${data.datetime}`;
        document.getElementById('automobile').innerText  = `Veículo: ${data.automobile}`;
        document.getElementById('plate').innerText       = `Placa: ${data.plate}`;

        openModal();
    })
    .catch(error => openErrorModal(error.message));
}


function openModal() {
    document.getElementById("modal").style.display = "flex";
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}

function openErrorModal(message) {
    console.log('entrou no catch');

    document.getElementById("error_modal").style.display = "flex";
    document.getElementById("error_message").innerText = message;
}

function closeErrorModal() {
    document.getElementById("error_modal").style.display = "none";
}
