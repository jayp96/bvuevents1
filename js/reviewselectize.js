$(document).ready(function(){

    $er_res = $('#er_name').selectize({
        
        persist: false
    });
    $event = $er_res[0].selectize;
    $event.setValue(document.getElementById('pseudo_er_name').value);	


    $year_res = $('#u_year').selectize({
        
        persist: false
    });
    $year = $year_res[0].selectize;
    $year.setValue(document.getElementById('pseudo_batch').value);

    $batch_res = $('#u_batch').selectize({
        
        persist: false
    });
    $batch = $batch_res[0].selectize;
    $batch.setValue(document.getElementById('pseudo_year').value);


});