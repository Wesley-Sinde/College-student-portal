function msg() {
  Swal.fire({
    title: "Are you sure?",
    text: "You want to take this exam now, your time will start automaticaly",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, start now!",
  });
}
