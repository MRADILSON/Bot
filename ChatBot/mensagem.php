<?php
//Conectando com o banco de dados

$conn = mysqli_connect("localhost","root","","bot") or die("falha na conexão");
$recebendo_dados=mysqli_real_escape_string($conn, $_POST['text']); //pegando os dados do input
$buscarBd="SELECT respostas FROM list WHERE perguntas LIKE '%$recebendo_dados%'";

$sql=mysqli_query($conn, $buscarBd) or die('Erro');

if(mysqli_num_rows($sql)>0){
    $fecharBd=mysqli_fetch_assoc($sql);
    $mostrar=$fecharBd['respostas'];
    echo $mostrar;

}else{
    echo"Desculpa não entendi oque querias dizer, por favor tente de novo!";
}

?>