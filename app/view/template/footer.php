<footer>
	<script src="<?= SCRIPT_PATH ?>jquery.js"></script>
	<script src="<?= SCRIPT_PATH ?>what-input.js"></script>
	<script src="<?= SCRIPT_PATH ?>foundation.min.js"></script>

	<script type="text/javascript">
        function resize()
        {
            var heights = window.innerHeight-60;
            document.getElementById("banner").style.height = heights + "px";
        }
        resize();
        window.onresize = function() {
            resize();
        };
       
    </script> 
</footer>