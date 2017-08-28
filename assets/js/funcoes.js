montaHorario();

function montaHorario(){
    var comboBox = document.getElementById("comboBox");
    var option = [];

    for (var i = 0; i < 24; i++ ){
        if (i < 12){
            montaOpcao(i+1,':00 A.M.');
        } else {
           montaOpcao(i-11,':00 P.M.');
        }
    }
}

function montaOpcao(horas, ampm){
    var opcao = document.createElement("OPTION");
    var texto = (horas + ampm);
    var textoOpcao = document.createTextNode(texto);
    opcao.appendChild(textoOpcao);
    document.getElementById("comboBox").appendChild(opcao);
}