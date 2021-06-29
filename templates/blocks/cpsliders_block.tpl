
<{$block.content}>

<!--
<div id="carouselSlider<{$block.slider_id}>" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <{foreach item=element from=$block.elements}>
         <{if $element.count == 0}>
            <li data-target="#carouselSlider<{$block.slider_id}>" 
            data-slide-to="<{$element.count}>" class="active"></li>
        <{else}>
            <li data-target="#carouselSlider<{$block.slider_id}>" data-slide-to="<{$element.count}>"></li>
        <{/if}>
            
        <{/foreach}>
    </ol>
    <div class="carousel-inner">
        <{foreach item=element from=$block.elements}>
        <{if $element.count == 0}>
            <div class="carousel-item active" data-interval="<{$block.interval}>">
        <{else}>
            <div class="carousel-item" data-interval="<{$element.interval}>">
        <{/if}>
            
                <img src="<{$element.img}>" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5><{$element.title}></h5>
                    <p><{$element.description}></p>
                </div>
            </div>
        <{/foreach}>
    </div>
    <a class="carousel-control-prev" href="#carouselSlider<{$block.slider_id}>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSlider<{$block.slider_id}>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

-->