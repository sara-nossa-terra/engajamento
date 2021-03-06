/**
 * Classe para forçar preenchimento de números inteiros.
 *
 * @author Douglas Santana <douglasantana007@gmail.com>
 * @since 22-02-2020
 */
$("input.inteiro").keyup(function () {
    $($(this)).val(
        $(this)
            .val()
            .replace(/[^0-9]/g, "")
    );
});

/**
 *
 * Função da lib jquery-mask-plugin que é executada para aplicar
 * uma máscara os campos de data, hora e telefone
 *
 * Caso queira aplicar uma mask de data, use a classe date_input no elemento.
 * A mesma coisa com as outras tags abaixo
 *
 *
 */
$(document).ready(function ($) {
//    $(".date_input").mask("0000/00/00");
    $(".time_input").mask("00:00");
    $(".phone_input").mask("(00) 9 0000-0000");
});
