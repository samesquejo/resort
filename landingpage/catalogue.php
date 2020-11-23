<?php
    include('header.php');
?>
<section id="content">
    <div class="bg-top">
        <div class="bg-top-2">
            <div class="bg">
                <div class="bg-top-shadow"> 
                    <div class="main">
                            <h4 id="home_header">Accomodations & Facilities</h4><br />
    <p style="font-size:16px;">We are spaciously designed to suit your modern lifestyle. Our amenities are ideal for both business and holiday travelers. We present quality rooms at unbelievably cheap, affordable rates.</p><br/>
    <p style="font-size:16px;">Whether travelling on business or for a weekend of fun and vacation, this is the perfect place to put your feet up at the end of the day.</p><br/>
                        <div class="gallery p3">
                            <div class="wrapper indent-bot">
                                <div id="gallery" class="content"> 
                                    <div class="wrapper">
                                        <div class="slideshow-container">
                                            <div id="slideshow" class="slideshow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="thumbs" class="navigation">
                                    <ul class="thumbs noscript">
                                        <li>
                                            <a class="thumb" href="images2/pic1.jpg" title=""> <img src="images2/thumb-1.jpg" alt="" /><span></span> </a>
                                        </li> 
                                        <li>
                                            <a class="thumb" href="images2/pic2.jpg" title=""> <img src="images2/thumb-2.jpg" alt="" /> <span></span></a>
                                        </li> 
                                        <li>
                                            <a class="thumb" href="images2/pic3.jpg" title=""> <img src="images2/thumb-3.jpg" alt="" /> <span></span></a>
                                        </li> 
                                        <li>
                                            <a class="thumb" href="images2/pic4.jpg" title=""> <img src="images2/thumb-4.jpg" alt="" /> <span></span></a>
                                        </li> 
                                        <li>
                                            <a class="thumb" href="images2/pic5.jpg" title=""> <img src="images2/thumb-5.jpg" alt="" /> <span></span></a>
                                        </li> 
                                        <li>
                                            <a class="thumb" href="images2/pic6.jpg" title=""> <img src="images2/thumb-6.jpg" alt="" /> <span></span></a>
                                        </li>           
                                    </ul>
                                </div>
                            </div>
                            <div class="inner-2">
                                <div class="call_to_action" id="grn"><a href="eventhall.php">Event Halls</a></div>
                                <div class="call_to_action" id="orn"><a href="family.php">Family Rooms</a></div>
                                <div class="call_to_action" id="orn"><a href="deluxe.php">Deluxe Rooms</a></div>
                                <div class="call_to_action" id="orn"><a href="standard.php">Standard Rooms</a></div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</section>
     
<script type="text/javascript">
        $(window).load(function() {
        // We only want these styles applied when javascript is enabled
        $('div.navigation').css({'width' : '320px', 'float' : 'right'});
        $('div.content').css('display', 'block');

        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        var onMouseOutOpacity = 0.5;
        $('#thumbs ul.thumbs li span').opacityrollover({
            mouseOutOpacity:   onMouseOutOpacity,
            mouseOverOpacity:  0.0,
            fadeSpeed:         'fast',
            exemptionSelector: '.selected'
        });
        
        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#thumbs').galleriffic({
            delay:                     7000,
            numThumbs:                 12,
            preloadAhead:              6,
            enableTopPager:            false,
            enableBottomPager:         false,
            imageContainerSel:         '#slideshow',
            controlsContainerSel:      '',
            captionContainerSel:       '',
            loadingContainerSel:       '',
            renderSSControls:          true,
            renderNavControls:         true,
            playLinkText:              'Play Slideshow',
            pauseLinkText:             'Pause Slideshow',
            prevLinkText:              'Prev',
            nextLinkText:              'Next',
            nextPageLinkText:          'Next',
            prevPageLinkText:          'Prev',
            enableHistory:             true,
            autoStart:                 7000,
            syncTransitions:           true,
            defaultTransitionDuration: 900,
            onSlideChange:             function(prevIndex, nextIndex) {
                // 'this' refers to the gallery, which is an extension of $('#thumbs')
                this.find('ul.thumbs li span')
                    .css({opacity:0.5})
            },
            onPageTransitionOut:       function(callback) {
                this.find('ul.thumbs li span').css({display:'block'});
            },
            onPageTransitionIn:        function() {
                this.find('ul.thumbs li span').css({display:'none'});
            }
        });
    });
</script>

<?php
    include('footer.php');
?>