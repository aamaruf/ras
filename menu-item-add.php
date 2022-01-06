
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Menu Item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="menu-item-add-operation.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Item name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Item Price</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Item Details</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Details" name="details" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Item Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="thumb" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Add Item</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          </div>