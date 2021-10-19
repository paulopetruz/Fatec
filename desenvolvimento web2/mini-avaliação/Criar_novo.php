<?php

require_once "Conexao.php";

$name = $curso = $CPF = "";
$name_err = $curso_err = $CPF_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Valida nome
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Por favor entre com um nome.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Por favor digite um nome válido.";
    } else{
        $name = $input_name;
    }
       
    $input_curso = trim($_POST["curso"]);
        $curso = $input_curso;
      
    $input_CPF = trim($_POST["CPF"]);
        $CPF = $input_CPF;
    
    if(empty($name_err)){

        $sql = "INSERT INTO alunos (Nome, curso, CPF) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
     
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_curso, $param_CPF);
            
            $param_name = $name;
            $param_curso = $curso;
            $param_CPF = $CPF;
            
            if(mysqli_stmt_execute($stmt)){

                header("location: index.php");
                exit();
            } else{
                echo "Algo deu errado. Por favor, tente novamente mais tarde.";
            }
        }
         

        mysqli_stmt_close($stmt);
    }
    

    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <script type="text/javascript"> function formatar_mascara(src, mascara) {
        var campo = src.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(campo);
            if(texto.substring(0,1) != saida) {
        src.value += texto.substring(0,1);
            }
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Adicionando novo Aluno</h2>
                    </div>
                    <p>Entre com os dados do aluno abaixo.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($curso_err)) ? 'has-error' : ''; ?>">
                            <label>Curso</label>
                            <textarea type="text" name="curso" class="form-control"><?php echo $curso; ?></textarea>
                            <span class="help-block"><?php echo $curso_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($CPF_err)) ? 'has-error' : ''; ?>">
                            <label>Cpf</label>
                        
                            <input type="text" name="CPF" class="form-control" value="<?php echo $CPF; ?>" onkeypress="formatar_mascara(this,'###.###.###-##')">
                            <span class="help-block"><?php echo $CPF_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>