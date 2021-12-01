/**
 * DataTables Basic
 */

 $(function () {
    'use strict';
  
    var dt_parking_activites_table = $('.requests-table'),
    
      assetPath = '../../../app-assets/';
  
    if ($('body').attr('data-framework') === 'laravel') {
      assetPath = $('body').attr('data-asset-path');
    }
  
    // DataTable with buttons
    // --------------------------------------------------------------------
  
    if (dt_parking_activites_table.length) {
      var dt_basic = dt_parking_activites_table.DataTable({
        columns: [
            // used for sorting so will hide this column
          { data: 'parking_address' },
          { data: 'parking_slots' },
          { data: 'amount' },
          { data: 'status' }
        ],
        columnDefs: [
         
          {
         
            targets: 0,
            orderable: false,
            
          },
          
         
          {
            // Label
            targets: 2,
            render: function (data, type, full, meta) {
              var $status_number = full['featured'];
              var $status = {
                1: { title: 'Featured', class: 'badge-light-primary' },
                0: { title: '', class: '' }
              };
              if (typeof $status[$status_number] === 'undefined') {
                return data;
              }
              return (
                '<span class="badge badge-pill ' +
                $status[$status_number].class +
                '">' +
                $status[$status_number].title +
                '</span>'
              );
            }
          }
        ],
        order: [[2, 'desc']],
        dom:
          '<"card-header justify-content-left border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex  justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between   mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        displayLength: 10,
        lengthMenu: [10, 25, 50, 75, 100],
        buttons: [
            
        ],
        language: {
          paginate: {
            // remove previous & next text from pagination
            previous: '&nbsp;',
            next: '&nbsp;'
          }
        }
      });
      $('div.head-label').html('<h4 class="mb-0"><strong>List of Requests</strong></h4>');
    }
   

    

 

});
  