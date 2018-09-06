function agregaform(datos){
    
    d=datos.split('||');
    
    $('#app_ing').val(d[0]);
    $('#nom_ing').val(d[1]);
    $('#lpu_ing').val(d[2]);
    $('#org_ing').val(d[3]);
    $('#civil_ing').val(d[4]);
    $('#edad_ing').val(d[5]);
    $('#fecha_ing').val(d[6]);
    $('#tipo_ing').val(d[7]);
    $('#sexo_ing').val(d[8]);
    $('#naciona_ing').val(d[9]);
    $('#motivo_ing').val(d[10]);
    $('#fecha_nac_ing').val(d[11]);
    $('#cond_sex_ing').val(d[12]);
    $('#sit_ing').val(d[13]);
    $('#juz_ing').val(d[14]);
    $('#delito_ing').val(d[15]);
    $('#art_ing').val(d[16]);
    

}

function editarform(){

    document.getElementById("app_ing").disabled = false;
    document.getElementById("nom_ing").disabled = false;
    document.getElementById("fecha_ing").disabled = false;
    document.getElementById("edad_ing").disabled = false;
    document.getElementById("sexo_ing").disabled = false;
    document.getElementById("fecha_nac_ing").disabled = false;
    document.getElementById("cond_sex_ing").disabled = false;
    document.getElementById("civil_ing").disabled = false;
    document.getElementById("naciona_ing").disabled = false;
    document.getElementById("tipo_ing").disabled = false;
    document.getElementById("lpu_ing").disabled = false;
    document.getElementById("sit_ing").disabled = false;
    document.getElementById("org_ing").disabled = false;
    document.getElementById("motivo_ing").disabled = false;
    document.getElementById("juz_ing").disabled = false;
    document.getElementById("delito_ing").disabled = false;
    document.getElementById("art_ing").disabled = false;

}

function editarformTrue(){

    document.getElementById("app_ing").disabled = true;
    document.getElementById("nom_ing").disabled = true;
    document.getElementById("fecha_ing").disabled = true;
    document.getElementById("edad_ing").disabled = true;
    document.getElementById("sexo_ing").disabled = true;
    document.getElementById("fecha_nac_ing").disabled = true;
    document.getElementById("cond_sex_ing").disabled = true;
    document.getElementById("civil_ing").disabled = true;
    document.getElementById("naciona_ing").disabled = true;
    document.getElementById("tipo_ing").disabled = true;
    document.getElementById("lpu_ing").disabled = true;
    document.getElementById("sit_ing").disabled = true;
    document.getElementById("org_ing").disabled = true;
    document.getElementById("motivo_ing").disabled = true;
    document.getElementById("juz_ing").disabled = true;
    document.getElementById("delito_ing").disabled = true;
    document.getElementById("art_ing").disabled = true;
    
}
    
