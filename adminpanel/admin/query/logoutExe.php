<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire(" Your session has expired Please login gain.", "Logout", "error");
</script>
<?php
session_start();
session_unset();
session_destroy();
header("location:../");
?>