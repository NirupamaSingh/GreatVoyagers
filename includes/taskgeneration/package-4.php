<div class="col-12">
<div class="card">
<div class="card-body">
  <form class="form-sample">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Leaving From</label>
          <div class="col-sm-9">
            <select class="form-control" required>
              <option>Lucknow</option>
              <option>Delhi</option>
              <option>Gorakhpur</option>
              <option>Mumbai</option>
              <option>Nainital</option>
              <option>Vanaras</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Going To</label>
          <div class="col-sm-9">
             <select class="form-control" required>
              <option>India</option>
              <option>America</option>
              <option>paris</option>
              <option>Bangkok</option>
              <option>Singapur</option>
              <option>Indonesia</option>
              <option>London</option>
              <option>UK</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Tour's Type</label>
          <div class="col-sm-4">
            <div class="form-check form-check-info">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="Tourtype" id="membershipRadios1" value="Domestic" required> Domestic </label>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-check form-check-info">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="Tourtype" id="membershipRadios1" value="International" > International</label>
            </div>
          </div>
         
        </div>
      </div>
        <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Journey's Type</label>
          <div class="col-sm-4">
            <div class="form-check form-check-info">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="journey" id="membershipRadios1" value="One Way" required> One way </label>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-check form-check-info">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="journey" id="membershipRadios1" value="Two Way" > Two Way</label>
            </div>
          </div>
         
        </div>
      </div>
         </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Departure</label>
          <div class="col-sm-9">
            <input type="date" name="bday" placeholder="DD/MM/YYYY" max="3000-12-31" 
              min="1000-01-01" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Return</label>
          <div class="col-sm-9">
           <input type="date" name="bday" placeholder="DD/MM/YYYY" max="3000-12-31" 
              min="1000-01-01" class="form-control" required> 
          </div>
        </div>
      </div>
    </div>
    <div class="row">
       <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Preferable Airline</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Enter Preferable Airline" class="form-control" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Remarks (if any)</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Description" class="form-control" required/>
          </div>
        </div>
      </div>
    </div>
    <center>
      <button type="submit" class="btn btn-gradient-success btn-lg mr-2">Submit</button>
      <button type="reset" class="btn btn-gradient-dark btn-lg mr-2" >Reset</button>
    </center>
  </form>  
</div>
</div>
</div>  
