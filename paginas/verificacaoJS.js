

<script type="text/javascript">
        function verificar_perfil(){
            $(document).ready(function() {
                $('#aparecer').hide();
                $('#txtAcesso').change(function() {
                    if ($('#txtAcesso').val() == 'sim') {
                        $('#aparecer').show();
                    } else {
                        $('#aparecer').hide();
                    }
                });
            })
        }
        
      
        </script>