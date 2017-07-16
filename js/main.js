(function () {
    var $images = $('img');
    $images.each(function (index, image) {
        var $image = $(image), $parentNode = $image.parent();
        if($parentNode[0] && $parentNode[0].tagName === 'A') {
            $parentNode.attr('data-lightbox', 'Portfolio');
        } else {
            var $a = $('<a data-lightbox="Portfolio" href="' + $image.attr('src') + '"></a>')
            $image.replaceWith($a);
            $a.append($image);
        }
    });
})();