@extends('Admin.master')

@section('extra-css')
<style>
	#subjectTable_filter{
		float:right;
	}
</style>
@endsection

@section('content')

    <h1 class="text-center">All Students</h1>

    <section class="card py-5">    <button type="button"  class="btn btn-warning text-dark contact" data-id="2"> add student
        </button>

        <div class="d-flex justify-content-center">
            <div class="col-md-10">
            <table class="table text-nowrap bg-light" id="subjectTable">
                <div class="d-flex justify-content-center">

                <thead>
                    <tr>
                    <th class="border-top-0">#</th>
                    <th class="border-top-0">Student Name</th>
                    <th class="border-top-0">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key=>$row)

                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </div>
            </table>

            </div>
        </div>

    </section>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Add student</h5>
      </div>
        <form action="{{ route('admin.addstudent') }}" method="post">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>



                <div class="form-group">
                    <label for="exampleFormControlTextarea1">password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">تاكيد</button>
            </div>
        </form>

        <div class="modal-footer">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>
  </div>
</div>




@endsection


@section('extra-script')
<script>
	 $('#subjectTable').DataTable();
</script>

<script>
    $(".contact").click(function(){
        $('#exampleModal').modal('show');
    });
</script>
@endsection
