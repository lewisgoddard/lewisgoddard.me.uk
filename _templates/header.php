<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( !empty($Page['Description']) ) echo '<meta name="description" content="'.$Page['Description'].'">'.PHP_EOL; ?>

<title><?php echo $Page['Title']; ?></title>

<link rel="author" href="https://plus.google.com/+LewisGoddard?rel=author">
<link rel="icon" href="https://eustasy.org/favicon.ico">
<link rel="shortcut icon" href="https://eustasy.org/favicon.ico">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/g/normalize">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Source+Sans+Pro:400,600,400italic" data-noprefix>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css" data-noprefix>
<link rel="stylesheet" href="assets/styles/colorbox.custom.css">
<link rel="stylesheet" href="assets/styles/main.css">

<!-- Asynchronous jQuery Loader -->
<script>
	// https://github.com/Cerdic/jQl
	var jQl={q:[],dq:[],gs:[],ready:function(a){'function'==typeof a&&jQl.q.push(a);return jQl},getScript:function(a,c){jQl.gs.push([a,c])},unq:function(){for(var a=0;a<jQl.q.length;a++)jQl.q[a]();jQl.q=[]},ungs:function(){for(var a=0;a<jQl.gs.length;a++)jQuery.getScript(jQl.gs[a][0],jQl.gs[a][1]);jQl.gs=[]},bId:null,boot:function(a){'undefined'==typeof window.jQuery.fn?jQl.bId||(jQl.bId=setInterval(function(){jQl.boot(a)},25)):(jQl.bId&&clearInterval(jQl.bId),jQl.bId=0,jQl.unqjQdep(),jQl.ungs(),jQuery(jQl.unq()), 'function'==typeof a&&a())},booted:function(){return 0===jQl.bId},loadjQ:function(a,c){setTimeout(function(){var b=document.createElement('script');b.src=a;document.getElementsByTagName('head')[0].appendChild(b)},1);jQl.boot(c)},loadjQdep:function(a){jQl.loadxhr(a,jQl.qdep)},qdep:function(a){a&&('undefined'!==typeof window.jQuery.fn&&!jQl.dq.length?jQl.rs(a):jQl.dq.push(a))},unqjQdep:function(){if('undefined'==typeof window.jQuery.fn)setTimeout(jQl.unqjQdep,50);else{for(var a=0;a<jQl.dq.length;a++)jQl.rs(jQl.dq[a]); jQl.dq=[]}},rs:function(a){var c=document.createElement('script');document.getElementsByTagName('head')[0].appendChild(c);c.text=a},loadxhr:function(a,c){var b;b=jQl.getxo();b.onreadystatechange=function(){4!=b.readyState||200!=b.status||c(b.responseText,a)};try{b.open('GET',a,!0),b.send('')}catch(d){}},getxo:function(){var a=!1;try{a=new XMLHttpRequest}catch(c){for(var b=['MSXML2.XMLHTTP.5.0','MSXML2.XMLHTTP.4.0','MSXML2.XMLHTTP.3.0','MSXML2.XMLHTTP','Microsoft.XMLHTTP'],d=0;d<b.length;++d){try{a= new ActiveXObject(b[d])}catch(e){continue}break}}finally{return a}}};if('undefined'==typeof window.jQuery){var $=jQl.ready,jQuery=$;$.getScript=jQl.getScript};
</script>
<script>jQl.loadjQ('https://cdn.jsdelivr.net/g/here-miss,rem,prefixfree,jquery@2.2.4,colorbox');</script>

<!-- Google Analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0]; a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
</script>

<!-- Only track pageviews if people allow it -->
<script>
	$(function() {
		if ( trackme ) {
			ga('create', 'UA-45667989-12', 'auto');
			ga('send', 'pageview');
		}
	});
</script>

<!-- Open foreign links in a new tab -->
<script>
	$(function() {
		$('a').each(function() {
			var href = this.href;
			if ( href.indexOf(window.location.host) == -1 ) {
				$(this).attr('target', '_blank');
			}
		});
	});
</script>

<!-- Open colorbox links with colorbox -->
<script>
	$(function() {
		$('a.gallery').colorbox({rel:'gal'});
		$('a.colorbox').colorbox();
	});
</script>

</head>
<body>
