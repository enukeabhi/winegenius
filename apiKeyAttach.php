<?php 
//if ($is_live_site) {	// LIVE SITE: jeremyoliverbeta.com
//	$key = 'ABQIAAAAVJUjJ_-6Si_0ffti5HEDohTq6MWTzymYzR-CaoRHmOgptrnt9hT5KuQDmVtj9qWyUJuYaCLP-IcW0g';	
//} else {
	$key="ABQIAAAAVJUjJ_-6Si_0ffti5HEDohSIDl0auGYhYVW6H543TWpdcu-EWRQQkujBlhKtyImtMH2xbFjF9u1-AQ";
//}
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="https://www.google.com/jsapi?key=<?php print urlencode($key);?>"></script>
<script type="text/javascript">
google.load("feeds", "1");
</script>