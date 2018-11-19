    
submitForms = function (){
    document.getElementById('nis_hidden').value = getNis();
    document.getElementById("form_siswa").submit();
    document.getElementById("form_wali").submit();
}



getNis = function (){
   var nis =  document.getElementById("nis").value;
   return nis;
}

