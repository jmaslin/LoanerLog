<!-- <div class="row">
  <div class="col-sm-12">
    <h3>New Loan <span><button id="toggle-adv" class="btn btn-info btn-sm">More Options</button></span></h3>
  	<hr>
  </div>
</div> -->

<div class="row">
  <!-- LEFT SIDE START -->
  <div class="col-sm-7">
    <div id="loan-form-container" class="row">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">New Loan</h3>
        </div>
        <div class="panel-body">
          <form id="new-loan-form" class="form">
            <div class="form-group col-sm-8">
              <!-- <label for="user-name">Name</label> -->
              <div class="input-group">
                <div class="input-group-addon">Name</div>
                <input id="user-name" class="form-control" type="text" placeholder="Scan ID or enter name." autocomplete="off">
              </div>
            </div>
            <div class="form-group col-sm-12">
              <div data-toggle="buttons-radio">
                <span for="for-user-radio">The loan is for</span>
                  <!-- <input type="radio" name="forUserRadio" id="forUser2" value="false" autocomplete="off"> -->
                <button type="button" name="forUserRadio" id="forUser1" value="true" class="btn btn-sm btn-info active">this user</button>   
                  <span for="for-user-radio"> or </span>                            
                <button type="button" name="forUserRadio" id="forUser2" value="false" class="btn btn-sm btn-info">another user</button>   
              </div>  
            </div> 
            <div id="reserve-for" class="form-group col-sm-8 toggle-option"> 
              <!-- <label for="loan-for-user">Loan For</label> -->
              <div class="input-group">
                <div class="input-group-addon">For</div>
                <input id="loan-for-user" class="form-control" type="text" placeholder="Enter a new name." autocomplete="off">
              </div>
            </div>                     
            <div class="form-group col-sm-8">
              <label for="device-name">Add Devices</label>
              <input id="device-name" class="form-control" type="text" placeholder="Scan or enter device ID." autocomplete="off">
            </div>
            <div class="form-group col-sm-9">
              <label for="device-choose">Add Generic Device</label>
              <div id="add-asset-list">
              <!-- Load from javascript -->
              </div>    
            </div>
            <div class="col-sm-1">
              <img id="ajax-loader" src="/assets/img/ajax-loader.gif"> 
            </div>
            <div class="form-group col-sm-8">
              <!-- <label for="loan-due-date">Return By</label> -->
              <div class="input-group">
                <div class="input-group-addon">Due</div>
                <input id="date-due-back" class="form-control pickadate" type="text" placeholder="Today" autocomplete="off">
              </div>
            </div>             
          </form>

        </div>
        <div class="panel-footer text-right">
          <button id="clear-form" type="button" class="btn btn-lg btn-warning">Clear</button>          
          <button id="create-loan" type="submit" class="btn btn-lg btn-success">Create Loan</button>
        </div>
      </div>
    </div>
 
  </div>
  <!-- LEFT SIDE END -->

  <div class="col-sm-4 col-sm-offset-1">   <!-- RIGHT SIDE START -->
    <div class="row">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">User Info</h3>
        </div>
        <div id="user-info-panel" class="panel-body">
            <p class="text-muted lead text-center">No user selected.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Loan Preview</h3>
        </div>      
        <!-- <div id="new-loan-preview" class=" panel-body"> -->
          <!-- <p id="loan-no-items" class="well lead text-center"><em>No items yet.</em></p> -->
        <!-- </div> -->
        <ul class="list-group loan-item-container">

          <li id="loan-empty" class="list-group-item">
            <p class="text-muted lead text-center">No loan items.</p>
          </li>
<!-- 
          <li class="list-group-item">
            <div id="example-loan-item" class="loan-item row">
              <div class="loan-item-overlay">
                <div class="align-frame">
                  <input type="image" src="/assets/img/settings.png" class="img-responsive loan-item-settings">
                  <input type="image" src="/assets/img/remove.png" class="img-responsive loan-item-remove">
                </div>
              </div>
              <div class="col-md-3 col-sm-12">
                <img class="img-responsive" src="/assets/img/laptop.png">
              </div>
              <div class="col-md-9 col-sm-12 loan-item-text">
                <div class="loan-item-type text-primary lead">Dell Laptop</div>
                <p class="loan-item-id text-info">1YK</p>
              </div>
            </div>
          </li>
 -->
        </ul>
        </div>
      </div>
    </div>
  </div>  <!-- RIGHT SIDE END -->
 
</div>

<script type="text/javascript">

  var loanAssets = [];

  $( document ).ready(function() {

    //$('#loan-empty').hide();

    var today = moment();

    var dayOfWeek = moment(today).day();
    console.log(dayOfWeek); 

    $('#date-due-back').attr('data-value', moment(today).format('YYYY/MM/DD'));

    $('.pickadate').pickadate({
      formatSubmit: 'yyyy/mm/dd',
      min: moment(today).format('YYYY/MM/DD'),
      disable: [
        1, 7
      ],
      clear: '',
      container: '#add-asset-list'
    });



  });

  $('button[name="forUserRadio"]').on('click', function() {

    var isForUser = $(this).val(); // Is the loan for this user or someone else?

    if ($(this).attr('id') == 'forUser1') {
      $('#forUser2').removeClass('active');
      $('#reserve-for').slideUp('fast');
    }
    else if ($(this).attr('id') == 'forUser2') {
      $('#forUser1').removeClass('active');
      $('#reserve-for').slideDown('fast');
    }

    // TODO: Fix clicking same button -> removes active (one or other has to be active, treat more like radio button)

  });

  $('input[name="forReturnDate"]').on('change', function() {

    if ($(this).attr('id') == 'forReturn1') {
      $('#due-date').slideUp('fast');
    }
    else if ($(this).attr('id') == 'forReturn2') {
      $('#due-date').slideDown('fast');
    }

  });

  $('#add-asset-list').on('click', 'input[name="add-generic-asset"]', function(e) {
    var assetType = $(this).attr('id');

    getAssetInfo(assetType); // Gets asset type and adds to list. TOOD: Move that function into this file for easier to read JS.

    loanAssets.push(assetType);
    loanHasItems();

    e.preventDefault();
  });

  $('.loan-item-container').on('click', '.loan-item-remove', function() {

    var loanItem = $(this).parent().parent().parent().parent();

    console.log($(this).parent().parent().parent().attr('id')); // TODO: Remove from form list of assets 
  //  $(loanItem).fadeOut('fast', loanHasItems);

    var index = loanAssets.indexOf($(loanItem).attr('id'));
    loanAssets.splice(index, 1);

    $(loanItem).slideUp('fast', loanHasItems);

    // TODO: Gray out (and mark removed) if existing loan or > certain time since loan
    // Show undo for a few seconds after?
  });

  // TODO: Make this work even if elements are in list but just hidden
  function loanHasItems() {

    var length = loanAssets.length;

    if (length == 0) {
      $('#loan-empty').delay(100).slideDown('fast');
    }
    else {
      $('#loan-empty').slideUp(200);
    }
  }

  // Show calendar for long-term loan (no weekends, minimum 1 day).
  $('.pickadate').on('click', function() {
    $(this).pickadate({
      min: 1,
      disable: [
        1, 7
      ]
    });
  });


</script>