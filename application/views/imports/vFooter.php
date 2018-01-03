<script>
$(document).ready(function(){
	$('.ui.sidebar').sidebar({ 
			context: $('.pushable'),
			dimPage: false
		})
        .sidebar('attach events', '.toggleMenu')
    ;
});
</script>