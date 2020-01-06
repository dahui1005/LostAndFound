function checkDisable(form){
    if( form.customCheckHam.checked == true ){
        form.idham.disabled = false;
        form.idpwd.disabled = false;
    } else{
        form.idham.disabled = true;
        form.idham.value = null;
        form.idpwd.disabled = true;
        form.idpwd.value = null;

    }

}