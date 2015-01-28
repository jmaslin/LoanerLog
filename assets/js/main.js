
var assetData;
var imgDir="/assets/img/";

$( document ).ready(function() {

	$('th').addClass('lead').addClass('text-center');
	$('.toggle-option').toggle();
  $('[data-toggle="tooltip"]').tooltip({
  	placement: 'bottom'
  });

  $('.loan-item-overlay').hide();

  getAssetList(); // Load our assets classes

  // getLog('today'); // Get the today view of log - no use loading everything 

});

function getAssetList() { // Grab list of assets and related info

	$.ajax({
		dataType: 'json',
		url: '/test/assetinfo.json',
		success: function(data) {
			saveAssetList(data.Assets);
		}
	});

}

function saveAssetList(data) { // Callback function for saving asset list into global object
	assetData = data;

// 		<div class="col-md-3 asset-item">
// 	<input type="image" src="/assets/img/vga-adapter.png" id="add-vga-adapter" name="vga-adapter" data-toggle="tooltip" title="VGA Adapter" class="form-control add-asset img img-responsive">
// </div>
	$.each(assetData, function(i, asset) {

		var newAssetItem = [
			'<div class="col-md-3 col-sm-3 col-xs-4 asset-item">',
			'  <input type="image" src="/assets/img/'+asset.imgName+'" name="add-generic-asset" id="'+asset.ident+'" data-toggle="tooltip" title="'+asset.name+'" class="form-control add-asset img img-responsive">',
			'</div>'
		].join('\n');

		$('#add-asset-list').append(newAssetItem);
		$('#add-asset-list .asset-item:last').toggle();	

		$('#add-asset-list .asset-item:last > input').error(function() {
			$(this).attr('src', imgDir+'question.png');
		});

		// $('#add-asset-list .asset-item:last').fadeIn('fast');
		
	});
	

	$('#add-asset-list').children().slideDown('fast');

	$('#ajax-loader').fadeToggle('slow');		

}

// TABLE LOAN ROW HOVERING START
$('#loan-table tbody').on(
	{
		mouseenter: function(event) { // Enter the row

			//$(this).find('.loan-info-asset').css('opacity', 1);

			if ($(event.target).hasClass('assets-td')) {
				$(this).find('.more-info').fadeTo(0, 1);
			}
			else {
				$(this).find('.more-info').fadeTo(0, 0.25); 
			}

			// This makes it easier to specify actions when hovering over each table column. 
			$(this).on(
				{
					mouseenter: function(event) {

						// For displaying the info img 
						if ($(this).hasClass('assets-td')) {
							$(this).find('.more-info').fadeTo(0, 1);
							$(this).on('click', function(event) {
								event.preventDefault();
								console.log("CLICK -> INFO PAGE FOR LOAN ID: "+$(this).parent().attr('data-loan-id'));
							});
						}
						else {
							$(this).find('.more-info').fadeTo(0, 0.25);
						}


					},
					mouseleave: function(event) {
							$(this).parent().find('.more-info').fadeTo(0, 0.25);
					}
				},
			'td');

		},
		mouseleave: function(event) {

			// console.log("Leave row");
			$(this).find('.more-info').fadeTo(0, 0);		
			//$(this).find('.loan-info-asset').css('opacity', 0.7);
		}
	},
	'tr');

// TABLE LOAN ROOW HOVERING END

$('#tableView li').on('click', 'a', function() {

	$('#tableView li.active').removeClass('active');
	$(this).parent().addClass('active'); // Set the li to the active tab.
	$(this).blur();

	// updateLogView();
})

$('#loan-table table tbody').on('click', '.table-button-group .check-in', function() {
	
	var userRow = $(this).parent().parent();
	var loanData = $(userRow).find('.table-loan-info').html();

	if (loanData != '') {
		var messageText = '' +
			'<div class="alert-msg-text">Verify <u>all</u> loaned items have been returned.</div>' +
			'<div class="table-loan-info">'+
			loanData + 
			'</div>';
	}
	else {
		messageText = '<div class="alert-msg-text">Verify all loaned items have been returned.</div>';
	}

	swal({
		title: 'Please Confirm Check In', 
		text: messageText, 
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: 'btn-warning',
		confirmButtonText: "Confirm",
	  closeOnConfirm: false
	  // timer: 10000
	},
	function() {
		swal("Checked in!", "Make sure to put the items away.", "success");
		$(userRow).fadeOut('slow');
		// TODO: AJAX to complete user loan.
	});

	$('.sweet-alert').find('img').fadeTo(0, 0, function() {
		$(this).width(48).height(48);
		$(this).fadeTo(600, 1);
	});

})

/*
 * DEALING WITH ASSETS 
 */

// This is for the images of assets in new loan modal (asset without barcodes).
$('#add-asset-list').on('click', '.asset-item .add-asset', function(e) {

	var assetType = $(this).attr('name'); // Name corresponds to asset ident
	// updateLoanList(assetType); // Send to updateLoanList to add to visual list
	getAssetInfo(assetType);

	e.preventDefault();
});

function getAssetInfo(assetIdent) {
	$.each(assetData, function(i, asset) {
		if (assetIdent == asset.ident) {
			updateLoanList(asset);
			return false; // Break out of each loop
		}
	});
}

function updateLoanList (assetInfo) {

	var loanListContainer = '.loan-item-container';

	var newLoanItem = getLoanItemDiv(assetInfo);

	// Add the loan item to visual list and hide so modifications can be made + nice entry animation
	// $('#new-loan-preview').append(newLoanItem);
	$(loanListContainer).append(newLoanItem);
	$('.loan-item-overlay').hide();
	$(loanListContainer+' li:last').hide();

	// If loan item image cannot be found, load the question one
	$('#new-loan-preview .loan-item:last img').error(function() {
		$(this).attr('src', imgDir+'question.png');
	});

	// Make our new loan item appear in the list
	$(loanListContainer+' li:last').slideDown();
}

function getLoanItemDiv(assetInfo) {

	if (!assetInfo.serialNum) {
		// Better error checking to determine if asset should actually have a serial
		assetInfo.serialNum = "";
	}

	var newLoanItem = 
		[ 
			'<li class="list-group-item">',
			'<div id="'+assetInfo.ident+'" class="loan-item row">',
			'  <div class="loan-item-overlay">',
			'    <div class="align-frame">',
			'      <input type="image" src="/assets/img/settings.png" class="img img-responsive loan-item-settings">',
			'      <input type="image" src="/assets/img/remove.png" class="img img-responsive loan-item-remove">',
			'    </div>',
			'  </div>',
			'  <div class="col-md-3">',
			'    <img class="img img-responsive" width="42" src="/assets/img/'+assetInfo.imgName+'">',
      '  </div>',
      '  <div class="col-md-9 loan-item-text">',
      '    <div class="loan-item-type text-primary lead">'+assetInfo.name+'</div>&nbsp',
      '    <div class="loan-item-id text-info">'+assetInfo.serialNum+'</div>',
      '  </div>',
      '</div>',
      '</li>'
		].join('\n');

		return newLoanItem;
}

// Show the adv. options in new loan modal).
$('#toggle-adv').on('click', function(e) {

	$('.toggle-option').slideToggle('fast');
});

// Show calendar for long-term loan (no weekends, minimum 1 day).
$('.pickadate').on('click', function() {
	$(this).pickadate({
		min: 1,
		disable: [
			1, 7
		],
		container: ''
	});
});

$('.loan-item-container').on('mouseenter', 'li .loan-item', function() {
	$(this).find('.loan-item-overlay').fadeIn('fast');
});

$('.loan-item-container').on('mouseleave', 'li .loan-item', function() {
	$(this).find('.loan-item-overlay').fadeOut('fast');
});

$('.loan-item-container').on('click', 'li .loan-item-remove', function(event) {
	var loanItem = $(this).parent().parent().parent().parent(); 
	// Cannot use delegate target b/c forced to put li in second area since being dynamically created

	// TODO: Gray out (and mark removed) if existing loan or > certain time since loan
	$(loanItem).fadeOut('fast');
	// Show undo for a few seconds after?
});

// SHOW LOAN INFO FROM LOG TABLE
// $('.table-button-group').on('click', 'button.get-info', function() {
// 	var loanId = $(this).parent().parent().attr('data-loan-id');
// 	$('#loan-info-modal').modal('show');
// 	// Open up modal with loanId and info.
// });

// Hide adv options on modal close
$('#loan-out-modal').on('hidden.bs.modal', function(event) {
	$('#loan-out-adv-options').hide();
	$('#new-loan-preview').children().remove();
});

$('#loan-out-modal').on('show.bs.modal', function(event) {

	$('.add-asset').tooltip();
	$('#user-name-feedback').children().hide();
	// getAssetList(); // Load generic asset classes into new loan module and GET/SAVE list of data.
	// TODO: Maybe nice fade in for the above
	// TODO: Save the asset list data into array so do not have to perform lookup everytime asset is selected to add to loan (GET request - not efficient).

	// console.log(assetData);

});

$('#loan-info-modal').on('show.bs.modal', function(event) {

	var button = $(event.relatedTarget);
	var loanMain = $(button).parent().parent();

	var loanId = $(loanMain).data('loan-id');

	var modal = $(this);

	// Grab data on user loan
	$.ajax({
		dataType: 'json',
		url: '/test/loandata.json',
		success: function(data) {
			$.each(data.Loans, function(i, loanData) {
				if (loanId == loanData.id) {
					console.log("Loan ID found.");
					modal.find('.loan-id').text(loanId);
					modal.find('.loaned-to').text(loanData.loanedTo);
					modal.find('.loaned-from').text(loanData.loanedFrom);

					modal.find('.loaned-on-time').text(moment(loanData.loanedDate, 'X').format('hh:mm A'));
					modal.find('.loaned-on-date').text(moment(loanData.loanedDate, 'X').startOf('day').fromNow()); // TODO: Title tooltip in MM-DD-YYYY
					modal.find('.loaned-on-date').prop('title', moment(loanData.loanedDate, 'X').format('MM-DD-YYYY')); 

					$.each(loanData.loanAssets, function(i, loanItem) {
						var loanItem = getLoanItemDiv(loanItem);
						$('.loan-info-asset-list').append(loanItem);
						$('.loan-item-overlay').hide();
						$('.loan-info-asset-list .loan-item:last').fadeTo(0, 0);
						$('.loan-info-asset-list.loan-item:last img').error(function() {
							$(this).attr('src', imgDir+'question.png');
						});

						// Make our new loan item appear in the list
						$('.loan-info-asset-list .loan-item:last').fadeTo(500, 1);
					});

					// each loop for each asset to display
				}
			});
		}
	});

});

$('#loan-info-modal').on('shown.bs.modal', function(event) {

	  $('.loaned-on-date').tooltip({
	  	html: $(this).prop('title')
	  });

});

$('#loan-info-modal').on('hidden.bs.modal', function(event) {
	$('.loan-info-asset-list').children().remove();
});


// CHECK LOAN IN FROM TABLE LOG
$('.table-button-group').on('click', 'button.check-in', function() {

	var loanMain = $(this).parent().parent();
	var loanId = $(loanMain).attr('data-loan-id');

	// $(loanMain).fadeOut('slow');

	// Open up modal for that loanId and show check in option.
	// TODO: What will check in be when clicked for log item. (Ie. Main check-in will ask to scan item, auto checks in.)

});

// $('#tableViewOptions li').on('click', 'a', function() {

// 	var tableOption = $(this).parent();

// 	var hasActiveClass = $(tableOption).hasClass('active');

// 	$(tableOption).toggleClass('active');

// 	filterTableView(tableOption, hasActiveClass);

// });

function filterTableView(tableOption, isActive) {

	// Update live table view.
}

// $('#loanOutModal').modal();

