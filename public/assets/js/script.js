// function showAlert(mensagem,targetElementeid,timeout = 3000){
//     var messageDiv = document.getElementById(targetElementeid);
//     messageDiv.innerHTML = mensagem;
//     messageDiv.classList.remove('msgContato');

//     setTimeout(function(){
//         messageDiv.classList.add('msgContato')
//     }, timeout);
// }

// Certa
function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('');

    setTimeout(function() {
        messageDiv.classList.add('contatoMensagem');
    }, timeout);
}

// function displayError(erros){
//     let todosOsErros = "";

//     for(const[key,value] of Object.entries(erros)){
//         todosOsErros += `<div class="alert alert-danger">${value.join(
//             ", "
//         )}</div>`;
//     }
//     if(todosOsErros){
//         showAlert(todosOsErros,"contatoMensagem");
//     }
// }

function displayError(errors) {
    console.log("Objeto de Erros:", errors);

    let todosOsErros = "";

    for (const [key, value] of Object.entries(errors)) {
        todosOsErros += `<div class="alert alert-danger">${value.join(", ")}</div>`;
    }

    if (todosOsErros) {
        showAlert(todosOsErros, "contatoMensagem");
    }
}



// mudei o código pq assim imprimirá no console o objeto erros, antes tava dando erro
// document.getElementById('formContato').addEventListener('submit', function(e){

//     e.preventDefault();

//     var data = {
//         nomeContato : document.getElementById('nomeContato').value,
//         emailContato : document.getElementById('emailContato').value,
//         foneContato : document.getElementById('foneContato').value,
//         assuntoContato : document.getElementById('assuntoContato').value,
//         msgContato : document.getElementById('msgContato').value,
//     }

//     fetch('/contatos/enviar', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')

//         },
//         body: JSON.stringify(data)
//     })
//     .then(response => {
//         if(!response.ok){
//             throw new Error('Erro ao enviar o email');
//         }
//         return response.json();
//     })
//     .then(data => {
//         showAlert(`<div class="alert alert-sucess">${data.sucess}</div>`, 'contatoMensagem');
//         document.getElementById('formContato').reset();
//     })
//     .catch(errorResponse =>{
//         errorResponse.json().then(erroData =>{
//             if(erroData.erros){
//                let errorMessasges = Object.values(erroData.erros).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
//                showAlert(errorMessasges, 'contatoMensagem');
//             }
//         });
//     })
// })

// MEU OUTRO CÓDIGO
// document.getElementById('formContato').addEventListener('submit', function(e) {
//     e.preventDefault();

//     var data = {
//         nomeContato: document.getElementById('nomeContato').value,
//         emailContato: document.getElementById('emailContato').value,
//         foneContato: document.getElementById('foneContato').value,
//         assuntoContato: document.getElementById('assuntoContato').value,
//         msgContato: document.getElementById('msgContato').value
//     };


//     fetch('/contatos/enviar', {
//         method: 'POST',
//         headers: {
//             'content-type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body: JSON.stringify(data)
//     })
//     .then(response => {
//         if(response.ok){
//            return response.json().then(errorData =>{
//             throw errorData
//            });
//         }
//         return response.json();
//     })
//     .then(data => {
//        if(data.success){
//         showAlert(
//             `<div class="alert alert-sucess">${data.success}</div>`,"contatoMensagem"
//         );
//         document.getElementById('formContato').reset();
//        }
//        else{
//         showAlert(`<div class="alert alert-danger">Erro ao enviar email.</div>`,"contatoMensagem");
//        }
//     })
//     .catch(error => {
//         if (error.errors) {
//             displayError(error.errors);
//         }
//         else{
//             console.log("Erro desconhecido",error);
//         }
//     });
// });


// Chat
document.getElementById('formContato').addEventListener('submit', function (e) {
    e.preventDefault();

    var data = {
        nomeContato: document.getElementById('nomeContato').value,
        emailContato: document.getElementById('emailContato').value,
        foneContato: document.getElementById('foneContato').value,
        assuntoContato: document.getElementById('assuntoContato').value,
        msgContato: document.getElementById('msgContato').value
    };

    fetch('/contatos/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw errorData;
                });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                showAlert(
                    `<div class="alert alert-success">${data.success}</div>`, "contatoMensagem"
                );
                document.getElementById('formContato').reset();
            } else {
                showAlert(`<div class="alert alert-danger">Erro ao enviar email.</div>`, "contatoMensagem");
            }
        })
        .catch(error => {
            if (error.errors) {
                displayError(error.errors);
            } else {
                console.log("Erro desconhecido", error);
            }
        });
});




// NEWSLETTER

function news_letters(e) {

    e.preventDefault();
    e.stopPropagation();

    var data = {
        emailNews: document.getElementById("emailNews").value,
    };

    fetch("/contatos/newsLetter", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify(data),
    })
    .then((response) => {
        if (!response.ok) {
            return response.json().then((errorData) => {
                throw errorData;
            });
        }
        return response.json();
    })
    .then((data) => {
        if (!data.ok) {
            showAlert(
                `<div class="alert alert-success">${data.success}</div>`,
                "newsMensagem"
            );
            document.getElementById("newsletter-form").reset();
        } else {
            showAlert(
                `<div class="alert alert-danger">Erro ao enviar email.</div>`,
                "newsMensagem"
            );
        }
    })
    .catch((error) => {
        if (error.errors) {
            displayError(error.erros);
        } else {
            console.log("Erro desconhecido", error);
        }
    });
};
