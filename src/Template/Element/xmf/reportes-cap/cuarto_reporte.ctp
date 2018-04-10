<?= $this->Form->create('ForthReport',array('id'=>'ForthReport'));?>
<h5 class="info-text">CIERRE DE LA CASILLA Y FLUJO DE VOTACIÓN FINAL. </h5>
<div class="row">

        <div class="col-sm-6 ">
            <div class="form-group">
                <label>HORA DEL CIERRE</label>
                <input type="text" name="hr_cierre" id="hr_cierre" class="form-control clockpicker" value="" >
                <input type="hidden" name="casilla_id" id="casilla_id" class="form-control" value="<?=$_SESSION['Casilla']['id'];?>">

            </div>
        </div>
        <div class="col-sm-6">
            <div class="tim-title">
                <h5><small>HABÍA GENTE EN LA COLA?</small></h5>
            </div>

                <label class="radio">
                <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-dot-circle-o fa-base"></span></span><input name="habia_gente_fila" data-toggle="radio" id="habia_gente_fila" value="1" checked="" type="radio">
                <i></i>SI
                </label>
                <label class="radio">
                <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-dot-circle-o fa-base"></span></span><input name="habia_gente_fila" data-toggle="radio" id="habia_gente_fila" value="0" type="radio">
                <i></i>NO
                </label>
        </div>

</div>
<div class="row">
    <div class="col-sm-6 text-center">
        <div class="form-group">
            <label>VOTANTES</label>
            <input id="votantes" name="votantes" class="form-control valid"  aria-invalid="false" type="text">
        </div>
    </div>
    <div class="col-sm-6 text-center ">
            <div class="form-group">
                <label>PROMOVIDOS</label>
                <input id="promovidos" name="promovidos" class="form-control valid"  aria-invalid="false" type="text">
            </div>
        </div>

</div>
<div class="row">
    <button type="button" id="btn_reporte_4" class="btn btn-fill btn-success" onclick="addForthReport();">Enviar Reporte</button>
    <p>

    </p>
</div>
<?= $this->Form->end();?>

<script>
 function addForthReport()
{
    $.ajax({
        url: '/Xmf/addForthReport',
        type: "POST",
        dataType: "json",
        data: {
            casilla_id:$('#casilla_id').val(),           
            hr_cierre:$('#hr_cierre').val(),
            habia_gente_fila:$('#habia_gente_fila').is(':checked'),           
            votantes:$('#votantes').val(),           
            promovidos:$('#promovidos').val(),           
        }
        ,
        success: function (json) {

            $.notify ({
                 icon: 'ti-package',
                 message: "<b>Cuarto Reporte</b> Enviado."
            
               },{
                   type: 'danger',
                   timer: 2000
               });
               $('#btn_reporte_4').attr('disabled','disabled');
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr);
        }
    });
}

$('.clockpicker').clockpicker({
    placement: 'right',
    align: 'left',
    autoclose: true
});
</script>