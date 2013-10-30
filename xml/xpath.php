<script type="text/javascript" language="javascript" src="other/jquery-1.8.2.min.js"></script>
<script type="text/javascript" language="javascript" src="other/jquery.carouFredSel-6.2.1-packed.js"></script>
<link rel="stylesheet" type="text/css" href="other/carousel.css" />
  <div id="player"></div>
<script>
//Load player api asynchronously.
var tag = document.createElement('script');
tag.src = "http://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var done = false;
var player;
function onYouTubePlayerAPIReady() {
    player = new YT.Player('player', {
      height: '390',
      width: '640',
	  autoplay:1,
      videoId: 'ZQeKiDpbd-M',
	   playerVars: {
		  listType:'playlist',
		  list:'PLcevMkLawaGoLqqC5g8Yp9_oXG2cIZOX3'
	  },
     // events: {
     //   'onReady': onPlayerReady,
     //   'onStateChange': onPlayerStateChange
     // }
    });
}
function onPlayerReady(evt) {
    evt.target.playVideo();
}
function onPlayerStateChange(evt) {
    if (evt.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
    }
}
function play() {
  if (player) {
    player.playVideo();
  }
}
function stopVideo() {
    player.stopVideo();
}
function change(id){
	player.loadVideoById(id);
}

</script>
<div class="list_carousel">
  <ul id="foo2">
<?php
$xml = simplexml_load_file('test.xml');
//var_dump($xml->getNameSpaces()) ;die;
//$result = $xml->xpath('/feed');
$count = count($xml->entry);
foreach($xml->entry as $key => $each){
	$title = $each->title;
	//echo $title;
	foreach($each->xpath('.//media:group') as $event) {
		$thumbnails = $event->xpath('media:thumbnail');
	 	//var_export($event->xpath('media:thumbnail'));
	 	$attr = $thumbnails[0]->attributes();
	 	$thumbnailURL = $attr['url'];
	 	//echo $attr['url'].' here<br/>';
	 	
	 	$playerurl = $event->xpath('media:player');
	 	//var_export($event->xpath('media:thumbnail'));
	 	$attr = $playerurl[0]->attributes();
	 	$str = $attr['url'];
	 	preg_match('/\?v=(.*)\&/',$str, $matches);
	 	$vidoeId = $matches[1];
	 	//echo $vidoeId.' Playe<br/>';
	 	echo "<li><div class=\"imgbox\"><a \"javascript:void(0);\" onclick=\"change('".$vidoeId."');\"><img width=200 src='".$thumbnailURL."'/></a></div></li>";
	}

}
?>
</ul>
</div>
							<div class="clearfix"></div>
					<div class="jcarousel-prev jcarousel-prev-horizontal" id="prev2">aaa</div>
					<div class="jcarousel-next jcarousel-next-horizontal" id="next2">bbb</div>
					
							<script>
$('#foo2').carouFredSel({
	items: 5,
	auto: false,
	prev: '#prev2',
	next: '#next2',
	height:'auto',
	mousewheel: true,
	padding:[0,10,0,0] ,
	swipe: {
		onMouse: true,
		onTouch: true
	}
});

</script>