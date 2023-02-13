// Call the dataTables jQuery plugin
$(document).ready(function() {
  
  
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
		 "sShow":   "Göster",
		 "sSearch": "Arama:",
         "paginate": {
         "first":      "İlk",
         "last":       "Son",
         "next":       "Sonraki",
         "previous":   "Önceki",
		 
     }
                }
            }

    );
});
