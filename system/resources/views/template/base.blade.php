<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NyverL Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('public')}}/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{url('public')}}/admin/assets/vendors/css/vendor.bundle.base.css">
    <link href="{{url('public')}}/admin/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('public')}}/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('public')}}/admin/assets/images/icon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
    @include('template.section.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- partial:../../partials/_navbar.html -->
    @include('template.section.header')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @include('template.utils.notif')
                        </div>
                    </div>
                </div>
                @yield('content')
          </div>
          <!-- content-wrapper ends -->
          @include('template.section.footer')
        </div>
        <!-- partial -->
        <!-- partial:../../partials/_footer.html -->
        <!-- main-panel ends -->

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('public')}}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('public')}}/admin/assets/js/off-canvas.js"></script>
    <script src="{{url('public')}}/admin/assets/js/hoverable-collapse.js"></script>
    <script src="{{url('public')}}/admin/assets/js/misc.js"></script>
    <script src="{{url('public')}}/admin/assets/js/settings.js"></script>
    <script src="{{url('public')}}/admin/assets/js/todolist.js"></script>
    <!-- Page level plugins -->
    <script src="{{url('public')}}/admin/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public')}}/admin/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        $(".table-datatable").DataTable();
    </script>
    <script>
        function gantiProvinsi(id) {
            $.get("api/provinsi/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kabupaten").html(option)
            });
        }
        function gantiKabupaten(id) {
            $.get("api/kabupaten/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kecamatan").html(option)
            });
        }
        function gantiKecamatan(id) {
            $.get("api/kecamatan/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
