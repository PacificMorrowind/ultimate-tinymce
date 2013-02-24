<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF8" />
        <title>{#youtube_dlg.title}</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" ></link>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <?php
		include ('../../includes/tinymce_addon_scripts.php');
		?>
        <!--
        <script type="text/javascript" src="../../tinymce/tiny_mce_popup.js"></script>
        -->
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>

        <form onSubmit="YoutubeDialog.insert();return false;" action="#">
            <p>
                <label for="youtubeURL">{#youtube_dlg.url_field} <br/>{#youtube_dlg.url_example1}: http://www.youtube.com/watch?v=gNOJWXjrNIE <br/>{#youtube_dlg.url_example1}: http://www.youtube.com/watch?v=<b>gNOJWXjrNIE</b> </label>
                <input id="youtubeURL" name="youtubeURL" type="text" class="text" style="width:100%" />
            </p>


            <b>{#youtube_dlg.choose_size}:</b>
            <ul class="share-embed-size-list">
                <li class="share-embed-size default wide">
                    <label>
                        <input type="radio" data-height="315" data-width="560" class="share-embed-size-radio " value="default" name="share-embed-size" />
                            <span class="share-embed-size-name">560 × 315</span>
                            <span class="share-embed-size-box default"></span>
                    </label>
                </li>
                <li class="share-embed-size medium wide selected">
                    <label>
                        <input type="radio" data-height="360" data-width="640" class="share-embed-size-radio " value="medium" name="share-embed-size" />
                            <span class="share-embed-size-name">640 × 360</span>
                            <span class="share-embed-size-box medium"></span>
                    </label>
                </li>
                <li class="share-embed-size large wide">
                    <label>
                        <input type="radio" data-height="480" data-width="853" class="share-embed-size-radio " value="large" name="share-embed-size" />
                            <span class="share-embed-size-name">853 × 480</span>
                            <span class="share-embed-size-box large"></span>
                    </label>
                </li>
                <li class="share-embed-size hd720 wide">
                    <label>
                        <input type="radio" data-height="720" data-width="1280" class="share-embed-size-radio  hd" value="hd720" name="share-embed-size" />
                            <span class="share-embed-size-name">1280 × 720</span>
                            <span class="share-embed-size-box hd720"></span>
                    </label>
                </li>

                <li class="share-embed-size custom">
                    <label>
                        <input type="radio" data-height="-1" data-width="-1" class="share-embed-size-radio share-embed-size-radio-custom" value="custom" name="share-embed-size" />
                            <span class="share-embed-size-name">
                                {#youtube_dlg.custom}
                            </span>
                    </label>
                    <ul class="share-embed-customize">
                        <li>
                            <label>
                                {#youtube_dlg.Width}:
                                <input type="text" maxlength="4" value="300" class="yt-uix-form-input-text share-embed-size-custom-width" /> px
                            </label>
                        </li>
                        <li>
                            <label>
                                {#youtube_dlg.Height}:
                                <input type="text" maxlength="4" value="300" class="yt-uix-form-input-text share-embed-size-custom-height" /> px
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clear"></div>
            <b>Choose type:</b>
            <input type="radio" value="iframe" name="yType" checked="checked"/> {#youtube_dlg.iframe}
            <input type="radio" value="embeded" name="yType" /> {#youtube_dlg.embed}
            <div class="clear"></div>
            <div class="mceActionPanel">
                <input type="button" id="insert" name="insert" value="{#insert}" onClick="YoutubeDialog.insert();" />
                <input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="tinyMCEPopup.close();" />
            </div>
        </form>

    </body>
</html>
