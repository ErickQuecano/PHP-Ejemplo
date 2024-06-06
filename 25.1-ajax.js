function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando...."+nombre)

let datos ={
    nombre : $nombre
    };

    $.ajax({
    url :"26-ajax-pdo.php",
    type :"post",
    data : datos,
    success : function(result){
        //debugger;
        console.log(result);
        const pacientes=$.parseJSON(result);
        pacientes.forEach(item =>{
            agregarFilas("#tabla",item);});
    } 

    })
    return;
}

function agregarFilas(id,paciente) {
    const html=
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+    
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button' onclick=editar('"+paciente.nombres+"','"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"');>Editar</button></td>"+
    "</tr>";
    $(id+" tr:last").after(html);
}
 
function editar(nombres,edad,talla_m,peso_kg,sintoma_tos,sintoma_fiebre,sintoma_disnea) {
    $('#exampleModal').modal('show');    
    $("#nombre2").val(nombres);
    $("#edad").val(edad);
    $("#talla").val(talla_m);
    $("#peso").val(peso_kg);

    if (sintoma_tos == 1) {
        $('#sintoma_tos').prop('checked', true);
      } else {
        $('#sintoma_tos').prop('checked', false);
      }
    if (sintoma_fiebre == 1) {
        $('#sintoma_fiebre').prop('checked', true);
      } else {
        $('#sintoma_fiebre').prop('checked', false);
      }
    if (sintoma_disnea == 1) {
        $('#sintoma_disnea').prop('checked', true);
      } else {
        $('#sintoma_disnea').prop('checked', false);
      }
}
function actualizar() {
    const $nombre = $("#nombre2").val();
    const $edad = $("#edad").val();
    const $talla = $("#talla").val();
    const $peso = $("#peso").val();
    const $sintoma_tos = $("#sintoma_tos").val();
    const $sintoma_fiebre = $("#sintoma_fiebre").val();
    const $sintoma_disnea = $("#sintoma_disnea").val();
    const $id = $("#id_paciente").val();
    let datos ={
        nombre : $nombre,
        edad : $edad,
        talla : $talla,
        peso : $peso,
        sintoma_tos : $sintoma_tos,
        sintoma_fiebre : $sintoma_fiebre,
        sintoma_disnea : $sintoma_disnea,
        id : $id
    };
    $.ajax({
        url :"26.1-actualizar-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {              
            alert("Se guardo los datos correctamente de "+result);            
        }
    })
 
 
    return;
}
 
function cancelar() {
    $('#exampleModal').modal('hide');    
}