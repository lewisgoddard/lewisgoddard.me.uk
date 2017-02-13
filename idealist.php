<?php

$Page['Title'] = 'Idealist &nbsp;&middot;&nbsp; Lewis Goddard';
require __DIR__.'/_templates/header.php';

?>

	<a href="./" class="back-arrow faded"><i class="fa fa-arrow-left"></i></a>

	<header>
		<h1>Idealist</h1>
		<p>I believe in:</p>
		<ul>
			<li>Impartial Meritocratic Democracies
			<li>Accountability for Unreasonable Actions
			<li>Separation of Church &amp; State (including education)
			<li>National Healthcare
			<li>Free Education
			<li>Basic Income
			<li>A right to self-defend
			<li>Positive re-inforcement
			<li>Negative re-inforcement
		</ul>
	</header>

	<section id="contributons-to-open-source">
		<h3><i class="fa fa-code-fork"></i>&nbsp; Contributions to Open Source</h3>
		<p>I believe that Open Source software presents significant oppurtunities to equalise private individuals and businesses technical applications when applied to non-core products.</p>
		<p>I have worked on over 300 projects that I have recorded. Over 50 were released and <strong>licensed under MIT</strong>, many being <a href="https://github.com/eustasy">handed over to eustasy</a>, where they can be maintained long after I am have moved on. I've also worked with the passionate designers and developers behind <a href="https://elementary.io/">elementary OS</a>, and pushed previously (largely one-person) projects like <a href="http://devede.org/">DeVeDe</a> and <a href="http://midori-browser.org/">Midori</a> into the a more modern web-age.</p>
	</section>

	<section class="wide">
		<div class="large-half">
			<h2>Authenticatron</h2>
			<a class="colorbox" href="assets/images/screenshots/authenticatron.png">
				<img class="screenshot" src="assets/images/screenshots/authenticatron.png">
			</a>
			<h4>
				<a class="button rounded view" href="http://labs.eustasy.org/authenticatron/"><i class="fa fa-eye"></i>&nbsp; View</a>
				<a class="button rounded source" href="https://github.com/eustasy/authenticatron"><i class="fa fa-code-fork"></i>&nbsp; Source</a>
			</h4>
		</div>
		<div class="large-half align-center">
			<h2>Bubbly</h2>
			<a class="colorbox" href="assets/images/screenshots/certbot-with-nginx.png">
				<img class="screenshot" src="assets/images/screenshots/certbot-with-nginx.png">
			</a>
			<h4>
				<!-- <a class="button rounded view" href=""><i class="fa fa-eye"></i>&nbsp; View</a> -->
				<a class="button rounded source" href="https://github.com/eustasy/bubbly"><i class="fa fa-code-fork"></i>&nbsp; Source</a>
			</h4>
		</div>
	</section>
	<!-- TODO Add more projects
		- Phoenix
		- Puff
	-->

	<section id="improvements-to-security">
		<h3><i class="fa fa-lock"></i>&nbsp; Improvements to Security</h3>
		<p>I'm big on security. All my servers run root-disabled, SSH-Key only access with a 6 digit token that changes every 30 seconds as a secondary authentication method. They are rate-limited and access logged. I've worked on several pieces of software towards similar ends.
		<ul>
			<li><a href="https://github.com/eustasy/bubbly">eustasy/bubbly</a> provides guides, scripts, and configurations for using free, automated SSL by <a href="https://letsencrypt.org/">Let's Ecrypt</a> to secure websites.
			<li><a href="https://github.com/eustasy/authenticatron">eustasy/authenticatron</a> is a simpler PHP implementation of Google Authenticator secrets, corresponding QR links, and code verification to easily add second-authentication to websites.
			<li><a href="https://github.com/eustasy/here-miss">eustasy/here-miss</a> is a selection of tiny DNT detection scripts available in a variety of languages, with configurable honouring of default-set headers.
		</ul>
	</section>

	<section id="running-eustasy">
		<h3><i class="fa fa-line-chart"></i>&nbsp; Running eustasy</h3>
		<p>After joining <a href="https://eustasy.org/">eustasy</a> early in 2007, I assumed a council role withing the organisation in 2012. Since then it has grown from just half a dozen young developers to and average of <strong>25-45 individuals</strong> creating code and designs using centralised resources every month. eustasy is led by an elected council, with a meritocratic system of vote distribution and substitution.</p>
		<p>Much of the development from early 2013 onwards has already been open-sourced, with further projects being released as licensing allows. Starting from 2017, we have also opened up internal workings to quarterly review, in an effort to improve transparency and trust. In 2014, management of the 103 contributors throughout the year lead those wonderful people to help well over <strong>10 million others</strong>, from a total of 237 countries. That's more than 1 user every 3 seconds.</p>
		<blockquote>
			<h4><em>[&hellip;] saw visits from countries like Svalbard and even North Korea, despite near total lack of internet access in these countries.</em></h4>
		</blockquote>
	</section>

</div>

</body>
</html>
