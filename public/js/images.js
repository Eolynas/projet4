var asyncImgClasses = {
    // Class name of element that holds the images
    asyncImgHolder: 'async-image-holder',
    // Class for <img>s appended to holder element
    asyncImg: 'async-image',
    // Low res image class (loaded first)
    lowResClass : 'low-res',
    // Appended to new <img> elements after they're loaded
    loadedClass : 'loaded',
};

// data-* attribute keys
var asyncImgDataKeys = {
    // Full res
    dFullRes    : 'data-async-src',
    // Low res
    dLowRes     : 'data-async-src-low',
    // Gradient start
    // ex. rgba(255, 255, 255, .6)
    dGradient   : 'data-gradient',
    // Gradient end
    // ex. rgba(255, 255, 255, .6)
    dGradientTo : 'data-gradient-to',
    // Class string appended to each image
    // ex: 'class-a class-b'
    dImgClass   : 'data-img-class',
    // Image alt
    dImgAlt     : 'data-alt',
};

// Function loads an image *after* returning it's <img> element
function loadAsyncImage(src, lowRes, classString, gradient, gradientTo, imgAlt){
    var imgEl = new Image();
    // Blank gif keeps img element transparent
    imgEl.src = 'data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=';
    // Add image class strings
    imgEl.className = asyncImgClasses.asyncImg + ' ' + (classString || '');
    // Appends low-res class(if needed)
    if(lowRes) imgEl.className += (' ' + asyncImgClasses.lowResClass);
    // Set alt
    imgEl.alt = imgAlt || 'Asynchronous image';
    // This is a loading element(never appended to the document)
    imgLoader = new Image();
    // Prepare for when image is loaded
    imgLoader.onload = function(){
        var linearGradient = '';
        // Gradient defaults to the first value being used both from/to
        if(gradient) linearGradient = 'linear-gradient(' + gradient + ',' + (gradientTo || gradient) +'),';
        // Append real src as background to image element that is returned
        imgEl.style.backgroundImage = linearGradient + "url('" + src + "')";
        imgEl.className += (' ' + asyncImgClasses.loadedClass);
    }
    // Load image
    imgLoader.src = src;
    return imgEl;
}

// Automatically find and load async images
function findAsyncImages(){
    var asyncImageHolders = document.getElementsByClassName(asyncImgClasses.asyncImgHolder);
    for(var q = 0; q < asyncImageHolders.length; q++){
        var asyncWrap = asyncImageHolders[q];
        // Get img data
        var fullResSrc = asyncWrap.getAttribute(asyncImgDataKeys.dFullRes);
        var lowResSrc  = asyncWrap.getAttribute(asyncImgDataKeys.dLowRes);
        var gradient = asyncWrap.getAttribute(asyncImgDataKeys.dGradient);
        var gradientTo = asyncWrap.getAttribute(asyncImgDataKeys.dGradientTo);
        var imgClass = asyncWrap.getAttribute(asyncImgDataKeys.dImgClass);
        var imgAlt = asyncWrap.getAttribute(asyncImgDataKeys.dImgAlt);

        // Remove current background image from wrap
        if(lowResSrc || fullResSrc) asyncWrap.style.backgroundImage = 'none';

        // Low res
        if(lowResSrc)
            asyncWrap.appendChild(
                loadAsyncImage(lowResSrc, true, imgClass, gradient, gradientTo, imgAlt)
            );
        // Full res
        if(fullResSrc)
            asyncWrap.appendChild(
                loadAsyncImage(fullResSrc, false, imgClass, gradient, gradientTo, imgAlt)
            );
    }
}

window.addEventListener('DOMContentLoaded', function(){
    console.log('Searching for images to load in elements with class "' + asyncImgClasses.asyncImgHolder + '"')
    findAsyncImages();
});