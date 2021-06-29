
$(function() {
    $('.elements-list').sortable({
        accept: 'element',
        opacity: 0.6,
        handle: '.move',
        cursor: 'move',
        connectWith: '.elements-list',
        update: function (event, ui) {
            $('.preloader').show();
            var list = $(this).sortable('serialize');
            $.post('elements.php?op=order', list);
            setTimeout(function() { 
                //$('.preloader').hide();
                document.location.reload(); 
            }, 2000);
        },
        receive: function (event, ui) {
            $('.preloader').show();
            var list = $(this).sortable('serialize');
            $.post('elements.php?op=order', list);
            setTimeout(function() { 
                //$('.preloader').hide();
                document.location.reload(); 
            }, 2000); 
        }
    }
).disableSelection();
});

function cpslidersImgSelected(imgId, selectId, imgDir, extra, xoopsUrl) {
    if (xoopsUrl == null) {
        xoopsUrl = "./";
    }
    imgDom = xoopsGetElementById(imgId);
    selectDom = xoopsGetElementById(selectId);
    if (selectDom.options[selectDom.selectedIndex].value != "") {
        imgDom.src = xoopsUrl + "/" + imgDir + "/" + selectDom.options[selectDom.selectedIndex].value + extra;
    } else {
        imgDom.src = xoopsUrl + "/images/blank.gif";
    }

    linkDom = xoopsGetElementById(imgId + '_link');
    selectDom = xoopsGetElementById(selectId);
    if (selectDom.options[selectDom.selectedIndex].value != "") {
        linkDom.href = xoopsUrl + "/" + imgDir + "/" + selectDom.options[selectDom.selectedIndex].value + extra;
    } else {
        linkDom.href = xoopsUrl + "/images/blank.gif";
    }
}

function cpslidersImageURL(fileInput, previewZone, hrefZone) {
    if (fileInput.files && fileInput.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        previewZone.attr('src', e.target.result);
        hrefZone.attr('href', e.target.result);
      }
      
      reader.readAsDataURL(fileInput.files[0]); // convert to base64 string
    }
}