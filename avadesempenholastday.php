<!DOCTYPE html>

<html lang="pt-br">

<head>
    <style>


        hr{
            border:1px solid #5a5a5a;

        }

        .respostas{
            font-family: Verdana,sans-serif;

        }

        .pergunta:hover{
            background-color: #00009f;
        }

        .pergunta{
            width: 100% ;
            padding: 3px;
            height: 25px  ;
            color: white;
            background: #00005f;

        }
        .formulario{

            width: 54%;
            margin:auto;
            background: #dddddd;
        }

        td {

            border:1px solid #4054aa;
            color: #4257af;
            font-size:90%;
            text-align:left;
        }

        .titulodoformulario:hover{
            background-color: #00009f;
        }

        .titulodoformulario{

            font-style: italic;
            border:none;
            text-align: center;
            width: 100%;
            color: white;
            background: #000074;



        }
        fieldset{
            margin: auto;
            border:1px solid #c7c7c7;
            width:95%;
            background: #ffffff;

        }


        .tabela5{
            width: 100%;
            background-color: #f3f3f3;



        }





    </style>
    <meta charset="UTF-8">
    <title>Avaliação de Desempenho</title>

</head>
<body>

<section class="formulario">

    <h1 class="titulodoformulario"> Avaliação de Desempenho </h1>





    <form  name="form" method="POST" action="cadastrando_formulario-EditadoporRa.php" >




        <fieldset style="background-color: #f3f3f3">
            <section class="pergunta">
                <td> Nome do Funcionario</td>
            </section>
           <!--o segredo da caixa que envolve as questoes esta aqui que diz o tamanho da caixa e no fieldset. -->


                        <section class="tabela5">

                            <div style="margin-top:10px;float:left;width: 40%;height: 100px ">
                                <label  for="nome_peso" >Nome Funcionário:  </label>
                            <input  type="text" name="func" id="func">  </input><br><br>

                            <label style="margin-top: 10px" for="nome_setor" >Setor:</label> <br>
                            <input  type="text" name="setor" id="setor">  </input>
                            </div>

                            <div  style="margin-top:10px;margin-left:10%;float:left;width: 40%;height: 100px ">
                                <label  for="nome_super" >Supervisor: </label> <br>
                                <input  type="text" name="super" id="super">  </input><br><br>
                            </div>

                        </section>

        </fieldset>
        <br>





        <fieldset>
    <section class="pergunta">
        <td> <font size="4px">1ª)</font> O Funcionário faltou?</td>
    </section>
    <table  cellspacing="5" ><!--o segredo da caixa que envolve as questoes esta aqui que diz o tamanho da caixa e no fieldset. -->

    <p>
    <tr  style="color:black">

        <section class="respostas">
        <input type="radio" value="SIM" name="pergunta1" >SIM</input><br> <hr>
        <input type="radio" value="NAO" name="pergunta1" >NÃO</input>

        </section>

    </tr>
    </p>

    </table>
    </fieldset>
    <br>





    <fieldset>
    <section class="pergunta">
        <td > <font size="4px">2º)</font> O funcionário chegou atrasado mais de duas vezes?</td>
    </section>
    <table cellspacing="10">
    <p>
    <tr style="color:black">

        <section class="respostas ">
        <input type="radio" value="SIM" name="pergunta2">SIM</input><br><hr>
        <input type="radio" value="NAO" name="pergunta2">NÃO</input>
        </section>

    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td > <font size="4px">3º)</font> O funcionário apresentou algum comportamento de reprovação? </td>
    </section>
        <table cellspacing="10">

    <p>
    <tr style="color:black">

        <section class="respostas">
        <input type="radio" value="SIM" name="pergunta3">SIM</input><br> <hr>
        <input type="radio" value="NAO" name="pergunta3">NÃO</input><br><br><br>
        </section>
            <em style="font-family: Verdana">Justifique:</em> <br>
            <textarea rows="5" cols="70" style=" border-radius:1px " name="Justificativa3"></textarea>


    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td><font size="4px"> 4º)</font> O funcionário apresentou melhoria de conhecimento?</td>
    </section>
    <table cellspacing="10">
    <p>
    <tr style="color:black">

         <section class="respostas">
        <input  type="radio" value="SIM" name="pergunta4">SIM</input><br> <hr>
        <input type="radio" value="NAO" name="pergunta4">NÃO</input><br><br><br>
         </section>
        <em style="font-family: Verdana">Justifique:</em> <br>
        <textarea rows="5" cols="70" style=" border-radius:1px " name="Justificativa4"></textarea> <!--rows são linhas e cols são colunas -->

    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td><font size="4px"> 5º)</font> Qual o nível de comportamento você enxerga no funcionário?</td>
    </section>
        <table cellspacing="10">

    <p>
    <tr style="color:black">

        <section class="respostas">
        <input type="radio" value="EXC" name="pergunta5">Excelente</input><br> <hr>
        <input type="radio" value="MED" name="pergunta5">Médio</input> <br><br> <br>
        </section>
        <em style="font-family: Verdana">Justifique:</em> <br>
        <textarea rows="5" cols="70" style=" border-radius:1px "  name="Justificativa5"> </textarea>

    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td><font size="4px"> 6º)</font> O funcionário colabora com melhorias para o setor e empresa?</td>
    </section>
    <table cellspacing="10">

    <p>
    <tr style="color:black">

        <section class="respostas">
        <input type="radio" value="SIM" name="pergunta6">SIM</input><br> <hr>
        <input type="radio" value="NAO" name="pergunta6">NÃO</input> <br><br><br>
        </section>
        <em style="font-family: Verdana">Justifique:</em> <br>
        <textarea rows="5" cols="70" style=" border-radius:1px " name="Justificativa6"></textarea>

    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td><font size="4px"> 7º)</font> O funcionário respeita as normais estabelecidas para o setor empresa?</td>
    </section>
    <table cellspacing="10">

    <p>
    <tr style="color:black">

        <section class="respostas">
        <input type="radio" value="SIM" name="pergunta7">SIM</input><br> <hr>
        <input type="radio" value="NAO" name="pergunta7">NÃO</input><br><br><br>
        </section>
        <em style="font-family: Verdana">Justifique:</em> <br>
        <textarea rows="5" cols="70" style=" border-radius:1px " name="Justificativa7"></textarea>



    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td><font size="4px"> 8º)</font> O setor e obrigações do funcionário está em dias?</td>
    </section>
    <table cellspacing="10">
    <p>
    <tr style="color:black">

        <section class="respostas">
        <input type="radio" value="SIM" name="pergunta8">SIM</input><br> <hr>
        <input type="radio" value="NAO" name="pergunta8">NÃO</input><br><br><br>
        </section>
        <em style="font-family: Verdana">Justifique:</em> <br>
        <textarea rows="5" cols="70" style=" border-radius:1px " name="Justificativa8"></textarea>


    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td><font size="4px"> 9º)</font> O funcionário exerce algum cargo de responsabilidade?</td>
    </section>
    <table cellspacing="10">

    <p>
    <tr style="color:black">

        <section class="respostas">
        <input type="radio" value="SIM" name="pergunta9">SIM</input> <br> <hr>
        <input type="radio" value="NAO" name="pergunta9">NÃO</input><br><br><br>
        </section>
        <em style="font-family: Verdana">Justifique:</em> <br>
        <textarea rows="5" cols="70" style=" border-radius:1px " name="Justificativa9"></textarea>


    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <fieldset>
    <section class="pergunta">
        <td><font size="4px"> 10º)</font> Qual o nível de conhecimento do funcionário em relação aos seus pares?</td>
    </section>
        <table cellspacing="10">

    <p>
    <tr style="color:black">

        <section class="respostas">
        <input type="radio" value="IGUAL" name="pergunta10">IGUAL</input> <br> <hr>
        <input type="radio" value="DIFERE" name="pergunta10">DIFERENCIADO</input><br><br><br>
        </section>
        <em style="font-family: Verdana">Justifique:</em> <br>
        <textarea rows="5" cols="70" style=" border-radius:1px " name="Justificativa10"></textarea>


    </tr>
    </p>
    </table>
    </fieldset>
    <br>



    <input type="submit" style=" width: 180px" onclick="alert('Respondido')"  valor="ENVIAR" ">
    <input type="reset" style="width: 150px"  value="Limpar Tudo">

</form>
</section>
</body>

</html>
