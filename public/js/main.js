
(function ($) {
    // USE STRICT
    "use strict";
    var navbars = ['header', 'aside'];
    var hrefSelector = 'a:not([target="_blank"]):not([href^="#"]):not([class^="chosen-single"])';
    var linkElement = navbars.map(element => element + ' ' + hrefSelector).join(', ');
    $(".animsition").animsition({
      inClass: 'fade-in',
      outClass: 'fade-out',
      inDuration: 900,
      outDuration: 900,
      linkElement: linkElement,
      loading: true,
      loadingParentElement: 'html',
      loadingClass: 'page-loader',
      loadingInner: '<div class="page-loader__spin"></div>',
      timeout: false,
      timeoutCountdown: 5000,
      onLoadEvent: true,
      browser: ['animation-duration', '-webkit-animation-duration'],
      overlay: false,
      overlayClass: 'animsition-overlay-slide',
      overlayParentElement: 'html',
      transition: function (url) {
        window.location.href = url;
      }
    });
  })(jQuery);

$( document ).ready(function() {
  function getList()
  {
    $.ajax({
      url: '/counteragent/list',
      success: function ( success ) {
        try
        {
          if( $('#counteragent_list').has('tr') )
          {
            $('#counteragent_list').empty();
          }

          let html = [];
          success.forEach(function( item, index )
          {
            let status = {
              1 : { 'value': 'Active', 'type' : 'process' },
              2 : { 'value': 'Not Active', 'type' : 'denied' }
            };

            html.push(
                '<tr class="tr-shadow">' +
                  '<td>' + item.id + '</td>' +
                  '<td>' + item.name + '</td>' +
                  '<td><span class="block-email">' + item.phone + '</span></td>' +
                  '<td>' + item.address + '</td>' +
                  '<td><span class="status--' + status[item.status]['type'] + '">' + status[item.status]['value'] + '</span></td>' +
                  '<td>' +
                    '<div class="table-data-feature">' +
                    '<button id="edit_' + item.id + '" class="item edit-button-item" data-toggle="modal" data-target="#editModal" title="Edit">' +
                      '<i class="zmdi zmdi-edit"></i>' +
                    '</button>' +
                      '<button id="delete_' + item.id + '" class="item delete-button-item" data-toggle="tooltip" data-placement="top" title="Delete">' +
                    '<i class="zmdi zmdi-delete"></i>' +
                    '</button>' +
                    '</div>' +
                  '</td>' +
                '</tr>'
            );
          } );

          html.join( '<tr class="spacer"></tr>' )

          $('#counteragent_list').append( html.join( '<tr class="spacer"></tr>' ) );
        }
        catch ( error )
        {
          console.log(error);
        }
      },
    });
  }

  getList();

  $("#add_form").validate({
    rules: {
      name : {
        required: true,
        minlength: 3
      },
      phone: {
        required: true,
        number: true,
      },
      address : {
        required: true,
        minlength: 3
      }
    }
  });

  $('#create').on('click', function (){
    let form = $("#add_form");
    if( form.valid() )
    {
      $.ajax({
        type: 'POST',
        url: '/counteragent/add',
        data: {
          'name'    : form.find('input[name="name"]').val(),
          'phone'   : form.find('input[name="phone"]').val(),
          'address' : form.find('input[name="address"]').val(),
          'status'  : form.find('input[name="status"]:checked').val() ?? 1,
        },
        success: function ( success ) {
          getList();
        }
      });
    }
  });

  $('body')
      .on(
          'click',
          '.edit-button-item',
          function() {
            let id = this.id.split('_')[1];
              $.ajax({
                  url: '/counteragent/one',
                  data:
                  {
                    'id' : id
                  },
                  success: function (success) {
                      try {
                        let form = $('#edit_form');
                        form.find('#id_counteragent').val( success.id );
                        form.find('#name').val( success.name );
                        form.find('#phone').val( success.phone );
                        form.find('#status' + success.status).prop("checked", true);
                      } catch (error) {
                          console.log(error);
                      }
                  }
              })
          }
      );

  $("#edit_form").validate({
    rules: {
      name : {
        required: true,
        minlength: 3
      },
      phone: {
        required: true,
        number: true,
      }
    }
  });

  $('#edit').on('click', function (){
    let form = $("#edit_form");
    if( form.valid() )
    {
      $.ajax({
        type: 'POST',
        url: '/counteragent/edit',
        data: {
          'id'      : form.find('input[name="id"]').val(),
          'name'    : form.find('input[name="name"]').val(),
          'phone'   : form.find('input[name="phone"]').val(),
          'status'  : form.find('input[name="status"]:checked').val() ?? 1,
        },
        success: function ( success ) {
          getList();
        }
      });
    }
  });

  $('body')
      .on(
          'click',
          '.delete-button-item',
          function() {
            let id = this.id.split('_')[1];
            $.ajax({
              type: 'POST',
              url: '/counteragent/delete',
              data:
              {
                'id' : id
              },
              success: function (success) {
                getList();
              }
            })
          }
      );

});