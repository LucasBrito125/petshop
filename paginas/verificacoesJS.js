function verificar_perfil(){
    $(document).ready(function() {
        $('#aparecer').hide();
        $('#txtAcesso').change(function() {
            if ($('#txtAcesso').val() == 'nao') {
                $('#aparecer').hide();
            } else {
                $('#aparecer').show();
            }
        });
    });
}

function verificar(){
    $(document).ready(function() {
        $('#aparecer').hide();
        $('#txtObservacao').change(function() {
            if ($('#txtObservacao').val() == 'nao') {
                $('#aparecer').hide();
            } else {
                $('#aparecer').show();
            }
        });
    });
}

    function verificar_data(){
        var data = document.getElementById('txtDataContratacao').value;
        data = data.replace(/\//g, "-"); 
        var data_array = data.split("-");
        var dia = data_array[2];
        var mes = data_array[1];
        var ano = data_array[0];

        if(data_array[0].length != 4){
            dia = data_array[0];
            mes = data_array[1];
            ano = data_array[2];
        }

        var hoje = new Date();
        var d1 = hoje.getDate();
        var m1 = hoje.getMonth()+1;
        var a1 = hoje.getFullYear();

        var d1 = new Date(a1, m1, d1);
        var d2 = new Date(ano, mes, dia);

        var diff = d2.getTime() - d1.getTime();
        diff = diff / (1000 * 60 * 60 * 24);

        if(diff < 0){
            alert("Data não pode ser anterior ao dia de hoje!");
        }else if(diff > 1){
                alert("Data não pode ser maior que a atual!");
        }else{
                //alert("Data válida!");
             }

    }

    