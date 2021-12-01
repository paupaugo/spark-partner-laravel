/**
 * DataTables Basic
 */

 $(function () {
    'use strict';
  
    var dt_parking_activites_table = $('.reports-table'),
    
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
          { data: 'name' },
          { data: 'parking_address' },
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
            {
              extend: 'collection',
              className: 'btn btn-outline-secondary dropdown-toggle',
              text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Export',
              buttons: [
                {
                  extend: 'print',
                  text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Print',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'csv',
                  text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'excel',
                  text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'pdf',
                  text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'Pdf',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                },
                {
                  extend: 'copy',
                  text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copy',
                  className: 'dropdown-item',
                  exportOptions: { columns: [3, 4, 5, 6, 7] }
                }
              ],init: function (api, node, config) {
                $(node).removeClass('btn-secondary');
                $(node).parent().removeClass('btn-group');
                setTimeout(function () {
                  $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                }, 50);
              }
            },
          ],
        language: {
          paginate: {
            // remove previous & next text from pagination
            previous: '&nbsp;',
            next: '&nbsp;'
          }
        }
      });
      $('div.head-label').html('<h4 class="mb-0"><strong>Daily Reports</strong></h4>');
    }
   

    

 

});
  