
var i = 0;
var auxTotal = 0;

$(document).ready(function () {

    

    document.getElementById("btnAddRow").addEventListener('click', function () {

        //Criar botões
        var btnEditar = document.createElement("button");
        var edit = document.createTextNode("!");
        btnEditar.appendChild(edit);
        btnEditar.setAttribute("style", "float: right");
        btnEditar.setAttribute("id", "btnEditar");
        btnEditar.setAttribute("class", "btn btn-warning btn-sm");

        var btnExcluir = document.createElement("button");
        var exc = document.createTextNode("X");
        btnExcluir.appendChild(exc);
        btnExcluir.setAttribute("class", "btn btn-danger btn-sm excluir");
        btnExcluir.setAttribute("data-id", i);

        //Registro da tabela
        var operacao = document.getElementById('operacao').value;
        var ticker = document.getElementById('ticker').value;
        var vPapel = document.getElementById('papel').value;
        var vQTD = document.getElementById('qtd').value;
        var vTPU = document.getElementById('pu').value;
        var vTxLiquidacao = document.getElementById('txLiquidacao').value;
        var vTxRegistro = document.getElementById('txRegistro').value;
        var vTxEmolumento = document.getElementById('txEmolumento').value;
        var vIr = document.getElementById('ir').value;

        var vPT = vQTD * vTPU; // Valor da compra

        auxTotal += vPT;

        var table = document.getElementsByTagName('table')[0];

        var newRow = table.insertRow(table.rows.length);
        newRow.setAttribute("id", "tr_"+i);

        var cel1 = newRow.insertCell(0);
        var cel2 = newRow.insertCell(1);
        var cel3 = newRow.insertCell(2);
        var cel4 = newRow.insertCell(3);
        var cel5 = newRow.insertCell(4);
        var cel6 = newRow.insertCell(5);
        var cel7 = newRow.insertCell(6);
        var cel8 = newRow.insertCell(7);
        var cel9 = newRow.insertCell(8);
        var cel10 = newRow.insertCell(9);
        var cel11 = newRow.insertCell(10);
        var cel12 = newRow.insertCell(11);

        cel1.innerHTML = operacao;
        cel2.innerHTML = ticker;
        cel3.innerHTML = vPapel;
        cel4.innerHTML = vQTD;
        cel5.innerHTML = vTPU;
        cel6.innerHTML = vPT.toFixed(2);

        cel7.innerHTML = vTxLiquidacao;
        cel8.innerHTML = vTxRegistro;
        cel9.innerHTML = vTxEmolumento;
        cel10.innerHTML = vIr;

        cel11.append(btnEditar);
        cel12.append(btnExcluir);

        if (i != 0) {
            var a = i;
            for (a > 0; a == i; a++) {

                $('#table > thead  > tr:not(:has(th))').each(function (e) {
                    var customerId = vTxLiquidacao / auxTotal * $(this).find("td").eq(5).html();
                    $(this).find("td").eq(6).html(vTxLiquidacao / auxTotal * $(this).find("td").eq(5).html());
                    //console.log(customerId);
                });
            }

        }

        i++;

        // document.getElementById("btnExcluir").addEventListener("click", function () {

        //     $('#table > thead  > tr:not(:has(th))').each(function (e) {

        //         // $(this).find("td").eq(6).html;
        //         $(this).find("td").parent().remove(); //Deleting TD element
        //      //   $(this).remove();
          
        //         i = 0;
        //         a = 0;
        //         auxTotal = 0;
      
        //     });
        // });

        //console.log("valor uax: " + auxTotal);
    });
});

$(document).on('click', '.excluir', function(event) {
      $("#tr_"+ $(this).attr("data-id")).remove();
});

$(document).ready(function () {
    document.getElementById("btnCalc").addEventListener("click", function () {

        var vTotalCompra = tCompra.value;
        var vTotalVenda = tVenda.value;
        var vTxLiquidacao = txLiquidacao.value;
        var vTxRegistro = txRegistro.value;
        var vTxEmolumento = txEmolumento.value;

        var total = parseFloat(vTotalVenda) - parseFloat(vTotalCompra) - parseFloat(vTxLiquidacao) - parseFloat(vTxRegistro) - parseFloat(vTxEmolumento);

        document.getElementById("tLiquido").value = (total);

    });
});




