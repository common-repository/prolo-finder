<?php 
	/*
		Prolo Finder Config Page
		Version last updated: 6.18.14
	*/
?>
<div class="wrap" style="background-image:url(<?php echo plugins_url(); ?>/prolo-finder/img/prolo-brand.svg); background-repeat:no-repeat; background-position:bottom right; background-size:60px 60px;">
    <h1><img src="<?php echo plugins_url(); ?>/prolo-finder/img/prolo-brand.svg" width="25" height="25"> Prolo for Wordpress</h1>

    <h5>Version 1.0 Stable</h5>

    <div class="welcome-panel">
        <h3>Thanks for choosing Prolo as your product finder/store locator.</h3>

        <p>Please follow the simple steps below to add your Prolo finder to any post or page in WordPress!</p>
        <hr>

        <p><a class="button button-primary" target="_blank" href="http://prolofinder.uservoice.com/">Prolo Support</a> <a class="button button-primary" target="_blank" href="http://prolofinder.com">Prolo Homepage</a> <a class="button button-primary" target="_blank" href="http://prolofinder.com/login">Prolo Login</a></p>
    </div><br clear="all">

    <h2>Embed a Finder</h2>
    <hr>

    <h3>Copy and paste the code below into any page or post:</h3>

    <p class="input-text-wrap"><input type="text" class="regular-text code" autocomplete="off" value='[prolofinder key="YOUR_FINDER_KEY"]'></p>

    <p>Don't forget to swap <em>"YOUR_FINDER_KEY"</em> with your actual Prolo finder key. <a href="#finder-key">What is my finder key?</a></p><br clear="all">

    <h2>Getting Started Guide</h2>
    <hr>
	
	<h3>Sign Up for a Prolo Account</h3>
	<p>Not a registered for a Prolo account? <a class="button button-primary" target="_blank" href="http://prolofinder.com/">Start Your 15-Day Trial Now!</a></p>
	<hr>
    <h3>Log in to Prolo</h3>
    <hr>

    <p>Please visit your <a class="button button-primary" target="_blank" href="http://www.prolofinder.com/login">Prolo Dashboard</a> and locate the <strong>Set Up</strong> tab.</p>

    <p><img src="<?php echo plugins_url(); ?>/prolo-finder/img/prolo-setup.jpg"></p>
    <hr>

    <h3 id="finder-key">Locate your "Finder Key"</h3>
    <hr>

    <p>A Finder Key is a numerical value which represents your finder. This key is used to embed your custom Prolo finder on your webpage. We'll need to locate this value in order to embed Prolo on WordPress.</p>

    <p>Within the <strong>Set Up</strong> tab, you should see a text-box under the term <strong>Add To Your Site</strong>. This box contains your finder's embed code. At the end of that code is a number that may look something like: <strong>collection=xxxxxx</strong>.</p>

    <p>Your <strong>Finder Key</strong> is the numerical value just after the term "<strong>collection=</strong>".</p>

    <p><img src="<?php echo plugins_url(); ?>/prolo-finder/img/prolo-collection-id.jpg"></p>
    <hr>

    <h3>Copy your "Finder Key"</h3>
    <hr>

    <p>Copy your Finder Key (<em>command+c (mac), ctrl+c (pc)</em>) and add it to our custom shortcode.</p>

    <p>Replacing "YOUR_FINDER_KEY" with what you've just copied. Example: <strong>[prolofinder key="47680100"]</strong></p>
    <hr>

    <h3>Insert Into a Page or Post</h3>
    <hr>

    <p>Once you've updated the shortcode, simply copy and paste that code in any page or post in simple plain-text and hit publish!<br>
    You will now see your newly minted Prolo finder on your page or post.</p>

    <p><img src="<?php echo plugins_url(); ?>/prolo-finder/img/prolo-post.jpg"></p>
    <hr>

    <h2>Help, Support and Feedback</h2>

    <p>If you're experiencing any trouble embedding Prolo on WordPress, or would like to send us your feedback <a class="button button-primary" target="_blank" href="http://prolofinder.uservoice.com/">Visit Our Support Page</a>.</p>
</div>
