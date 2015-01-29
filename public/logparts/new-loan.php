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
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">New Loan</h3>
        </div>
        <div class="panel-body">
          <form id="new-loan-form" class="form">
            <div class="form-group col-sm-12">
              <!-- <label for="user-name">Name</label> -->
              <div class="input-group">
                <div class="input-group-addon">User</div>
                <input id="user-name" name="user-name" class="form-control" type="text" placeholder="Have user scan ID or enter their name." autocomplete="off">
              </div>
            </div>
            <div class=" col-sm-12">
                <ul id="loan-for" class="list-inline lead">
                  <li><span class="label label-default" for="for-user-type">Loan For</span></li>
                  <li><a id="this-user-true" class="link-option lead link-option-active" href="#">this user</a></li>
                  <li><a id="this-user-false" class="link-option" href="#">someone else</a></li>
                  <li><a id="this-user-class" class="link-option" href="#">room</a></li>
                </ul>
                  <!-- <input type="radio" name="forUserRadio" id="forUser2" value="false" autocomplete="off"> -->
                <!-- <button type="button" name="forUserRadio" id="forUser1" value="true" class="btn btn-sm btn-info active">this user</button> -->
                <!-- <span>.</span>                        -->
                <!-- <button type="button" name="forUserRadio" id="forUser2" value="false" class="btn btn-sm btn-info">another user</button> -->
            </div> 
            <div id="reserve-for" class="form-group col-sm-12 toggle-option"> 
              <!-- <label for="loan-for-user">Loan For</label> -->
              <div class="input-group">
                <div class="input-group-addon">Loan User</div>
                <input id="loan-for-user" name="loan-for-user" class="form-control" type="text" placeholder="Who is the loan going to be for." autocomplete="off">
              </div>
            </div>
            <div class="form-group col-sm-12">
              <label for="device-name">Search or scan by serial or select an icon.</label>
              <div class="input-group">
                <input id="device-name" class="form-control" type="text" placeholder="Scan or enter part of device ID." autocomplete="off">
                <span class="input-group-btn"><button class="btn btn-success">Add</button></span>
              </div>
            </div>
            <div class="form-group col-sm-12">
              <!-- <label for="device-choose">Add Generic Device</label> -->
              <div id="add-asset-list" class="row">
              <!-- Load from javascript -->
              </div>
              <div class="col-sm-2">
                <img id="ajax-loader" src="/assets/img/ajax-loader.gif"> 
              </div>    
            </div>

            <div class="form-group col-sm-12">
              <!-- <label for="loan-due-date">Return By</label> -->
              <div class="input-group">
                <div class="input-group-addon">Due</div>
                <input id="date-due-back" name="date-due" class="form-control pickadate" type="text" placeholder="Today" autocomplete="off">
              </div>
            </div>             
          </form>

        </div>
        <div class="panel-footer text-right">
          <button id="clear-form" type="button" class="btn btn-warning">Clear</button>          
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
            <p id="no-user" class="text-muted lead text-center">No user selected.</p>
            <div id="user-info">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <h3 id="user-info-name" class="text-primary">Justin Maslin</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <h4>
                    <span id="user-info-type" class="label label-success">Student</span>
                    <small id="user-info-id">jtm342@drexel.edu</small>
                  </h4>
                </div>
              </div>
              <div class="row">
                <hr>
              </div>

              <div class="row">
                <!-- TODO: Display relevant user info 
                (outstanding loans, previous loans (if repeat), user alerts (ie do not loan list), most frequent loan items, etc) -->
              </div>

            </div>
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
    $('#no-user').hide(); // Temp

    var today = moment();

    var dayOfWeek = moment(today).day();
    console.log(dayOfWeek); 

    $('#date-due-back').attr('data-value', moment(today).format('YYYY/MM/DD'));

    $('.pickadate').pickadate({
      formatSubmit: 'yyyy-mm-dd',
      min: moment(today).format('YYYY/MM/DD'),
      disable: [
        1, 7
      ],
      clear: '',
      hiddenName: true,
      container: '#add-asset-list'
    });

  });

  $('#create-loan').click(function() {
    $('#new-loan-form').submit();
  });

  $('#new-loan-form').on('submit', function(e) {
    e.preventDefault();

    var loanedBy = 'Justin Maslin'; // TODO: Would grab ID or something from page once integrated.

    // TODO: Should probably be submitting user ID or number ID instead of name (once have info).

    var newLoan = {
      loanedTo: $('#user-name').val(),
      loanedFor: $('#loan-for-user').val(),
      loanAssets: loanAssets,
      loanedBy: loanedBy,
      loanedTime: moment().format('X')
    }

    console.log(JSON.stringify(newLoan, null, 2));

    // TODO: Submit the newLoan obj to php page for processing


    console.log("Submitted!");
  });


  $('ul#loan-for li').on('click', 'a', function(event) {
    
    if (!$(this).hasClass('link-option-active')) {
      $('ul#loan-for li a.link-option-active').toggleClass('link-option-active');
      $(this).toggleClass('link-option-active');

      if ($(this).attr('id') == 'this-user-false') {
        $('#reserve-for').slideDown('fast');    
      }
      else {
        $('#reserve-for').slideUp('fast');
      }
    }

  });


  $('button[name="forUserRadio"]').on('click', function() {

    var isForUser = $(this).val(); // Is the loan for this user or someone else?

    if ($(this).attr('id') == 'forUser1') {
      $('#forUser2').removeClass('active');
      $('#reserve-for').slideUp('fast');
      $('#loan-for-user').val('');
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

    if (!$(this).hasClass('asset-empty')) {
      getAssetInfo(assetType); // Gets asset type and adds to list. TOOD: Move that function into this file for easier to read JS.

      loanAssets.push(assetType);
      loanHasItems();
      updateInventory(assetType);
    }

    e.preventDefault();
  });

  $('.loan-item-container').on('click', '.loan-item-remove', function() {

    var loanItem = $(this).parent().parent().parent().parent();

    var assetIdent = $(this).parent().parent().parent().attr('id');

    //console.log($(this).parent().parent().parent().attr('id')); // TODO: Remove from form list of assets 
  //  $(loanItem).fadeOut('fast', loanHasItems);

    var index = loanAssets.indexOf($(loanItem).attr('id'));
    loanAssets.splice(index, 1);

    $(loanItem).slideUp('fast', loanHasItems);

    updateInventory(assetIdent, true);

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

  function getUser() {
    /*
     * TODO: Get user info based on what is typed (or scanned) into name field.
     */
  }

  function getDevice() {
    /*
     * TODO: Submit lookup of part of device ID to database table of devices. 
     * If find, return object with device data (name, full ID, status)
     * If row var isLoaned = true, show pop-up asking if user wants to mark as returned from other loan
     * If row var !isLoaned, allow device to be added to loanAssets array, store the device ID (only thing needed)
     * Make sure device is not reserved, or loaning device out would not take inventory below reserve amount. 
     * Use returned device info to display device in loan preview section. 
     * If any problems, display message and what to do 
     */
  }

  function updateInventory(assetType, isAdded) {

    var asset = assetType;
    var value = 1;

    if (!isAdded) {
      value = -1;
    }

    $('#loan-inventory-categories .inventory-item[type="'+asset+'"] > span').fadeTo('fast', 0, function() {

      var currentInv = parseInt($(this).html()) + value;
      $(this).html(currentInv);

      if (currentInv > 0) {
        $(this).removeClass('alert-danger');
        $('#add-asset-list').find('#'+asset).css('border', '1px solid #ccc').removeClass('asset-empty');
      }
      else { // Not accounting for reservations
        $(this).addClass('alert-danger');
        $('#add-asset-list').find('#'+asset).css('border', '1px solid red').addClass('asset-empty');
      }

      $(this).fadeTo('fast', 1);
    });
  }


</script>