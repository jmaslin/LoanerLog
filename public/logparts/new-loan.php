<div class="row">
  <h3>New Loan <span><button id="toggle-adv" class="btn btn-info btn-sm">More Options</button></h3>
	<hr>
</div>

<div class="row">
  <div id="loan-form-container" class="col-sm-8">
    <form id="new-loan-form" class="form-inline">
      <div class="col-sm-6">
        <label for="user-name">Name</label>
        <input id="user-name" class="form-control input-lg" type="text" placeholder="Scan ID or enter name." autocomplete="off">
      </div>
      <div class="col-sm-6">
        <label for="device-name">Add Devices</label>
        <input id="device-name" class="form-control input-lg" type="text" placeholder="Scan or enter device ID." autocomplete="off">
      </div>
      <div class="col-sm-6 toggle-option">
        <label for="loan-for-user">Reserving For</label>
        <input id="loan-for-user" class="form-control input-lg" type="text" placeholder="Enter name." autocomplete="off">
      </div> 
      <div class="col-sm-6 toggle-option">
        <label for="longterm-loan">Loan Due Date</label>
        <input id="date-due-back" class="form-control input-lg pickadate" type="text" placeholder="Choose a date." autocomplete="off">
      </div>     
    </form>
  </div>
  <div class="col-sm-4">
    <label for="device-choose">Add Generic Device</label>
    <div id="add-asset-list">
    <!-- Load from javascript -->
    </div>  
  </div>
</div>

<div class"row">
  <hr>
</div>

<div class="row">
	<h3>Loan Preview</h3>
	<hr>
</div>

<div class="row">
  	<div id="new-loan-items" class="loan-item-container">
  	<!-- <p id="loan-no-items"><em>No items yet.</em></p> -->
    	<div id="example-loan-item" class="col-sm-4 loan-item">

          <div class="loan-item-overlay">
            <div class="align-frame">
           		<input type="image" src="/assets/img/settings.png" class="img img-responsive loan-item-settings">
          		<input type="image" src="/assets/img/remove.png" class="img img-responsive loan-item-remove">
            </div>
          </div>
    	      <div class="col-sm-3">
    	      	<img class="img img-responsive" src="/assets/img/laptop.png">
    	      </div>
    	      <div class="col-sm-8 loan-item-text">
    	      	<div class="loan-item-type text-primary lead">Dell Laptop</div>
              <code class="loan-item-id text-primary">1YK</code>
    	      </div>
          </div>
  	</div>
</div>