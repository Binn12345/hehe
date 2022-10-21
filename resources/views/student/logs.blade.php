@extends('layouts.app')

<title>
    BCP - logs
</title>
@section('content')
    <div class="content-wrapper">


      <section class="content">
        <div class="box" style="margin-top: 10px;">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="margin-left:20px;">
                <div class="table-responsive-lg">
                    <table class="table" id="audit_unique">
                        <tr>
                            <th>Actor</th>
                            <th>State</th>
                            <th>Role</th>
                            <th>Last Access</th>
                        </tr>
                        @foreach($students as $student)
                            <tbody>
                                <tr>
                                    <td>{{$student->actor}}</td>
                                    <td>{{$student->state}}</td>
                                    <td>{{$student->role}}</td>
                                    <td>{{$student->created_at}}</td>
                                </tr>
                            </tbody>
                        @endforeach 
                    </table>
        </div>
            </div>  
        </div>
    </section>
</div>   
    </div>
    
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready( function () {
        $('#audit_unique').DataTable();
    } );
</script>