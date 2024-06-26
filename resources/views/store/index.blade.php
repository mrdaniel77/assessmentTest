
@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <h1 class="m-0">Store</h1>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item "><a href="/" class="harpia-text-color">Dashboard</a></li>
                  <li class="breadcrumb-item active">Store</li>
               </ol>
            </div>
         </div>
      </div>
   </div>

   {{-- LISTAGEM --}}
   <div class="content corpo">
      <div class="container-fluid">
         <div class="card">
            <div class="card-header">
               <div class="row align-items-center">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="row">                        
                        <a href="/store/create" class="m-1 btn btn-success">
                            New Store
                            <i class="fas fa-plus"></i>
                        </a>                                                
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 card-tools">
                     <form>
                        <div class="input-group input-group w-100 float-right">
                           <input type="text" name="search" class="form-control" placeholder="search" >
                           <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                 <i class="fas fa-search"></i>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="card-body table-responsive p-0">
               <table class="table table-hover text-nowrap table-bordered ">
                  <thead>
                     <tr>
                        <th class="col-3">Name</th>
                        <th class="col-3">Address</th>
                        <th class="col-1">Actions</th>
                     </tr>
                  </thead>
                  <tbody> 
                     @foreach ($store as $item)                      
                        <tr>
                           <td class="col-3"> {{$item->name}} </td>
                           <td class="col-3"> {{$item->address}} </td>
                           <td class="col-1">
                              <a href="/store/edit/{{$item->id}}" class="btn btn-xs mx-1 pt-1 btn-outline-warning" title="Edit">                              
                                 <i class="fas fa-pen"></i>
                              </a>
                              <a href="/store/delete/{{$item->id}}" class="btn btn-xs mx-1 pt-1 btn-outline-danger" title="Delete">                              
                                 <i class="fas fa-trash"></i>
                              </a>                                                
                           </td>
                        </tr>                                               
                     @endforeach
                  </tbody>
               </table>
               @if(count($store) < 1)
                <div class="alert alert-info m-3 text-center">
                    No records found!
                </div>
                @endif    
            </div>
         </div>        
      </div>
   </div>
</div>
@include('layout.footer')

