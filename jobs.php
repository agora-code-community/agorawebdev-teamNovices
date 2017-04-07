<!-- job page custom css -->
<link rel="stylesheet" href="css/jobportal.css">

<!-- some fancy banner to beautify the page -->
<div class="banner">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h2 style="text-align: center">Find a job</h2>
          </div>
      </div>
  </div><!-- /.container -->
</div><!-- /.banner -->

<!-- trying something new -->
<div class="container">
    <div class="search-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" id="side-search">

            <form role="form" action="" method="post">
                <div class="form-group col-md-3">
                    <input type="text" id="kword" class="form-control rounded" name="keyword" placeholder="Keyword">
                </div>

                <div class="form-group col-md-3">
                    <input type="text" class="form-control rounded" name="location" placeholder="Location">
                </div>

                <div class="form-group col-md-3">
                    <input type="text" class="form-control rounded" name="category" placeholder="Category">
                </div>
                <!-- submit button -->
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-md btn-success">Filter</button>
                </div>
                <!-- inline checkboxes -->
                <div class="form-group col-md-8 col-md-offset-1" style="font-size: 16px">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="fulltime" value="fulltime"> Full-time
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="parttime" value="parttime"> Part-time
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="internship" value="internship"> Internship
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="freelance" value="freelance"> Freelance
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="contract" value="contract"> Contract
                    </label>
                </div>
            </form>
            </div>
        </div><!-- end search row -->
          <hr>
      <div class="row">
        <div class="col-md-12">
          <!-- table to display newest entries -->
          <table class="table table-striped">
              <thead>
              <tr>
                  <th>Company</th>
                  <th>Job title</th>
                  <th>City</th>
                  <th>Employment</th>
                  <th>Posted</th>
                  <th></th>
              </tr>
              </thead>
              <tbody>

              <tr>
                  <td>Africonnect Zambia LTD</td>
                  <td>Software Developer</td>
                  <td>Lusaka</td>
                  <td>Full-time</td>
                  <td>2 days ago</td>
                  <td><a class="btn btn-dark btn-rounded" href="?page=job-posting">View Details</i></a></td>
              </tr>
              </tbody>
          </table>

          <div class="col-md-offset-5">
            <button type="button" class="btn btn-lg btn-success"> View More</button>
            <a href="?page=jobAd" class="btn btn-primary"> Add Job ad</a>
          </div>
        </div>
      </div>

    </div>

</div><!-- /.container -->

