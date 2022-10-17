@extends('app')
<div class="container pt-5">
  <h1>Edit</h1>
    <form action="student" method="POST">
        @csrf
        <div class="mb-3">
            <div class="col-4">
          <label class="form-label">ID</label>
          <input class="form-control" type="text" value={{ $student[0]->id }} readonly name="id" >
            </div>
        </div>
        <div class="mb-3">
            <div class="col-4">
          <label class="form-label">Full name</label>
          <input class="form-control" type="text" value={{ $student[0]->fullname }} name="fullname" >
            </div>
        </div>
        <div class="mb-3">
            <div class="col-4">
            <label class="form-label">Birthday</label>
            <input class="form-control" type="date" value={{ $student[0]->birthday }} name="birthday" >
              </div>
          </div>
          <div class="mb-3">
            <div class="col-4">
            <label class="form-label">Address</label>
            <input class="form-control" type="text" value={{ $student[0]->address }} name="address" >
              </div>
          </div>
          
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>