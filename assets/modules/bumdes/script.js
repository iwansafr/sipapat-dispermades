$(document).ready(function(){
	let load_desa = () => {
    $('.dataTable').find('tbody').append('<tr id="tr_loading"><td colspan="3" align="center">loading data ...</td></tr>');
    $.ajax({
      url:_URL+'home/desa/ajax_bumdes',
      type:'get',
      processData: false,
      contentType: false,
      success:function(re){
        if(re.success){
          var data = re.data;
          var table = $('.dataTable').find('tbody');
          // var id = setInterval(frame,100);
          for(var i = 0, l = data.length; i < l; i++){
            var no = i+1;
            table.append(
              '<tr>'+
                '<td>'+no+'</td>'+
                '<td>'+data[i]['nama']+'</td>'+
                '<td>'+data[i]['desa']+'</td>'+
                '<td>'+data[i]['kecamatan']+'</td>'+
              '</tr>'
              );
          }
          $('#tr_loading').remove();
          $('.dataTable').dataTable();
        }else{
          console.log('mohon maaf data tidak ditemukan');
        }
      }
    });
  }
  load_desa();
});