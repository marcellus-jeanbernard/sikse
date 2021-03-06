@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Decouvertes management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit decouverte</div>
                        
                          <a href="{{url('decouvertes/create')}}" class="btn btn-success">Create Decouverte</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Nom</th>
                            <th>Description</th>
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($decouvertes as $decouverte)
         <tr>
             <td>{{ $decouverte->nom }}</td>
             <td>{{ $decouverte->description }}</td>
             
  
           
             <td><a href="{{url('decouvertes',$decouverte->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('decouvertes.edit',$decouverte->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['decouvertes.destroy', $decouverte->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $decouvertes->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop