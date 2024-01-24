
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/website/js/function_call.js"></script>
    <script src="<?php echo base_url();?>assets/js/data-tables.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/js/datatables-simple-demo.js" type="text/javascript"></script>

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
	<script>
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
</script>