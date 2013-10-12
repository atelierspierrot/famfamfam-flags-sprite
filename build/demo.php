<?php
/**
 * Show errors at least initially
 *
 * `E_ALL` => for hard dev
 * `E_ALL & ~E_STRICT` => for hard dev in PHP5.4 avoiding strict warnings
 * `E_ALL & ~E_NOTICE & ~E_STRICT` => classic setting
 */
//@ini_set('display_errors','1'); @error_reporting(E_ALL);
//@ini_set('display_errors','1'); @error_reporting(E_ALL & ~E_STRICT);
@ini_set('display_errors','1'); @error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

/**
 * Set a default timezone to avoid PHP5 warnings
 */
$dtmz = @date_default_timezone_get();
date_default_timezone_set($dtmz?:'Europe/Paris');

$icons_list = array(
'ad', 
'ae', 
'af', 
'ag', 
'ai', 
'al', 
'am', 
'an', 
'ao', 
'ar', 
'as', 
'at', 
'au', 
'aw', 
'ax', 
'az', 
'ba', 
'bb', 
'bd', 
'be', 
'bf', 
'bg', 
'bh', 
'bi', 
'bj', 
'bm', 
'bn', 
'bo', 
'br', 
'bs', 
'bt', 
'bv', 
'bw', 
'by', 
'bz', 
'ca', 
'catalonia', 
'cc', 
'cd', 
'cf', 
'cg', 
'ch', 
'ci', 
'ck', 
'cl', 
'cm', 
'cn', 
'co', 
'cr', 
'cs', 
'cu', 
'cv', 
'cx', 
'cy', 
'cz', 
'de', 
'dj', 
'dk', 
'dm', 
'do', 
'dz', 
'ec', 
'ee', 
'eg', 
'eh', 
'england', 
'er', 
'es', 
'et', 
'europeanunion', 
'fam', 
'fi', 
'fj', 
'fk', 
'fm', 
'fo', 
'fr', 
'ga', 
'gb', 
'gd', 
'ge', 
'gf', 
'gh', 
'gi', 
'gl', 
'gm', 
'gn', 
'gp', 
'gq', 
'gr', 
'gs', 
'gt', 
'gu', 
'gw', 
'gy', 
'hk', 
'hm', 
'hn', 
'hr', 
'ht', 
'hu', 
'id', 
'ie', 
'il', 
'in', 
'io', 
'iq', 
'ir', 
'is', 
'it', 
'jm', 
'jo', 
'jp', 
'ke', 
'kg', 
'kh', 
'ki', 
'km', 
'kn', 
'kp', 
'kr', 
'kw', 
'ky', 
'kz', 
'la', 
'lb', 
'lc', 
'li', 
'lk', 
'lr', 
'ls', 
'lt', 
'lu', 
'lv', 
'ly', 
'ma', 
'mc', 
'md', 
'me', 
'mg', 
'mh', 
'mk', 
'ml', 
'mm', 
'mn', 
'mo', 
'mp', 
'mq', 
'mr', 
'ms', 
'mt', 
'mu', 
'mv', 
'mw', 
'mx', 
'my', 
'mz', 
'na', 
'nc', 
'ne', 
'nf', 
'ng', 
'ni', 
'nl', 
'no', 
'np', 
'nr', 
'nu', 
'nz', 
'om', 
'pa', 
'pe', 
'pf', 
'pg', 
'ph', 
'pk', 
'pl', 
'pm', 
'pn', 
'pr', 
'ps', 
'pt', 
'pw', 
'py', 
'qa', 
're', 
'ro', 
'rs', 
'ru', 
'rw', 
'sa', 
'sb', 
'sc', 
'scotland', 
'sd', 
'se', 
'sg', 
'sh', 
'si', 
'sj', 
'sk', 
'sl', 
'sm', 
'sn', 
'so', 
'sr', 
'st', 
'sv', 
'sy', 
'sz', 
'tc', 
'td', 
'tf', 
'tg', 
'th', 
'tj', 
'tk', 
'tl', 
'tm', 
'tn', 
'to', 
'tr', 
'tt', 
'tv', 
'tw', 
'tz', 
'ua', 
'ug', 
'um', 
'us', 
'uy', 
'uz', 
'va', 
'vc', 
've', 
'vg', 
'vi', 
'vn', 
'vu', 
'wales', 
'wf', 
'ws', 
'ye', 
'yt', 
'za', 
'zm', 
'zw', 
);

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <![endif]-->
    <title>FamFamFam Flag icons CSS sprites</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="assets/html5boilerplate/css/normalize.css" />
    <link rel="stylesheet" href="assets/html5boilerplate/css/main.css" />
    <script src="assets/html5boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="assets/styles.css" />
<!--
	<link rel="stylesheet" href="../src/flags-sprite.css" />
//-->
	<link rel="stylesheet" href="../src/flags-sprite.min.css" />
    <!--[if lt IE 5.5]> <link rel="stylesheet" href="assets/styles_ie_lt5.5.css" /> <![endif]-->
    <!--[if gte IE 5.5]> <link rel="stylesheet" href="assets/styles_ie_gte5.5.css" /> <![endif]-->
<style type="text/css">
.sprite-overview-wrapper { display: block; width: auto; height: auto; text-align: center; background-color: #fff;}
ul.sprite-overview { margin: 1em 3em; width: auto; display: block; list-style-type: none; }
ul.sprite-overview li { float: left; width: 16px; height: 16px; display: inline-block; padding: 2px; margin: 5px; }
ul.sprite-overview li:hover { border: 1px solid #ccc; padding: 1px; }
ul.sprite-overview li a { display: inline-block; }
</style>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <header id="top" role="banner">
        <hgroup>
            <h1>FamFamFam flag icons CSS sprite demo</h1>
            <h2 class="slogan">The <strong>UNOFFICIAL</strong> sprites - Original icons work from <a href="http://www.famfamfam.com/" title="www.famfamfam.com">FamFamFam (Mark James - UK)</a>.</h2>
        </hgroup>
        <div class="hat">
            <p>This page is a demonstration/presentation of the CSS sprite constructed on the <a href="http://www.famfamfam.com/lab/icons/flags/" title="See online">FamFamFam free "Flags" icons</a>. The original set of icons is proposed under a free of use license.</p>
            <p>This work is unofficial and is not liable for FamFamFam.</p>
        </div>
    </header>

	<nav>
		<h2>Navigation</h2>
        <ul id="navigation_menu" class="menu" role="navigation">
            <li><a href="#top">Map of the demo</a><ul>
                <li><a href="#global">Global sprite overview</a></li>
                <li><a href="#usage">Sprite usage</a></li>
            </ul></li>
            <li><a href="http://www.famfamfam.com/">FamFamFam online</a></li>
        </ul>

        <div class="info">
            <p><a href="http://github.com/atelierspierrot/famfamfam-flags-sprite">See online on GitHub</a></p>
            <p class="comment">The sources of this package are hosted on <a href="http://github.com">GitHub</a>. To follow sources updates, report a bug or read opened bug tickets and any other information, please see the GitHub website above.</p>
        </div>

        <div class="info">
            <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
                <a href="https://github.com/atelierspierrot/famfamfam-silk-sprite" target="_blank" title="See on GitHub">
                    <span class="at16nc at300bs at15nc atGitHub"></span>
                </a>
                <a class="addthis_button_email"></a>
                <a class="addthis_button_print"></a>
                <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
            </div>
            <script type="text/javascript">
            var addthis_config = {data_track_addressbar:false};
            var addthis_share = {
                url: "https://github.com/atelierspierrot/famfamfam-flags-sprite"
            };
            </script>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
        </div>

    	<p class="credits" id="user_agent"></p>
	</nav>

    <div id="content" role="main">

        <article>

<p>To learn more about "CSS sprites" conception, see <a href="http://en.wikipedia.org/wiki/Sprite_%28computer_graphics%29#Sprites_by_CSS" title="See online on wikipedia.com" class="external">Sprite (computer graphics) [wikipedia]</a>.</p>
<p>The sprites were generated with the help of <a href="http://spritegen.website-performance.org/" title="See online" class="external">website-performance.org</a> and are <a href="http://jigsaw.w3.org/css-validator/" title="Validate it online" class="external">CSS3 valid</a>.</p>
<p>The minified version of the CSS file of the package was processed with the <a href="http://refresh-sf.com/yui/" title="See online" class="external">YUI Compressor</a>.</p>
<p>The PNG sprites are optimized with <a href="http://www.smushit.com/ysmush.it/" title="See online" class="external">Smush.it<sup>TM</sup></a>.</p>

<h2 id="global">Global sprite overview</h2>

<noscript><p class="warning">This page requires that JavaScript be enabled in your browser (<em>if you see this message, it doesn't seem to be the case</em>).</p></noscript>

<form>
    <label for="change_overview_bg">Change background color:&nbsp;</label>
    <select onchange="return changeOverviewBackground();" id="change_overview_bg">
        <option value="fff" selected>white</option>
        <option value="999">grey</option>
        <option value="000">black</option>
    </select>
</form>

<div class="sprite-overview-wrapper">
    <ul class="sprite-overview" id="sprite_overview">
<?php
foreach ($icons_list as $class) {
    echo <<<EOT

        <li><a href="#$class" title="$class"><span class="flag-icon reset $class"></span></a></li>
EOT;
}
?>
    </ul>
    <br class="clear" />
</div>

<h2 id="usage">Sprite usage</h2>

<p>To use the sprite, just include the CSS definition file in your HTML document:</p>

<pre class="code">
	&lt;link rel="stylesheet" href="path/to/src/silk-icons-sprite.css" /&gt;
	// or the minified version (light weight):
	&lt;link rel="stylesheet" href="path/to/src/silk-icons-sprite.min.css" /&gt;
</pre>

<p>The sprite is used adding specific CSS classes to a DOM entity such as a <code>span</code>.
Each item of the sprite is accessible by using one of the global CSS classe <code>flag-icon</code>;
each item will be an empty square of 16 pixels by 11 pixels with the wanted flag as background.
This background is defined adding the name of the item as a CSS class. For example, to construct an item using the "us" flag,
the CSS class to use will be <code>flag-icon us</code>.</p>

<p>The flag names (and associated classes) follows the <a href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" title="See onlince">ISO 3166-1 alpha-2 country codes</a>.</p>

<p>A special <code>reset</code> class can be used to reset some basic CSS definitions for an item, such as its
border (<em>none</em>), its margins and paddings (<em>0</em>).</p>

<p>A complete usage synopsis of the sprites could be:</p>

<pre style="font-weight: bold; text-align: center;">
    &lt;span class="flag-icon [reset] country_code"&gt;&lt;/span&gt;
</pre>

        </article>
    </div>

    <footer id="footer">
		<div class="credits float-left">
		    This page is <a href="" title="Check now online" id="html_validation">HTML5</a> & <a href="" title="Check now online" id="css_validation">CSS3</a> valid.
		</div>
		<div class="credits float-right">
            <a href="http://www.famfamfam.com/lab/icons/flags/">FamFamFam flag icons</a> package by <a href="http://www.famfamfam.com">FamFamFam</a> under free license.
            <br />
            <a href="http://github.com/atelierspierrot/famfamfam-flags-sprite">atelierspierrot/famfamfam-flags-sprite</a> package by <a href="http://github.com/atelierspierrot">Les Ateliers Pierrot</a> under free license.
		</div>
    </footer>

    <div class="back_menu" id="short_navigation">
        <a href="#" title="See navigation menu" id="short_menu_handler"><span class="text">Navigation Menu</span></a>
        &nbsp;|&nbsp;
        <a href="#footer" title="Go to the bottom of the page"><span class="text">Go to bottom&nbsp;</span>&darr;</a>
        &nbsp;|&nbsp;
        <a href="#top" title="Back to the top of the page"><span class="text">Back to top&nbsp;</span>&uarr;</a>
        <ul id="short_menu" class="menu" role="navigation"></ul>
    </div>

    <div id="message_box" class="msg_box"></div>

<!-- jQuery lib -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-last.min.js"><\/script>')</script>
<script>$.uiBackCompat = false;</script>

<!-- jQuery.highlight plugin -->
<script src="assets/jquery/jquery.highlight.js"></script>

<!-- scripts for demo -->
<script src="assets/scripts.js"></script>

<script>
$(function() {
    initBacklinks();
    activateMenuItem();
    getToHash();
    buildFootNotes();
    addCSSValidatorLink('assets/styles.css');
    addHTMLValidatorLink();
    $("#user_agent").html( navigator.userAgent );
    $('pre.code').highlight({source:0, indent:'tabs', code_lang: 'data-language'});
    initHandler('source');
    $('#source_block_content').text( $('#js_code').html() );
});
function changeOverviewBackground() {
    var _color = $('#change_overview_bg option:selected').val(),
        wrapper = $('.sprite-overview-wrapper');
    wrapper.css('background-color', '#'+_color);
    return false;
}
</script>
<script id="js_code">
</script>
</body>
</html>
