<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>LOGIN</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-color: #8ffbff;
        
        }
        

        form {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 150px; 
            margin: -130px 0 0 -210px; 
            padding:10px;
           
        }

        fieldset {
            width: 400px;
            border: 2px solid #004ba1;
            border-radius: 10px;
            padding: 20px;
            text-align: left;
            background: linear-gradient(90deg, rgb(14, 157, 201), #50d6db,  rgb(14, 157, 201));
            -webkit-background: linear-gradient(90deg, rgb(14, 157, 201), #50d6db, rgb(14, 157, 201));
            box-shadow: 0px 0px 10px rgba(0,0,0,.5);
            
        }

        legend {
            background-color: #03cbda;
            border: 1px solid #8ffbff;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            text-transform: uppercase;
            box-shadow: 0px 0px 10px rgba(0,0,0,.5);
            
        }
        .title{
            padding: 5px;
            text-align: right;
            font-size: 12pt;
            margin: 14px;
        }
        input{
            float: right;
            padding: 5px;
            text-align: left;
            background: rgba(225, 225, 225, 0.8);
        }

        input:hover{
         background-color: #dddddd;
         }


        input#enviar{
            float: right;
            border-radius: 5px;
            background: linear-gradient(90deg, rgb(13, 222, 230), #b1fcff,  rgb(13, 222, 230));
            -webkit-background: linear-gradient(90deg, rgb(13, 222, 230), #b1fcff, rgb(13, 222, 230));
            width: 80px;
            text-align: center;
        }

        input#enviar:hover{
            background: linear-gradient(90deg, rgb(28, 191, 197), #6cf2f7,  rgb(28, 191, 197));
            -webkit-background: linear-gradient(90deg, rgb(28, 191, 197), #6cf2f7, rgb(28, 191, 197));
        }
        
    </style>
</head>

<body>
    <div class="tela">
        <form action="/logar" method="post">
            {{csrf_field()}}
            <fieldset>
                <legend>LOGIN</legend>
                <label for="nome" class="title">USUÁRIO:</label><input type="text" id="nome" name="nome" size="40" placeholder="Digite seu usuário..."/><br /><br/>
                <label for="senha" class="title">SENHA:</label><input type="password" id="senha" name="senha" size="40" placeholder="Digite sua senha..."/><br /><br/>
                <input type="submit" value="Acessar" id="enviar" />
            </fieldset>
        </form>
    </div>
</body>

</html>