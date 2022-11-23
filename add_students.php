<!-- <div style="border-radius:50px;background-color:#f2f2f2;padding: 100px;"> -->
<div class="container col-md-12 mt-5 row">
    <!-- <div class="row"> -->
    <!-- <div class="col-md-12 mt-5"> -->
    <div class="card">
        <div class="card-header">
            <h4>Add Students</h4>
        </div>
        <div class="card-body">
            <form action="#" id="btnsubmit" method="POST">

                <div class="form-group ">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group ">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group ">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" id="number" placeholder="Enter number">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">

                </div><br>
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>




<script>
    jQuery(document).ready(function() {

        jQuery('#btnsubmit').submit(function(e) {
            e.preventDefault();
            // alert("hi");
            var link = "<?php echo admin_url('admin-ajax.php') ?>";
            // alert(link);
            var form = jQuery('#btnsubmit').serialize();
            var formData = new FormData;
            formData.append('action', 'contact_us');
            formData.append('contact_us', form);

            jQuery.ajax({
                url: link,
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(result) {
                    alert('jkk');
                    //         $("#alertms").text("You are Submit data sucessfully!");
                    //         alert("hii")
                }
            });
        });
    });
</script>