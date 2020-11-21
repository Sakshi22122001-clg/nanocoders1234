<!DOCTYPE html>
<html lang="en">
<?php session_start();
    if(isset($_SESSION["activeuser"])==false)
    {
        header("location:index.php");
    }?>
<head>
    <meta charset="UTF-8">
    <title>NGO Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    $('#prev').attr('src', ev.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }

    </script>
    <script>
        $(document).ready(function(){
    $("#FetchProfile").click(function() {
                var uid = $("#txtUid").val();
                var action_url = "people-fetch.php?uid=" + uid;

                $.getJSON(action_url, function(json_ary) {

                    if (json_ary.length == 0) {
                        alert("No Record Found");
                    } else {
                        $("#name").hide().val(json_ary[0].name).show(900);
                        $("#email").hide().val(json_ary[0].email).show(900);
                        $("#ngo").hide().val(json_ary[0].ngo).show(900);
                        $("#txtMob").hide().val(json_ary[0].mobile).show(900);
                        $("#txtAdd").hide().val(json_ary[0].address).show(900);
                        $("#city").hide().val(json_ary[0].city).show(900);
                        $("#state").hide().val(json_ary[0].state).show(900);
                        $("#prev").hide().attr("src", "uploads/" + json_ary[0].pic).show(900);
                        $("#hdn").hide().val(json_ary[0].pic);
                    }

                });
            });
        });
    </script>
</head>
<body style="background:#f0f0f0">
    <div class="container">
        <div class="row pt-1" style="background:#4151D9;color:white">
            <div class="col-md-12">
                <center>
                    <h3>Citizen Profile</h3>
                </center>
            </div>
        </div>
        <form action="profile-process.php" method="post" enctype="multipart/form-data">

            <input type="hidden" id="hdn" name="hdn">
            <div class="form-row pt-5">
                <div class="col-md-6 form-group">
                    <label for="">User id</label>
                    <input type="text" id="txtUid" class="form-control" name="txtUid" readonly 
                    value="<?php echo $_SESSION['activeuser']; ?>">
                    <span id="errUid">*</span>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3 form-group">
                    <label for="">&nbsp;</label>
                    <input type="button" id="FetchProfile" class="form-control btn btn-primary" value="Fetch Profile">
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Mobile Number</label>
                    <input type="text" class="form-control" name="txtMob" id="txtMob" required>
                </div>
            </div>
            <div class="form-row pt-2">
                <div class="col-md-6 form-group">
                    <label for="">Email Id</label>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">NGO</label>
                    <input type="text" class="form-control" name="ngo" id="ngo" required>
                </div>
            </div>
            <div class="form-row pt-2">
                <div class="col-md-12 form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="txtAdd" id="txtAdd" required>
                </div>
            </div>
            <div class="form-row pt-2">
                <div class="col-md-6 form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="city" id="city" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">State</label>
                    <input type="text" class="form-control" name="state" id="state" required>
                </div>
            </div>
            <div class="form-row pt-4">
                <div class="col-md-4">
                    <label for="" style="font-size:20px">Select Profile Pic</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="profilePic" id="profilePic" onchange="showpreview(this);" required>
                </div>
                <div class="col-md-4">
                    <img src="pics/img_avatar.png" id="prev" width="80" height="80" alt="">
                </div>
            </div>
            <div class="form-row pt-4 pb-5">
                <div class="col-md-12">
                    <center>
                        <input type="submit" value="Save" name="btn" class="btn btn-primary" style="width:100px">           <input type="submit" value="Update" name="btn" class="btn btn-primary" style="width:100px">
                    </center>
                </div>
            </div>
        </form>
    </div>
</body>
</html>