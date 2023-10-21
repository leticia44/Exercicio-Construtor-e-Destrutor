<?php
    include("pagina2.php");

    //Objeto
    $conta1 = new conta("Douglas Ribeiro", "0731", "987654-21", 400, "ativa");

    //Método
    $conta1->Depositar(200);
    $conta1->Sacar(25);

    //Imprimir valor do saldo
    echo 
    "Favorecido: " .$conta1->Cliente. "<br/>
        Conta: ".$conta1->Conta. "<br/>
            Ag: ".$conta1->Agencia. "<br/>
            Saldo: ".$conta1->ObterSaldo()."<br/>";
?>