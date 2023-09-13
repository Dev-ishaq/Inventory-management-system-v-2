<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tst</title>
    <!-- <link src="sweetalert2/sweetalert2/dist/sweetalert2.all.js"></link> -->
    <script src="css/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="css/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <link rel="stylesheet" href="sweetalert/sweetalert/dist/sweetalert.min.js"> -->
    <!-- <script src="./sweetalert2/sweetalert2/dist/sweetalert2.all.min.js"></script> -->
</head>
<body>
<script>                    //   ALERT IN SECONDS
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
</script>

    <!-- <a href="login.html">login</a> -->
</body>
</html>