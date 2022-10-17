@extends('app')
<div class="container pt-5" >
  <h1>Add</h1>
    <form action="create/store" method="POST">
        @csrf
        <div class="mb-3">
            <div class="col-4">
          <label class="form-label">Full name</label>
          <input class="form-control" type="text" name="fullname" >
            </div>
        </div>
        <div class="mb-3">
            <div class="col-4">
            <label class="form-label">Birthday</label>
            <input class="form-control" type="date"  name="birthday" >
              </div>
          </div>
          <div class="mb-3">
            <div class="col-4">
            <label class="form-label">Address</label>
            <input class="form-control" type="text" name="address" >
              </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>