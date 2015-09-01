<!-- ========== TEST USER ========== -->
<script type="text/javascript">
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i); 
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }};
if(isMobile.any()){
	document.writeln('<link rel="stylesheet" href="http://mcpe-addons.22web.org/styles_m.css">');
    console.log('mobile http://mcpe-addons.22web.org/');
}else{
	document.writeln('<link rel="stylesheet" href="http://mcpe-addons.22web.org/styles.css">');
    console.log('pc http://mcpe-addons.22web.org/');
}

// ========== FIN TEST USER ========== //
</script>