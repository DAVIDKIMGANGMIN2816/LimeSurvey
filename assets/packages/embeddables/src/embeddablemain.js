import Embedo from 'embedo';
import './scss/main.scss';

$(document).on('ready pjax:scriptcomplete', function(){
    $('oembed').each(
        function(i,item) {
            if($(this).find(".svgcontainer").length == 0) {
                $(this).append(`
                <div class="svgcontainer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                        <polygon class="play-btn__svg" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69"/>
                        <path class="play-btn__svg" d="M26,13A13,13,0,1,1,13,0,13,13,0,0,1,26,13ZM13,2.18A10.89,10.89,0,1,0,23.84,13.06,10.89,10.89,0,0,0,13,2.18Z"/>
                    </svg>
                </div>`);
            }
        }
    )

    $('oembed').off('click.embeddable');
    $('oembed').on('click.embeddable',  function() {
        const url = $(this).attr('url');
        
        // Check if this is a YouTube post URL (community post)
        // YouTube posts cannot be embedded, so we handle them separately
        const youtubePostRegex = /(?:https?:\/\/)?(?:www\.)?(?:m\.)?youtube\.com\/post\/[\w-]+/i;
        if (youtubePostRegex.test(url)) {
            $(this).find(".svgcontainer").remove();
            // Create a link to the YouTube post instead of embedding
            // Escape the URL to prevent XSS attacks
            const escapedUrl = $('<div>').text(url).html();
            $(this).html(`
                <div class="youtube-post-link" style="padding: 20px; text-align: center; border: 1px solid #ccc; border-radius: 4px; background: #f9f9f9;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 159 110" width="60" height="42" style="margin-bottom: 10px;">
                        <path d="M154 17.5c-1.82-6.73-7.07-12-13.8-13.8-9.04-3.49-96.6-5.2-122 0.1-6.73 1.82-12 7.07-13.8 13.8-4.08 17.9-4.39 56.6 0.1 74.9 1.82 6.73 7.07 12 13.8 13.8 17.9 4.12 103 4.7 122 0 6.73-1.82 12-7.07 13.8-13.8 4.35-19.5 4.66-55.8-0.1-75z" fill="#f00"/>
                        <path d="M105 55L64.2 31.6v46.8z" fill="#fff"/>
                    </svg>
                    <p style="margin: 10px 0 5px 0; font-weight: bold;">YouTube Community Post</p>
                    <p style="margin: 5px 0; color: #666; font-size: 0.9em;">This content cannot be embedded. Click below to view on YouTube.</p>
                    <a href="${escapedUrl}" target="_blank" rel="noopener noreferrer" style="display: inline-block; margin-top: 10px; padding: 10px 20px; background: #f00; color: white; text-decoration: none; border-radius: 4px;">View on YouTube</a>
                </div>
            `);
            console.ls.log('YouTube post detected, showing link instead');
            return;
        }
        
        window.embedo = window.embedo || new Embedo({
            facebook: true,
            twitter: true,
            instagram: true,
            pinterest: true,
            youtube: true,
            vimeo: true,
            github: true,
            soundcloud: true,
            googlemaps: true
        });
        
        $(this).find(".svgcontainer").remove();
        window.embedo.load(this, url)
        .done((result) => {
            console.ls.log(result);
        })
        .fail((result) => {
            console.ls.error(result);
        })
    });    
});
