@extends('frame')
@section('content')
    {{-- Cover --}}
    <div class="uk-cover-container uk-height" uk-height-viewport="offset-bottom: true" id="cover">
        <img src="" alt="" uk-cover>
        <h1 class="uk-position-top-left uk-margin-top uk-margin-right uk-margin-bottom uk-margin-left">MC Emojis</h1>
        <span class="uk-position-top-right uk-margin-top uk-margin-right uk-margin-bottom uk-margin-left uk-text-right">
            <h4 class="uk-margin-remove">Google Noto</h4>
            Source of emoji images
        </span>
        <div class="uk-position-center uk-card uk-card-body uk-card-default uk-card-hover uk-card-small uk-width-1-1 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l">
            <h3 class="uk-card-title">Download</h3>
            <form <form class="uk-form-stacked">
                <div>
                    <label class="uk-form-label">Version:</label>
                    <div class="uk-form-controls">
                        <select class="uk-select">
                            <option>1.17</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="uk-form-label"></div>
                    <div class="uk-form-controls"></div>
                </div>
            </form>
            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top">
                <span uk-icon="icon: paint-bucket" class="uk-margin-small-right"></span>
                Resource Pack
            </button>
            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top">
                <span uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>
                Emoji Drawer
            </button>
        </div>
    </div>
    <div class="uk-flex uk-flex-row uk-flex-center uk-box-shadow-medium">
        <a href="#download-both" uk-icon="icon: chevron-down; ratio: 2" uk-scroll></a>
    </div>
    <div class="uk-container uk-margin-large">
        <h4 id="download-both">Do I need to download both?</h4>
        <p>Yes. The emoji drawer provides a complete list of emojis. It floats on top of all other windows,
            allowing it to be visible while playing minecraft. It also has a search bar, can be minimized and has a quick send & mimize button.
            Make sure the drawer is positioned on top of Minecraft and then click any emoji to insert it.
            Right-click any emoji to insert it's escaped sequence (\uXXXX) into Minecraft. These sequences can be used in /tellraw,
            signs, books, chest names, animal names, item names and anywhere else that supports the Minecraft JSON text.</p>
        <p>
            The emojis aren't just thrown into Minecraft, they are converted to their numerical code points first.
            The resource pack provides a custom font that maps the code points to the emoji images.
            So in short, the drawer allows you to browse through the collection and inserts the appropriate code points into Minecraft,
            while the resource pack represents those code points as nice images.
        </p>
        <h4>Why is the emoji drawer not a single executable file?</h4>
        <p>The drawer is written in Java. Single file executables or installers must be generated on the relevant platform,
            which means that Linux and macOS executables can't be generated on Windows. Follow the instructions below
            to launch the emoji drawer.
        </p>
        <ul uk-tab>
            <li><a href="#">Windows</a></li>
            <li><a href="#">Mac</a></li>
            <li><a href="#">Linux</a></li>
        </ul>
        <ul class="uk-switcher">
            <li><p>Unzip the downloaded file into a non-temporary location.
                This could be <code>C:/Program Files/MC-Emoji</code> for example.
                Navigate to the <code>bin</code> folder inside and create a shortcut of the <code>MC Emojis.bat</code> file
                by <code>right-click > Send to > Desktop (Create shortcut)</code>. 
                Double-click the shortcut or original file to launch the emoji drawer.
            </p></li>
            <li><p>Unzip the downloaded file into a non-temporary location.
                This could be the <code>Documents</code> folder for example.
                Navigate to the <code>bin</code> folder inside and create an alias of the <code>MC Emojis</code> file 
                by <code>right-click > Make Alias</code>. You can now move the alias to a more convenient place.
                Double-click the alias or original file to launch the emoji drawer.
            </p></li>
            <li><p>Unzip the downloaded file into a non-temporary location.
                This could be <code>usr/local/bin</code> for example.
                Navigate to the <code>bin</code> folder inside.
                Mark the <code>MC Emojis</code> file as executable and create a symbolic link.
                Use <code>chmod +x "MC Emojis"; ln -s "MC Emojis - Shortcut" "MC Emojis"</code> or
                google to see if your distribution provides a graphical interface for this.
                You can now move the symbolic link to a more convenient place.
                Double-click the symbolic link or the original file to launch the emoji drawer.
            </p></li>
        </ul>
        <h4>Submitting a bug, question or feature request</h4>
        <p>You can submit a new issue over at the issue-only 
            <a href="https://github.com/Bertie2011/McEmojis-Issues/issues" target="_blank">GitHub Repository</a>.</p>
        {{-- 
            TODO: 
            Implement Download selection Logic
            add background video/gif
            check if it works on Linux
            Donation.
        --}}
    </div>
    <div class="uk-flex uk-flex-row uk-flex-center">
        <a href="#cover" uk-icon="icon: chevron-up; ratio: 2" uk-scroll></a>
    </div>
@endsection