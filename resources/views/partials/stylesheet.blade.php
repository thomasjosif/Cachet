<style type="text/css">

body.status-page {
    margin: 0;
    color: {{ $themeTextColor }};
    @if($appBanner)
    padding-top: 0;
    @endif
    background-color: #000;
}
footer.status-page{
    margin: 0;
    color: {{ $themeTextColor }};
    @if($appBanner)
    padding-top: 0;
    @endif
    background-color: #000;  
}
p, strong { color: {{ $themeTextColor }} !important; }
.reds { color: {{ $themeReds }} !important; }
.blues { color: {{ $themeBlues }} !important; }
.greens { color: {{ $themeGreens }} !important; }
.yellows { color: {{ $themeYellows }} !important; }
.oranges { color: {{ $themeOranges }} !important; }
.greys { color: {{ $themeGreys }} !important; }
.metrics { color: {{ $themeMetrics }} !important; }
.links { color: {{ $themeLinks }} !important; }

/**
 * Banner background
 */
.app-banner {
    background-color: {{ $themeBannerBackgroundColor }} !important;
}

.app-banner-padding {
    padding: {{ $themeBannerPadding }} !important;
}

/**
 * Alert overrides.
 */
.alert {
    background-color: {{ $themeYellows }};
    border-color: {{ color_darken($themeYellows, -0.1) }};
    color: {{ color_contrast($themeYellows) }};
}
.alert.alert-success {
    background-color: {{ $themeGreens }};
    border-color: {{ color_darken($themeGreens, -0.1) }};
    color: {{ color_contrast($themeGreens) }};
}
.alert.alert-info {
    background-color: {{ $themeBlues }};
    border-color: {{ color_darken($themeBlues, -0.1) }};
    color: {{ color_contrast($themeBlues) }};
}
.alert.alert-danger {
    background-color: {{ $themeReds }};
    border-color: {{ color_darken($themeReds, -0.1) }};
    color: {{ color_contrast($themeReds) }};
}

/**
 * Button Overrides
 */
.btn.links {
    color: {{ color_darken($themeYellows, -0.3) }};
}
.btn.btn-success {
    background-color: {{ $themeGreens }};
    border-color: {{ color_darken($themeGreens, -0.1) }};
    color: {{ color_contrast($themeGreens) }};
}
.btn.btn-success.links {
    color: {{ color_darken($themeGreens, -0.3) }};
}
.btn.btn-success.btn-outline {
    background-color: transparent;
    border-color: {{ $themeGreens }};
    color: {{ $themeGreens }};
}
.btn.btn-success.btn-outline:hover {
    background-color: {{ $themeGreens }};
    border-color: {{ color_darken($themeGreens, -0.1) }};
    color: {{ color_contrast($themeGreens) }};
}
.btn.btn-info {
    background-color: {{ $themeBlues }};
    border-color: {{ color_darken($themeBlues, -0.1) }};
    color: {{ color_contrast($themeBlues) }};
}
.btn.btn-info.links {
    color: {{ color_darken($themeBlues, -0.3) }};
}
.btn.btn-danger {
    background-color: {{ $themeReds }};
    border-color: {{ color_darken($themeReds, -0.1) }};
    color: {{ color_contrast($themeReds) }};
}
.btn.btn-danger.links {
    color: {{ color_darken($themeReds, -0.3) }};
}

/**
 * Background fills Overrides
 */
.component {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.sub-component {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.incident {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.status-icon {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.panel.panel-message:before {
    border-left-color: {{ $themeBackgroundFills }} !important;
    border-right-color: {{ $themeBackgroundFills }} !important;
}
.panel.panel-message:after {
    border-left-color: {{ $themeBackgroundFills }} !important;
    border-right-color: {{ $themeBackgroundFills }} !important;
}
.footer a {
    color: {{ $themeTextColor }};
}

* {
    box-sizing: border-box;
}

/*
  Credit: https://scpslgame.com
*/
.crossfade > slideshow {
    animation: imageAnimation 15s linear infinite 0s;
    backface-visibility: hidden;
    background-size: cover;
    background-position: center center;
    color: transparent;
    height: 100%;
    left: 0px;
    opacity: 0;
    position: absolute;
    top: 0px;
    width: 100%;
    z-index: 0;
}

.crossfade > slideshow:nth-child(1) { 
    background-image: url("https://cdn.scpslgame.com/main-slideshow/1.jpg");
}

.crossfade > slideshow:nth-child(2) {
    animation-delay: 3s;
    background-image: url("https://cdn.scpslgame.com/main-slideshow/2.jpg");
}

.crossfade > slideshow:nth-child(3) {
    animation-delay: 6s;
    background-image: url("https://cdn.scpslgame.com/main-slideshow/3.jpg");
}

.crossfade > slideshow:nth-child(4) {
    animation-delay: 9s;
    background-image: url("https://cdn.scpslgame.com/main-slideshow/4.jpg");
}

.crossfade > slideshow:nth-child(5) {
    animation-delay: 12s;
    background-image: url("https://cdn.scpslgame.com/main-slideshow/5.jpg");
}

@keyframes 
imageAnimation {  0% {
 animation-timing-function: ease-in;
 opacity: 0;
}
 8% {
 animation-timing-function: ease-out;
 opacity: 1;
}
 17% {
 opacity: 1
}
 25% {
 opacity: 0
}
 100% {
 opacity: 0
}
}

.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}
</style>
