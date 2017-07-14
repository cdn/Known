/* 
 * Javascript used by the main page shell.
 * 
 * IMPORTANT:
 * This file isn't loaded directly, for changes to show you must generate a minified
 * version. E.g.
 *
 *   yui-compressor shell.js > shell.min.js
 */


function Template() {}

/**
 * Add a notice info
 * @param {type} message
 * @param {type} message_type
 * @returns {undefined}
 */
Template.addMessage = function(message, message_type)
{
    if (message_type === undefined) {
	message_type = 'alert-info';
    }
    
    $('div#page-messages').append('<div class="alert ' + message_type + ' col-md-10 col-md-offset-1">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        message + '</div>');
}


/**
 * Add an error message
 * @param {type} message
 * @returns {undefined}
 */
Template.addErrorMessage = function(message) { Template.addMessage(message, 'alert-danger'); }


function addMessage(message, message_type) { Template.addMessage(); }
function addErrorMessage(message) { Template.addErrorMessage(message); }


/** Configure timeago and adjust videos in content */
function annotateContent() {
    $(".h-entry").fitVids();
    $("time.dt-published").timeago();
}

$(document).ready(function () {
    $.timeago.settings.cutoff = 30 * 24 * 60 * 60 * 1000; // 1 month
    annotateContent();
});

/**
 * Better handle links in iOS web applications.
 * This code (from the discussion here: https://gist.github.com/kylebarrow/1042026)
 * will prevent internal links being opened up in safari when known is installed
 * on an ios home screen.
 */
(function (document, navigator, standalone) {
    if ((standalone in navigator) && navigator[standalone]) {
        var curnode, location = document.location, stop = /^(a|html)$/i;
        document.addEventListener('click', function (e) {
            curnode = e.target;
            while (!(stop).test(curnode.nodeName)) {
                curnode = curnode.parentNode;
            }
            if ('href' in curnode && (curnode.href.indexOf('http') || ~curnode.href.indexOf(location.host)) && (!curnode.classList.contains('contentTypeButton'))) {
                e.preventDefault();
                location.href = curnode.href;
            }
        }, false);
    }
})(document, window.navigator, 'standalone');

// Open external links in new tab
$(document).ready(function(){
    $('body').on('click', function (event, el) {
        var clickTarget = event.target;

        if (clickTarget.href && clickTarget.href.indexOf(window.location.origin) === -1) {
            clickTarget.target = "_blank";
        }
    });
});