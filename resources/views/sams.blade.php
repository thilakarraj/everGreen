@extends('layouts.app')
@section('content')
<div class="content-header row">
    <div class="breadcrumbs-right breadcrumbs-top">
        <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                <li class="breadcrumb-item"><a href="#">Package Management </a></li>
                <li class="breadcrumb-item active">Search Package</li>
            </ol>
        </div>
    </div>
</div>

<div class="content-body">
<div class="row">
    <div class="col-xs-12">
        <p class="pull-left text-bold-600">Package List for Customer</p>
          <ul class="pull-right settings">
               
              <li class="dropdown dropdown-user nav-item">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-user-link">
                  <i class="icon-settings"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item"> Add Package </a>                   
                </div>
              </li>
          </ul>
         
        <hr>
        <div class="row">
          <div class="col-xs-12">
        <div class="pull-left">
          <div class="form-group">
                      <label class="font-small-1">Showing 1 to 8 of 8 entries</label>
                      <select class="form-control showentries">                         
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="All">All</option>
                      </select>
                    </div>
                    
        </div>
        <div class="pull-right">
          <div class="form-group">            
            <input type="text" class="form-control" placeholder="Search" name="Search">
          </div>
        </div> 
        </div> 
      </div>
        <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                              <th> Package Name  </th>
                              <th> Package Description </th>
                              <th> Length  </th>
                              <th> Width  </th>
                              <th> Height </th>
                              <th> Weight (INT) </th>   
                              <th> Actions </th>                                 
                            </tr>
                        </thead>
                      
                        <tbody>

                            <tr class="showcase-link">                              
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>
                            </tr>

                            <tr>
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>                                
                            </tr>

                            <tr>
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>                                
                            </tr>

                            <tr>
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>                                
                            </tr>

                            <tr>
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>                                
                            </tr>

                            <tr>
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>                                
                            </tr>

                            <tr>
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>                                
                            </tr>

                            <tr>
                                <td> Over Length Skid </td>
                                <td> Over Length Skid </td>
                                <td> 100.00  </td>
                                <td> 48.00 </td>
                                <td> 48.00 </td>
                                <td> 1500.00 </td>
                                <td> 
                                  <button type="button" class="btn btn-info btn-xs">Edit</button>
                                  <button type="button" class="btn btn-danger btn-xs">Delete</button> 
                                </td>                                
                            </tr>
                        </tbody>

                    </table>
                </div>
              <div class="pull-right">
                <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link soluship_txt" href="#" aria-label="Previous">
                          <span aria-hidden="true">«</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link soluship_txt" href="#">1</a></li>
                      <li class="page-item"><a class="page-link soluship_txt" href="#">2</a></li>
                      <li class="page-item active"><a class="page-link soluship_bg" href="#">3</a></li>
                      <li class="page-item"><a class="page-link soluship_txt" href="#">4</a></li>
                      <li class="page-item"><a class="page-link soluship_txt" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link soluship_txt" href="#" aria-label="Next">
                          <span aria-hidden="true">»</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </div>
    </div>
</div>
</div>
@endsection
