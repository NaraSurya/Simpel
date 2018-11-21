    
submitForms = function (){
    document.getElementById('nip_hidden').value = getNip();
    document.getElementById("form_guru").submit();
    document.getElementById("form_wali").submit();
}



getNis = function (){
   var nip =  document.getElementById("nip").value;
   return nip;
}

