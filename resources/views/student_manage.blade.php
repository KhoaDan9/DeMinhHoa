@extends('app')
<div class="container pt-5">
    <a class="btn btn-primary" href="create" role="button">Add student</a>
    <table class="table">
        
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">FullName</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>


          </tr>
        </thead>
        <tbody>
            
            @foreach ($students as $item)
            <tr>
                <th>{{ $item->id }}</th>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->birthday }}</td>
                <td>{{ $item->address }}</td>
                <td><a href="edit/{{ $item->id }}"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="delete/{{ $item->id }}"><i class="bi bi-trash3"></i></a></td>

              </tr>
            @endforeach
          

      </table>
</div>