$(document).ready(function(){
// Ao clicar no botão de login, carrega o conteúdo do arquivo formlogin.php
	$(".login-button").on("click", function () {
		$(".modal-title").html("Acesse sua Área dos Mestres");
		$(".modal-body").load("./forms/formlogin.php", function () {
        $(".modal").modal("show"); // Exibe o modal após carregar o conteúdo
    });
	});

// Usa event delegation para capturar cliques em #cadastrar dentro do modal
	$(".modal").on("click", "#cadastro", function () {
    $(".modal").modal("hide"); // Fecha o modal atual

    $(".modal").on("hidden.bs.modal", function () { // Aguarda o fechamento do modal
    	$(".modal-title").html("Seja bem vindo");
    	$(".modal-body").load("./forms/formcadastro.php", function () {
            $(".modal").off("hidden.bs.modal"); // Remove o event listener para evitar múltiplas execuções
            $(".modal").modal("show"); // Reabre o modal com o novo conteúdo
        });
    });
});

});


