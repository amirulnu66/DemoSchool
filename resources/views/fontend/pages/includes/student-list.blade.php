
<div class="sidebar-box std-list-div">
    <h4 class="text-center text-bold bg-blue-gradient">Student List</h4>
    <br/>
    @if(!empty($studentList) AND count($studentList)>0)
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
            <tr>
                {{--<th class="text-center">#</th>--}}
                <th class="text-center">Photo</th>
                <th class="text-center">Roll No.</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
            </tr>
            </thead>
            <tbody>
            {{--student list looping--}}
            @foreach($studentList as $student)
                <tr>
                    {{--<td>{{($index)}}</td>--}}
                    <td>
                        <img class="center-block img-circle img-thumbnail img-responsive" src="{{$student->photo}}" alt="No Image" style="width:40px;height:40px">
                    </td>
                    <td>{{$student->gr_no}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in text-center" style="opacity: 423.642;">
            <h4><i class="fa fa-warning"></i> No result found. </h4>
        </div>
    @endif
</div>
<script>
    $(function () {
        $("#example2").DataTable();
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false
        });
    });
</script>
