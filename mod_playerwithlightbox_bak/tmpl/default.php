<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<?php $folder = JURI::base().'modules/mod_playerwithlightbox/tmpl/';?>
<link href="<?php echo $folder ?>skin/pink.flag/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $folder ?>lib/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $folder ?>skins/tango/skin.css" />
<script type="text/javascript" src="<?php echo $folder ?>js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo $folder ?>js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="<?php echo $folder ?>js/jplayer.playlist.min.js"></script>


<!-- start -->
<link rel="stylesheet" type="text/css" href="<?php echo $folder ?>other/carousel.css" />
<script type="text/javascript" language="javascript" src="<?php echo $folder ?>other/jquery-1.8.2.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $folder ?>other/jquery.carouFredSel-6.2.1-packed.js"></script>

<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo $folder ?>source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $folder ?>source/jquery.fancybox.css?v=2.1.5" media="screen" />
<!--end  -->
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			title:"<img class='imagewidth' height=92 src=<?php echo $folder ?>skin/pink.flag/images/image1.png>",
			artist:"Blender Foundation",
			free:true,
			m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
			ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
			webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
			poster:"skin/pink.flag/images/f1.png"
		},
		{
			title:"<img class='imagewidth' height=92 src=<?php echo $folder ?>skin/pink.flag/images/image2.png>",
			artist:"Pixar",
			m4v: "http://www.jplayer.org/video/m4v/Finding_Nemo_Teaser.m4v",
			ogv: "http://www.jplayer.org/video/ogv/Finding_Nemo_Teaser.ogv",
			webmv: "http://www.jplayer.org/video/webm/Finding_Nemo_Teaser.webm",
			poster: "http://www.jplayer.org/video/poster/Finding_Nemo_Teaser_640x352.png"
		},
		{
			title:"<img class='imagewidth' height=92 src=<?php echo $folder ?>skin/pink.flag/images/image3.png>",
			artist:"Pixar",
			m4v: "http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v",
			ogv: "http://www.jplayer.org/video/ogv/Incredibles_Teaser.ogv",
			webmv: "http://www.jplayer.org/video/webm/Incredibles_Teaser.webm",
			poster: "http://www.jplayer.org/video/poster/Incredibles_Teaser_640x272.png"
		},
		{
			title:"<img class='imagewidth' height=92 src=<?php echo $folder ?>skin/pink.flag/images/image4.png>",
			artist:"Pixar",
			m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
			ogv: "http://www.jplayer.org/video/ogv/Incredibles_Teaser.ogv",
			webmv: "http://www.jplayer.org/video/webm/Incredibles_Teaser.webm",
			poster: "skin/pink.flag/images/f1.png"
		},
		{
			title:"<img class='imagewidth' height=92 src=<?php echo $folder ?>skin/pink.flag/images/image5.png>",
			artist:"Pixar",
			m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
			//ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
			//webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
			poster: "skin/pink.flag/images/f5.jpg"
		},
		{
			title:"<img class='imagewidth' height=92 src=<?php echo $folder ?>skin/pink.flag/images/image4.png>",
			artist:"Pixar",
			m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
			//ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
			//webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
			poster: "skin/pink.flag/images/f4.jpg"
		},
	], {
		swfPath: "js",
		supplied: "webmv, ogv, m4v",
		smoothPlayBar: true,
		keyEnabled: true
	});
//	Basic carousel, no options
	$('#foo0').carouFredSel({
		width: 260,
		height:350,
		//auto: false
	});
	
	$('.fancybox').fancybox();
}

// jQuery('#mycarousel').jcarousel();
);
//]]>
</script>
<div class="list_carousel" style="padding-top:50px;float:left;background-size:257px 346px;background-repeat: no-repeat;background-image:url(<?php echo $folder ?>other/award.png)">
				<ul id="foo0">
					<li>
						<a class="fancybox" href="<?php echo $folder ?>source/montana-228w.jpg" data-fancybox-group="gallery" title="A year in the cloud,<br/>	This is my first image">
							<img class="haspaddingbottom" src="<?php echo $folder ?>source/montana-228w.jpg" alt="" />
						</a>
						<div class="cineclass">
						<font>A year in the cloud,<br/>	This is my first image </font>
						</div>
					</li>
					<li><a class="fancybox" href="<?php echo $folder ?>source/2_b.jpg" data-fancybox-group="gallery" 
					title="Lorem ipsum dolor sit amet">
					<img  class="haspaddingbottom" src="<?php echo $folder ?>source/2_s.jpg" alt="" /></a>
					<div class="cineclass">
						<font>A year in the cloud,<br/>	This is my first image </font>
						</div>
					</li>
					<li>
					<a class="fancybox" href="<?php echo $folder ?>source/3_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
					<img  class="haspaddingbottom" src="<?php echo $folder ?>source/3_s.jpg" alt="" /></a>
					<div class="cineclass">
						<font>A year in the cloud,<br/>	This is my first image </font>
						</div></li>
					<li><a class="fancybox" href="<?php echo $folder ?>source/4_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
					<img  class="haspaddingbottom" src="<?php echo $folder ?>source/4_s.jpg" alt="" /></a>
					<div class="cineclass">
						<font>A year in the cloud,<br/>	This is my first image </font>
						</div>
					</li>
					<li><a class="fancybox" href="<?php echo $folder ?>source/5_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
					<img  class="haspaddingbottom" src="<?php echo $folder ?>source/5_s.jpg" alt="" /></a>
					<div class="cineclass">
						<font>A year in the cloud,<br/>	This is my first image </font>
					</div>
					</li>
				</ul>
				<div class="clearfix"></div>
</div>
<div>
	<div id="jp_container_1" class="jp-video jp-video-270p" style="float:right">
			<div class="jp-type-playlist" style="background-color:black">
				<div id="jquery_jplayer_1" class="jp-jplayer" ></div>
				<div class="jp-gui">
					<div class="jp-video-play">
						<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
					</div>
					<div class="jp-interface" style="visibility:hidden">
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<div class="jp-title">
							<ul>
								<li></li>
							</ul>
						</div>
						<div class="jp-controls-holder">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
								<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
								<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
								<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
							</ul>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
							<ul class="jp-toggles">
								<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
								<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
								<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
								<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
								<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
			
				<div class="list_carousel2 responsive" >
					<div class="jp-playlist" style="background-color:#000;margin-left:20px;padding-bottom:10px;">
							<ul id="foo2"><!-- id="mycarousel" class="jcarousel-skin-tango" -->
								<!-- The method Playlist.displayPlaylist() uses this unordered list -->
								<li>c</li>
								<li>a</li>
								<li>r</li>
								<li>o</li>
								<li>u</li>
							</ul>
					</div>
					<div class="clearfix"></div>
					<div class="jcarousel-prev jcarousel-prev-horizontal" id="prev2"></div><!--<a id="prev2" class="prev" href="#" style="display:block">&nbsp</a> -->
					<div class="jcarousel-next jcarousel-next-horizontal" id="next2"></div>
				</div>
		</div>
</div>
<script>
$('#foo2').carouFredSel({
	items: 5,
	auto: false,
	prev: '#prev2',
	next: '#next2',
	mousewheel: true,
	padding:[0,10,0,0] ,
	swipe: {
		onMouse: true,
		onTouch: true
	}
});

</script>
<div style="clear: both;"></div>
<div style=" border-top:8px solid #6296f5;border-bottom:8px solid #6296f5;margin-top:5px;">
<div style="background-color:#595656; width:100px;float:left;height:40px;height:29px;padding-top:11px;padding-left:5px;">
<font color="white" >
Our clients
</font>
</div>
  <marquee align=top height=36 scrollamount="3" width="830" onmouseout="this.start()" onmouseover="this.stop()"><font>
	<p><strong>Ghana</strong>

Profit of Doom - 1 x 45M, the rise of Ghana's anti-capitalist movement, for BBC2.

<strong>Egypt</strong>

I've met Bin Laden - 1 x 60M, location producing and shooting in Afghanistan, Pakistan, Egypt and Saudi Arabia, for Brook Lapping and BBC.

<strong>Sierra Leone</strong>

Blood Diamonds - 1 x 45M, diamond smuggling from Sierra Leone, for BBC2.

<strong>Rwanda</strong>

Condemned to Live - 1 x 45M, finding the men who committed genocide in Rwanda, for BBC2.

<strong>Uganda</strong>

Profit of Doom - 1 x 45M, the rise of Ghana's anti-capitalist movement, for BBC2.

<strong>Namibia</strong>

SAS - Are You Tough Enough - 6 x 60M, full location management, DOP provision, crews and equipment in the deserts of Namibia.

<strong>Ethiopia</strong>

For BBC Holiday 2006
</p></font>
  </marquee>
</div>