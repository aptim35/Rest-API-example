// Call the dataTables jQuery plugin
$(document).ready(function() {
  
  show_product(); 
  function show_product(){
    $.ajax({
      type  : 'GET',
      url   : 'http://127.0.0.1:8000/api/getapi',
      dataType : 'json',
      async : false,
      success : function(data){
        var html = '';
        var data=data;
        var i;
        var color;
        console.log(data);
        for(i=0; i<data.length; i++){
          color=data[i].colorCode;
          html += '<tr style="color:'+color+'">'+
          '<td>'+(i+1)+'</td>'+
          '<td >'+data[i].task+'</td>'+
          '<td>'+data[i].title+'</td>'+
          '<td>'+data[i].description+'</td>'+
          '<td>'+data[i].colorCode+'</td>'+
          '</tr>';
        }
        $('#show_data').html(html);
      },
    });
  }


      

        $("#input").on("change", function(e) {
          var _URL = window.URL || window.webkitURL,
              file = this.files[0],                   
              image = new Image();
          $('#image').attr('src',  _URL.createObjectURL(file));
          $(image).ready(function($) {
            $('#modal').modal('show');
          });
          window.URL.revokeObjectURL(image.src);
        });    

        
  
        const minutes = 60 * 60 * 1000;  
        setInterval(function(){
          show_product();},minutes);
  
  	$('#mydata').dataTable({
                "bLengthChange": true,
                "bInfo": true,
                "bPaginate": true,
                "bStateSave": true,
                "rowHeight":true,
                "bFilter": true,
                "bSort": true,
                "bAutoWidth": true,   
      "language": {
		 "sShow":   "Show",
		 "sSearch": "Search:",
         "paginate": {
         "first":      "First",
         "last":       "Last",
         "next":       "Next",
         "previous":   "Previous",
		 
     }
                }
            }

    );
});
