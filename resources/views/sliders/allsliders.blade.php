@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">


                            <h2><span class="label label-primary">Sliders management</span></h2>
                            
                            
                            <div class="subtitle">here you can create, read and edit Sliders</div>
                        
                          <a href="{{url('sliders/create')}}" class="btn btn-success">Create slider</a>
                          
                        </div>

                    </div>
                </div>
                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css ">
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Description</th>
                            
                            <th>Photo</th>
                            <th>Actions</th>
                            


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Description</th>
                            
                            <th>Photo</th>
                            <th>Actions</th>
                            

                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($sliders as $slider)
         <tr>
             <td>{{ $slider->description }}</td>
    
  
             <td><img src="{{asset($slider->image)}}" height="35" width="30"></td>
             <td><a href="{{url('sliders',$slider->id)}}" class="btn btn-primary"> <span class="glyphicon-folder-open"></span> </a></td>
             
             <td>
             {!! Form::open(['method' => 'DELETE','onsubmit' => 'return confirm("Etes-vous sur de pouvoir supprimer ce slider ?")', 'route'=>['sliders.destroy', $slider->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<div class="pagination">
       {!! $sliders->links(); !!}

 </div>

                </div>
            </section>




<script src="//code.jquery.com/jquery.min.js"> </script>
<script src="{{ asset('js/larails.js') }}" > </script>
@stop