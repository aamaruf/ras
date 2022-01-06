
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Staff</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="staff-add-operation.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Staff Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Staff name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mobile" name="mobile" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Staff Type</label>
                    <select class="form-control" name="type" >
                        <option selected disabled>Select Staff Type</option>
                        <option value="Waiter">Waiter</option>
                        <option value="Kitchen Staff">Kitchen Staff</option>
                        <option value="Others">Others</option>
                    </select> 
                    <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Staff Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="thumb" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Add Staff</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          </div>