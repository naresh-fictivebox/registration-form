<table class="table">
<a href="{{ url('student-form')}}"> Click to Add Data</a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">First-Name</th>
        <th scope="col">Last-Name</th>
        <th scope="col">email</th>
        <th scope="col">Password</th>
        <th scope="col">Confirm_Password</th>
        <th scope="col">Gender</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

        
      </tr>
    </thead>
    <tbody>
      @php $i = 1; @endphp
      @foreach ($studentListing as $list)
      <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{ $list->first_name }}</td>
      <td>{{ $list->last_name }}</td>
      <td>{{ $list->email }}</td>  
      <td>{{ $list->password }}</td>
      <td>{{ $list->confirm_password }}</td>

      <td>{{ $list->gender }}</td>
      <td>
    <a class="dropdown-item" href="{{ url('studentlist-edit/' . $list->id) }}">
      Edit
    </a>
    <a class="dropdown-item" href="{{ url('studentlist-delete/' . $list->id) }}">
      Delete
    </a>
</td>

    </tr>      
     @endforeach    
    </tbody>
  </table>
  