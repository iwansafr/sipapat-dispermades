$(document).ready(function(){
	let load_desa = () => {
    $.ajax({
      url:_URL+'home/desa/ajax_kep_des',
      type:'get',
      processData: false,
      contentType: false,
      success:function(re){
        if(re.success){
          var data = re.data;
          var table = $('.dataTable').find('tbody');
          for(var i = 0, l = data.length; i < l; i++){
            var no = i+1;
            table.append(
              '<tr>'+
                '<td>'+no+'</td>'+
                '<td>'+data[i]['nama']+'</td>'+
                '<td>'+data[i]['desa']+'</td>'+
              '</tr>'
              );
          }
          $('.dataTable').dataTable();
        }
      }
    });
  }
  load_desa();
});