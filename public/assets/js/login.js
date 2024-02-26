// (function ($) {
//     "use strict";

//     /*==================================================================
//     [ Validar formulário ]*/

//     // Seletor para encontrar todos os elementos de entrada com a classe .input100 dentro de .validate-input
//     var input = $('.validate-input .input100');

//     // Evento de envio do formulário
//     $('.validate-form').on('submit', function () {
//         var check = true;

//         // Itera sobre cada elemento de entrada para validar
//         for (var i = 0; i < input.length; i++) {
//             // Se a validação falhar, exibe a mensagem de validação e define check como falso
//             if (validate(input[i]) == false) {
//                 showValidate(input[i]);
//                 check = false;
//             }
//         }

//         // Retorna check, que será verdadeiro só quando todos os campos forem validados com sucesso
//         return check;
//     });

//     // Adiciona manipuladores de evento de foco para cada campo de entrada, escondendo a mensagem de validação ao obter foco
//     $('.validate-form .input100').each(function () {
//         $(this).focus(function () {
//             hideValidate(this);
//         });
//     });

//     // Função para validar um campo de entrada
//     function validate(input) {
//         // Verifica se o tipo de entrada é 'email' ou se o nome é 'email'
//         if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
//             // Utiliza uma expressão regular para validar um endereço de e-mail
//             if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
//                 return false; //  me retorna falso se o e-mail não for válido
//             }
//         } else {
//             // Verificação se o campo de entrada está vazio
//             if ($(input).val().trim() == '') {
//                 return false; // Retorna falso se o campo estiver vazio
//             }
//         }
//     }

//     // Função pra exibir a mensagem de validação
//     function showValidate(input) {
//         var thisAlert = $(input).parent();
//         $(thisAlert).addClass('alert-validate'); // Adiciona a classe 'alert-validate' ao contêiner pai
//     }

//     // esconder a mensagem de validação
//     function hideValidate(input) {
//         var thisAlert = $(input).parent();
//         $(thisAlert).removeClass('alert-validate'); // Remove a classe 'alert-validate' do contêiner pai
//     }
// })(jQuery);
