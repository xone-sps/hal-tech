@extends('admin.common.main')
@section('content')
    <div class="column main">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
  <thead>
    <tr>
      
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <thead>
          @foreach($retrieve as $re)
          <tr>
              <th>{{ $re->id }}</th>
              <td>{{ $re->title }}</td>
              <td>{{ $re->description }}</td>
              <td>
                  <a href="{{ route('getUpdate', $re->id) }}" class="button is-success">Edit</a>
                  <form action="{{ route('delete', $re->id) }}" method="POST">
                    {{ csrf_field() }}
                      <button onclick="return confirmDelete()" class="button is-danger">Delete</button>
                    <input type="hidden" name="_method" value="delete" />
                  </form>
                 
                  
            
            </td>

          </tr>

          @endforeach
      </thead>
  </tbody>
        </table>
    </div>
<script>
	function confirmDelete(){
		var result = confirm('ຈະລຶບແທ້ໆນິ? ຄິດດີໆກ່ອນໄດ. ລຶບແລ້ວລຶບເລີຍໄດ.');
	if(result){
		return true;
	}else{
		return false;
	}
	}
	
</script>
@endsection