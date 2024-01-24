<div class="progress-wrap">

            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">

                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />

            </svg>

        </div>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-latest.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/odometer.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/SmoothScroll.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/backToTop.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>

        <script src="<?php echo base_url();?>assets/js/Chart.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/js/chart-area-demo.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/js/chart-bar-demo.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/js/data-tables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/datatables-simple-demo.js" type="text/javascript"></script>


		<!-- <script src="<?php echo base_url();?>assets/js/dashboard.init.js" type="text/javascript"></script> -->



<script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script>


<script>
$(document).ready(function() {
    const datatablesSimple1 = document.getElementById('datatablesSimple1');
    if (datatablesSimple1) {
        new simpleDatatables.DataTable(datatablesSimple1);
    }
} );
</script>

<script type="text/javascript">
    $(function () {
        $(".NameVelidate").keypress(function (e) {
			var any_name = $(this).val();
            var keyCode = e.keyCode || e.which;
            //Regex for Valid Characters i.e. Numbers.
            var regex = /^[A-Za-z .]+$/;

            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                alert("Only characters & Whitespace are allowed!");
				return false;
            }
            if (any_name.length >= 100) {
                alert("100 characters allowed!");
				return false;
            }
            return isValid;
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $(".NumberVelidate").keypress(function (e) {
			var any_name = $(this).val();
            var keyCode = e.keyCode || e.which;
            //Regex for Valid Characters i.e. Numbers.
            var regex = /^[0-9-+()]*$/;

            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                alert("Only Numbers are allowed!");
				return false;
            }

            return isValid;
        });
    });
</script>


<script>
/*
    $(document).ready(function() {
            function disableBack() { window.history.forward() }
            window.onload = disableBack();
            window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
        });

        $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
            return false;
        }
    });

    $(document).on("contextmenu", function (e) {
        e.preventDefault();
    });
*/
</script>