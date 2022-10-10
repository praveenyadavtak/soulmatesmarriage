<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Message Privacy<span></span> <span></span></h1>
                </div>
            </div>

        </div>
    </div>
</div>
<!--===== #/PAGE TITLE =====-->
<section id="about_us" class="about-us padding">
    <div class="container">
        <div class="row" style="background: white;padding: 15px;box-shadow: 0px 0px 5px #d75353;border-left: 2px solid #d75353;
    border-right: 2px solid #d75353;">
            <div class="history-section">

                <div class="row">
                    <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="1s">
                        <div class="caption" style="text-align: justify">
                            <p>&nbsp;</p>
                            <div class="form-group">
                                <h4>Your Mobile Privacy status has been set as</h4>

                                <div class="col-sm-12 col-md-12 no-padding">
                                    <p><input type="radio" class="form-conrol" onclick="addprofilepri('0');" name="privacy" value="0" />&nbsp;&nbsp;<label>Show</label></p>
                                    <p><input type="radio" class="form-conrol" onclick="addprofilepri('1');" name="privacy" value="1" />&nbsp;&nbsp;<label>Hide</label></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<script>
    function addprofilepri(x) {

        var xx = confirm("Are You Sure?");
        // alert(xx);
        if (xx) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()  ?>MobilePrivacy/change_message_privacy",
                data: {
                    "id": x
                },
                success: function(data) {
                    alert(data);
                }
            });
        }

    }
</script>