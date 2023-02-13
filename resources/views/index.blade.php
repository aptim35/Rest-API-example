<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('build.css')}}">   
    <title>Data List</title>
    </head>
    <body>
     <div class="table-responsive">
        <div class="container">
         <center> <h1>Data List </h1></center> 
         <div align="right">
                <br>    
					<button type="button" id="add_button" data-toggle="modal" data-target="#imgModal" class="btn btn-info
           btn-sm">Open Modal</button>  
				</div> <br>
          <table class="table table-bordered table-hover table-striped"   id="mydata">
            <thead >
              <tr>
                <th>No</th>
                <th>Task</th>
                <th>Title</th>
                <th>Description</th>
                <th>ColorCode</th>
              </tr>
            </thead>
            <tbody id="show_data">
            </tbody>
          </table>
      </div>
    </div>
 <!-- Modal -->
 <div class="modal fade" id="imgModal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Image Prewiev</h4>
        </button>
      </div> 
      <div class="modal-body">
        <div class="container">
        <div class="row">
          <div class="col-md-8">
          <img id="image" src=""  width="500">
          </div>
           <div class="col-md-2">
        </div>
          </div>
          <input type="file" id="input" name="image">
        </div> 
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> 
    </div> 
  </div> 
</div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script> 
    <script src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>