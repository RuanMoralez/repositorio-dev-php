<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>TargetData - <c class="jobs">Enriquecimento</c></h1>
        </div>
        <div class="container">
            <form action ="<?php echo URL_BASE . "enriquecimento/upload" ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Escolha um arquivo do seu computador</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="arquivo"><br>
                    <input type="submit" class="btn btn-primary" id="exampleFormControlFile1" name = "enviar" value="Enviar"><br><br>
                    <!--<div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div> -->
                </div>
            </form>
            
            <p><?php echo $mensagem?></p><br>
            <table class="table table table-striped table-bordered table-condensed table-hover">
                <tr>
                    <td>Id</td>  
                    <td>Arquivo</td>  
                    <td>nome</td>
                    <td>Ação</td>
                </tr>
                <tr>
                    <td><?php echo $id; ?></td>  
                    <td><?php echo $nome; ?></td>  
                    <td><?php echo $newName; ?></td>  
                    <td><?php echo $acao;?></td>
                </tr>
            </table>
        </div>
    </div>
</div>