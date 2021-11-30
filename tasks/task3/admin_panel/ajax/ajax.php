<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
    //Add Users
    $(function () {
        $('#addSubmit').on('click', function (event) {
            event.preventDefault();
            $.ajax({
                url: '../dbconn/query/addUser.php',
                type: 'POST',
                data: {
                    firstname: $('#firstname').val(),
                    lastname: $('#lastname').val(),
                    birthdate: $('#birthdate').val(),
                    personalnumber: $('#personalnumber').val(),
                    position: $('#position').val(),
                    image: $('#image').val(),
                    success(data){
                        document.getElementById("successfully").innerHTML = "Successfully Registered"
                    },
                },
            });
        });
    });
</script>

<script>
    //delete users
    $(function(){
        $(document).on('click','.delete',function(){
            let id = $(this).attr('id');
            let ele = $(this).closest('tr');

            let confirmDel = confirm("are you sure?");
            if (confirmDel === true) {
                $.ajax({
                    type: 'POST',
                    url: '../dbconn/query/deleteUser.php',
                    data: {'id': id},
                    success: function (data) {
                            ele.fadeOut().remove();
                    }
                });
            }
        });
    });
</script>
<script>
    //Edit Users
    $(function () {
        $('#editSubmit').on('click', function (event) {
            event.preventDefault();
            $.ajax({
                url: '../dbconn/query/editUser.php',
                type: 'POST',
                data: {
                    id: $('#id').val(),
                    firstname: $('#firstname').val(),
                    lastname: $('#lastname').val(),
                    birthdate: $('#birthdate').val(),
                    personalnumber: $('#personalnumber').val(),
                    position: $('#position').val(),
                    image: $('#image').val(),
                    success(data){
                        document.getElementById("successfully").innerHTML = "Successfully Updated"
                    },
                },
            });
        });
    });
</script>
</body>
</html>