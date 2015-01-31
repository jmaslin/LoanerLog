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
            <div  class="form-group col-sm-12">
              <!-- <label for="user-name">Name</label> -->
              <div class="input-group">
                <div class="input-group-addon">User</div>
                <input id="user-name" name="userName" class="form-control" type="text" placeholder="Have user scan ID or enter their name." autocomplete="off">
              </div>
              <select id="userSelect" class="selectpicker" data-live-search="false">
              </select>  
            </div>
            <div class=" col-sm-12">
                <ul id="loan-for" class="list-inline lead">
                  <li><span class="label label-default" for="for-user-type">Loan For</span></li>
                  <li><a id="this-user-true" class="link-option lead link-option-active" href="#">this user</a></li>
                  <li><a id="this-user-false" class="link-option" href="#">someone</a></li>
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
                <input id="loan-for-user" name="userNameFor" class="form-control" type="text" placeholder="Who is the loan going to be for." autocomplete="off">
              </div>
            </div>
            <div id="asset-choose" class="form-group col-sm-12">
              <label for="device-name">Scan, search by serial, or select an icon.</label>
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
                <input id="date-due-back" name="loanDue" class="form-control pickadate" placeholder="Today" autocomplete="off" data-value="">
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

$('.selectpicker').selectpicker({
  size: 10,
  showSubtext: true
});

// TODO: data-icon for user type

  var startTime; // Today global variable.

  // Global loan var 
  var loan = {
    details: {},
    misc: {},
    assets: [],
    setMisc: function(key, val) {
      this.misc[key] = val;     
    }
  };

  var set = function(key, val) {
    this[key] = val;
  }

  loan.details.set = set;

  var $dateInput = $('.pickadate').pickadate();
  var datePicker = $dateInput.pickadate('picker');

  $( document ).ready(function() {

    datePicker.set({
      min: true,
      disable: [
        1, 7
      ],
      container: '#asset-choose'
    });

    startTime = moment();

    // TODO: Grab logged in user ID
    loan.details.set('creatorId', 'jtm342');
    loan.setMisc('startTime', moment(startTime).format('X')); // Can measure how long average loan takes 

    $('#no-user').hide(); // Temp

    loadUserList();

  });

  $('#new-loan-form input[type=text]').on('change', function(e) {
    var id = $(e.target).attr('name');
    var val = e.target.value;

    loan.details.set(id, val);
    // console.log(loan.details);
  });

  $('#new-loan-form input[name="loanDue"]').on('change', function() {
    var dueMoment = moment($(this).val(), 'DD MMMM, YYYY');
    var unixDate = moment(dueMoment).format('X');
    loan.details.set($(this).attr('name'), unixDate);
  });

  $('#create-loan').click(function() {
    $('#new-loan-form').submit();
  });

  $('#new-loan-form').on('submit', function(e) {
    e.preventDefault();

    // Set the start time for loan
    var submitTime = moment();
    loan.details.set('loanBegin', moment(submitTime).format('X')); // Set submit as time of loan.

    // Make sure submit time time is after start time
    if (moment(submitTime).isBefore(startTime)) {
      console.log("INVALID TIMES.");
    }

    var loanDue = "";
    // Set due date to today if not specified and save into moment object.
    if (loan.details['loanDue'] == null) {
      loanDue = moment(startTime, 'X');
      loan.details.set('loanDue', loanDue);
    }
    else {
      loanDue = moment(loan.details['loanDue'], 'X');
    }
  
    // Set DUE DATE [Set the hour and minute loan is due (Mon-Thurs: 9:30pm, Fri: 5:30pm)]
    var dueDay = moment(loanDue).day();
    if (dueDay > 0 && dueDay < 5) { // Mon - Thurs
      loanDue = moment(loanDue).hour(21);
    }
    else if (dueDay == 5) {
      loanDue = moment(loanDue).hour(17);
    }
    loanDue = moment(loanDue).minute(30).second(0);
    loanDue = moment(loanDue, 'x').format('X');
    loan.details.set('loanDue', loanDue);

    console.log(loan);

    // TODO: Submit the newLoan obj to php page for processing
    // console.log("Submitted!");
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
        delete loan.details.userNameFor;
        $('#loan-for-user').val('');
      }
    }

  });

  $('#add-asset-list').on('click', 'input[name="add-generic-asset"]', function(e) {
    var assetType = $(this).attr('id');

    if (!$(this).hasClass('asset-empty')) {
      getAssetInfo(assetType); // Gets asset type and adds to list. TOOD: Move that function into this file for easier to read JS.

      loan.assets.push(assetType);
      loanHasItems();
      updateInventory(assetType);
    }

    e.preventDefault();
  });

  $('.loan-item-container').on('click', '.loan-item-remove', function() {

    var loanItem = $(this).parent().parent().parent().parent();
    var assetIdent = $(this).parent().parent().parent().attr('id');

    var index = loan.assets.indexOf($(loanItem).attr('id'));
    loan.assets.splice(index, 1);

    $(loanItem).slideUp('fast', loanHasItems);
    updateInventory(assetIdent, true);

    // TODO: Gray out (and mark removed) if existing loan or > certain time since loan
    // Show undo for a few seconds after?
  });

  // TODO: Make this work even if elements are in list but just hidden
  function loanHasItems() {

    var length = loan.assets.length;

    if (length == 0) {
      $('#loan-empty').delay(100).slideDown('fast');
    }
    else {
      $('#loan-empty').slideUp(200);
    }
  }

  var users = [];
  var listLoaded = false;

  function loadUserList() {

    $.ajax({
      dataType: 'json',
      url: "/test/testusers.json",
      success: function(data) {
        saveUserList(data);
      }
    }); 
  }

  function saveUserList(data) {
    
    $.each(data.rs, function(i, user) {
      user = user.toLowerCase();
      var userArray = user.split(/[#, ]/);
      for (var i = userArray.length; i >= 0; i --) {
        if (userArray[i] == "")
          userArray.splice(i, 1);
      }
      users.push(userArray);
    });

    // console.log(users);
    // userList = data;
    listLoaded = true;
    // console.log(userList);
  }

  var add = function(key, val) {
    this[key] = val;
  }

  var resultsLimit = 20;
  var results = [];

  // results.add = set;
  String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
  }

  var queryArray;
  var queryArrayCopy;

  $('#user-name').on({

    keyup: function(event) {

      var query = $(this).val().toLowerCase();

      queryArray = query.trim().split(" ");
      queryArrayCopy = queryArray;

      for (var i = queryArray.length; i >= 0; i --) {
        if (queryArray[i] == "")
          queryArray.splice(i, 1);
      }

      var queryLength = queryArray.length;

      if (event.key == " " || !listLoaded)
        return false;
      if (queryLength == 0) {
        return false;
      }
      
      console.log(queryLength);
      // console.log("["+event.key+"] = key");

      var count = 0;

      // Goal = all potential parts of query string should match some element in user array
      // Ie. jus = matches part first name and mas = matches part last name

      /*
       * Proposed Detection Methods: 
       * If detect space: assume search includes first/last name 
       * If letters + numbers: assume email
       * If start w/ numbers: assume ID
       */

      // var isMatch = false;

        var start = moment().format('x');
        $.each(users, function(i, user) { // For each user:

          if (count > resultsLimit) {
            return false; // Too many matches: break
          }

          countMatchingQueryVals = 0;
          queryArrayCopy = queryArray.slice(0); 

          $.each(user, function(i, v) { // For each spot in user array, do this:

            // if (queryLength > 1)
            // console.log(queryArrayCopy);

            for (var x = queryArray.length; x >= 0; x --) { // For v, compare each query spot
              if (v.indexOf(queryArrayCopy[x]) != -1) { // If a query spot matches this v 

                countMatchingQueryVals ++; 
                queryArrayCopy.splice(x, 1); // Remove query part from being searched again for this user to avoid false positives
              }

            }
          
          }); // Inner each loop end (each user vals)

          if (countMatchingQueryVals == queryLength) {
            
            count ++;

            results.push({
              firstName : users[i][1].capitalize(),
              lastName  : users[i][0].capitalize(),
              email     : users[i][2],
              idNum     : users[i][3]
            });

            // results.push(users[i]);
          }
          /*
          // console.log(user);
          var isPotentialMatch = true;

            for (var x = queryLength; x-- > 0;) {

              var queryStringHasMatch = false;
              for (var y = 0; y < 3; y ++) {

                if (user[y].indexOf(queryArray[x]) > -1) { 
                  queryStringHasMatch = true;       
                  break;
                }

              }

              if (!queryStringHasMatch) {
                isPotentialMatch = false;
                // That position in query array does not match anything in user
                break; // Do not keep going
              }

            } // End outer for loop
           
            if (isPotentialMatch) {
              index++;
              console.log("Query: "+queryArray + "\nUser: "+user);
            }
            // Compare spots to their counterparts and get matches from each spots

          console.log(index);
          if (index > 10) {
            console.log(i+" "+index);
            return false;
          }
*/
          // if (userArray[0].indexOf(query) > -1) {
          //   if (name.indexOf(" "+query) > -1) {
          //     console.log("Probably first name");
          //   }
          //   matchCount++;
          //   var percentMatched = matchCount/userList.rs.length;
          //   percentMatched = Number(percentMatched).toFixed(4);
          //   percentMatched *= 100;
          //   console.log(percentMatched+" %\nARRAY:");
          //   for (var x=0; x<userArray.length; x++) {
          //     if (userArray[x] != '')
          //       console.log(userArray[x]);
          //   }
          //   if (percentMatched > 1)
          //     return false;
          //}
        // if id or email starts with

        });
        console.log("Count: "+count);
        var diff = moment().format('x') - start;
        console.log(moment(diff).format('mm:ss:SS'));

        $.each(results, function(i, user) {

          if (user.firstName != null && i <= count) {

            if (user.email.substring(user.email.length - 11, user.email.length) == '@drexel.edu') {
              user.email = user.email.substring(0, user.email.length - 11);              
            }

            var option = '<option id="'+user.idNum+'" data-subtext="'+user.email+'">'+user.firstName+' '+user.lastName+'</option>';

            $(option).appendTo('#userSelect');
            // $('#userSelect:last').hide();
            // $('.selectpicker').selectpicker('render');

            // $('#userSelect').fadeIn('fast');
          }

        });

       $('.selectpicker').selectpicker('refresh');        
       // $('.selectpicker').selectpicker('show');


    },
    keydown: function(e) {
      // console.log("Key Press");
      results = [];
      // $('.selectpicker').selectpicker('hide');
      $('#userSelect').empty();
      $('.selectpicker').selectpicker('render');        

    }
  });

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

    $('#loan-inventory-categories #'+asset+' > span').fadeTo('fast', 0, function() {

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