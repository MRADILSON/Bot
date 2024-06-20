<!DOCTYPE html>
<html lang="tp-PT">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.7.0.min.js"></script>
    <title>ChatBoot</title>

</head>
<body>
    <div class="conteudo">
        <header class="cabecalho"> ChatBoot</header>
        
        <div class="area-sms">

            <!--bot user-->
            <div class="user-bot user">
                <div class="icon">
                    <img src="icon/bot.png"/>
                </div>
                <div class="mensagem">
                    <p>ola em que posso ajudar?</p>
                </div>
            </div>

        </div>

        <div class="area-envio">
            <div class="linhas">
                <input id="valor_input" type="text" placeholder="Mensage...">
                <button id="click"><img src="icon/send.png"/></button>
            </div>

        </div>

    </div>

    <script>
        //Trabalhando com jquery
        $(Document).ready(function(){
            //Trabalhando com accao do botao
            $("#click").on("click", function(){
                //pegando os valores do input
                var $valores = $("#valor_input").val();
                var $mensagem='<div class="user-user user"><div class="mensagem"><p>'+$valores+'</p></div></div>';
                $(".area-sms").append($mensagem);
                $("#valor_input").val('');

                //Trabalhando com ajax

                $.ajax({
                    url:'mensagem.php',
                    type:'POST',
                    data:'text='+$valores,
                    success:function($resultados){
                        
                        $mostrar= '<div class="user-bot user"><div class="icon"><img src="icon/bot.png"/></div><div class="mensagem"><p>'+$resultados+'</p></div></div>'
                        $(".area-sms").append($mostrar);
                    }
                })
            })

        })
    </script>
</body>

</html>