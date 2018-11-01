<!DOCTYPE html>
<html >

<?php
include "conexao_banco.php";
$a=$_POST["peso"];
$premiacao_infinity=$a*0.003;





        $sqli = "select sum(resultado) from funcionarios";
        $query = mysqli_query($mysqli,$sqli);
        while($sqli = mysqli_fetch_array($query)){ //puxando todas as linhas da tabela do banco

            $premiacao_acumulada=$sqli['sum(resultado)'];

        }





?>
<head>

<style>

    .tabela_PF{
        width: 800px;
        border: 2px solid #000000;
        background-color: white;
        margin: auto;
    }

    .TITULOFORMULARIO:hover{
        background-color: #00009f;
    }


    .TITULOFORMULARIO{
        border:none;
        text-align: center;
        border:none;
        width: 100%;
        color: white;
        background: #000074;
        margin: auto;



    }

    .th_tabela{
        border: 1.2px solid black;
        padding: 3px;



    }


    .th_tabelaB{
        border: 1.2px solid black;
        padding: 3px;
        background-color: #9b9b9b;
    }

    .tabela{

        margin:auto;
        background: #d8d8d8;
        width: 60%;


    }
    #RS{
        border: 1.2px solid black;
        padding: 3px;
        text-align: left;
    }




</style>
</head>
<body>

<form name="form" method="post" action="">
    <section class="tabela">


<table class="tabela_PF">

    <tr> <h1 class="TITULOFORMULARIO" >  TABELA INFINITY </h1> </tr> <br>

                <tr>
                    <th class="th_tabela"><label style="text-align: left " for="peso" >PESO VENDA TOTAL </label></th>
                    <th  class="th_tabela" > <?php echo number_format($a,2,",",".");?></th>


                </tr>

                <tr>

                    <th class="th_tabela"> <label style="text-align: left" for="premiacao">PREMIAÇÃO INFINITY</label></th>
                    <th class="th_tabela" STYLE="width:50%"> R$ <?php echo number_format($premiacao_infinity,2,",",".");?></th>

                </tr>

                <tr>

                    <th class="th_tabela" >  <label style="text-align: left" for="premiacao">PONTUAÇÃO ACUMULADA</label> </th>
                    <th class="th_tabela"> <?php echo $premiacao_acumulada;?>  PONTOS </th>

                </tr>


            </table>


     <br>



<section class="tabelaB">


<table class="tabela_PF">


    <tr>

        <th class="th_tabelaB">FUNCIONÁRIO</th>
        <th class="th_tabelaB">PONTUACÃO</th>
        <th class="th_tabelaB">PREMIAÇÃO</th>

    </tr>

    <tr>
        <?php



        $sqli = "SELECT * FROM funcionarios";
        $query = mysqli_query($mysqli,$sqli);

        while($sqli = mysqli_fetch_array($query)){ //puxando todas as linhas da tabela do banco
            $a=0;
            $nome_funcionario=$sqli["nome_funcionario"];
            $resultado_pontuacao=$sqli["resultado"];
            $premiacao=($resultado_pontuacao/$premiacao_acumulada)*$premiacao_infinity;




            if($resultado_pontuacao<6){
                $premiacao= ' -- ';
                echo "<tr><th class='th_tabela'>" . $nome_funcionario . "</th><th class='th_tabela'>" . $resultado_pontuacao . "</th><th class='th_tabela' id='RS'>  R$ &nbsp " . $premiacao;
            }
            else{
                if($premiacao>485.71){
                    $premiacao=485.71;
                     echo "<tr><th class='th_tabela'>" . $nome_funcionario . "</th><th class='th_tabela'>" . $resultado_pontuacao . "</th><th class='th_tabela' id='RS'>  R$  &nbsp " . number_format($premiacao,2,",",".");

                }else {
                    echo "<tr><th class='th_tabela'>" . $nome_funcionario . "</th><th class='th_tabela'>" . $resultado_pontuacao . "</th><th class='th_tabela' id='RS'>  R$  &nbsp " . number_format($premiacao, 2, ",", ".");
                }
            }

        }






        ?>


    </tr>



</table>
</section>


    </section>

</form>
</body>
</html>


