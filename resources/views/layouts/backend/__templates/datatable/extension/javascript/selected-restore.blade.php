$('#selected-restore').on('click', function(e) {
  var exilednonameArr = [];
  $(".checkable:checked").each(function() { exilednonameArr.push($(this).attr('data-id')); });
  var strEXILEDNONAME = exilednonameArr.join(",");
  Swal.fire({ title: "{{ __('default.notification.confirm.are-you-sure') }}?", text: "{{ __('default.notification.confirm.selected-restore') }}", icon: "warning", showCancelButton: true, confirmButtonText: '{{ __("default.label.yes") }}', cancelButtonText: '{{ __("default.label.no") }}', reverseButtons: false }).then(function(result) {
    if (result.value) {
      $.ajax({
        url: "{{ URL::current() }}/../selected-restore",
        type: 'get',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: 'EXILEDNONAME='+strEXILEDNONAME,
        success: function (data) {
          KTApp.block('#exilednoname_body', {
            overlayColor: '#000000',
            state: 'info',
            message: '{{ __('default.label.processing') }} ...'
          });
          setTimeout(function() {
            KTApp.unblock('#exilednoname_body');
            $('#collapse_bulk').collapse('hide');
            var oTable = $('#exilednoname_table').dataTable();
            oTable.fnDraw(false);
            toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
            toastr.success("{{ __('default.notification.success.selected-restore') }}");
          }, 2000);
        },
        error: function (data) {
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.error("{{ __('default.notification.error./') }}");
        }
      });
    }
  });
});
