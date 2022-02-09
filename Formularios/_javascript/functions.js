function changephotos (foto){
	document.getElementById("imagens").src = foto;
}

function ver_preenchimento(form){
	document.write("Dados enviados com sucesso")
}

function envia(){
				var nome = document.getElementById("IDnome");

				if (nome.value != ""){
				 window.alert("Obrigado sr(a)" + nome.value + " os seus dados foram enviados com sucesso")
				}
}

/*function ver_preenchimento(){
	var element = document.getElementByTagName("texto")
	if(element == ""){
		alert("Digite algum texo")
	}if(element<> ""){
		alert("Texto enviado com sucesso")
	}
	}

function configentradas(){ formata_input()
	var elemento = document.getElementById(id);
	elemento.style.boxShadow = "2px 2px 2px #C7F1F8";
	elemento.placeholder = "Você está no campo" + id;

}
function formata_entrada(id){
	var elemento = document.getElementById(id);
	elemento.placeholder = id;
}
function modifica_nome(id){
	var elemento = document.getElementById(id);
	elemento.placeholder = id;
}*/

/*MANIPULAÇÃO DE ARQUIVO JSON*/
function escreve_dados(){
var objeto = JSON.parse('{"nome":"Leonardo","sobrenome":"Rocha","sexo":"Masculino","Profissão":"professor"},\
{"nome":"Claudia","sobrenome":"Siqueira","sexo":"Feminino","Profissão":"Assistente Administrativo"},\
{"nome":"Paula","sobrenome":"Cabral de Souza","sexo":"Feminino","Profissão":"Presidente"}');

console.log(objeto.colaboradores[0].nome);
}
