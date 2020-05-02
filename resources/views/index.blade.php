@extends('frame')
@section('head')
    <script src="/js/index.js" defer></script>
    <link rel="stylesheet" href="/css/index.css"/>
@endsection
@section('content')
    {{-- Mobile version header --}}
    <div class="uk-flex uk-flex-row uk-flex-between uk-hidden@s">
        <h2 class="uk-margin-top uk-margin-right uk-margin-bottom uk-margin-left">{{$title}}</h2>
        <span class="uk-margin-top uk-margin-right uk-margin-bottom uk-margin-left uk-text-right">
            <h4 class="uk-margin-remove">{{$second}}</h4>
            {{$second_sub}}
        </span>
    </div>
    {{-- Cover --}}
    <div class="uk-cover-container uk-box-shadow-medium uk-visible@s" id="cover">
        {{-- <iframe src="https://www.youtube.com/embed/ThB6P3AamXU?autoplay=1&color=white&controls=0&disablekb=1&loop=1" width="1920" height="1004" frameborder="0" allowfullscreen uk-responsive></iframe> --}}
        <div>
            <video src="/demo.mp4" autoplay loop muted uk-video="autoplay: true"></video>
            <div class="uk-flex uk-flex-row uk-flex-center">
                <a href="#download-both" uk-icon="icon: chevron-down; ratio: 2" uk-scroll></a>
            </div>
        </div>
        <h1 class="uk-light uk-position-top-left uk-margin-top uk-margin-right uk-margin-bottom uk-margin-left">{{$title}}</h1>
        <span class="uk-light uk-position-top-right uk-margin-top uk-margin-right uk-margin-bottom uk-margin-left uk-text-right">
            <h4 class="uk-margin-remove">{{$second}}</h4>
            {{$second_sub}}
        </span>
        <div class="uk-position-center-right uk-width-1-3@m uk-width-1-4@l uk-visible@m">
            @include('includables.download')
        </div>
    </div>
    {{-- Mobile Version Download --}}
    <div class="uk-hidden@m">
        @include('includables.download')
    </div>
    {{-- Content --}}
    <div class="uk-container uk-margin-large">
        <h4 id="download-both">Do I need to download both?</h4>
        <p>Yes. The emoji drawer provides a complete list of emojis. It floats on top of all other windows,
            allowing it to be visible while playing minecraft. It also has a search bar, can be minimized and has a quick send & mimize button.
            Make sure the drawer is positioned on top of Minecraft and then click any emoji to insert it.
            Right-click any emoji to insert it's escaped sequence (\uXXXX) into Minecraft.
            These sequences can be used in /tellraw and a couple other places.</p>
        <p>
            The emojis aren't just thrown into Minecraft, they are converted to their numerical code points first.
            The resource pack provides a custom font that maps the code points to the emoji images.
            So in short, the drawer allows you to browse through the collection and inserts the appropriate code points into Minecraft,
            while the resource pack represents those code points as nice images.
        </p>
        <h4>Why is the emoji drawer not a single executable file?</h4>
        <p>The drawer is written in Java. Up to Java 8, a single .jar file could be published and 
            users were expected to install Java themselves.
            In Java 9 and higher, creators are expected to distribute a lean runtime image themselves, which is why the download
            is a .zip file containing everything you need instead of just a .jar file.
            Scripts are generated to make running the .jar file with the dedicated runtime image easier.
            The script files look a little different, but are launched in the same way as a .jar or .exe file.
        </p><p>
            Single file executables or installers for a platform can be generated, but only on the platform that the executable
            is generated for. This means that Linux and macOS executables can't be generated on Windows. This lead to the decision
            to distribute the runtime images with scripts instead.
        </p>
        <h4>Launching the Emoji Drawer</h4>
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
                Mark the <code>MC Emojis</code> and <code>java</code> files as executable by using a File Properties window
                provided by your distribution or use <code>chmod +x "MC Emojis" "java"</code>.
                Go back to the parent directory.
                Create a symbolic link of the <code>bin</code> folder by once again using the GUI or 
                <code>ln -s "$(readlink -f bin)" "MC Emojis"</code>.
                You can now move the created symbolic link to a more convenient place.
                Double-click <code>MC Emojis</code> inside the <code>bin</code> folder or symbolic link to launch the emoji drawer.
            </p></li>
        </ul>
        <h4>Submitting a bug, question or feature request</h4>
        <p>You can submit a new issue over at the issue-only 
            <a href="https://github.com/Bertie2011/McEmojis-Issues/issues" target="_blank">GitHub Repository</a>.</p>
        <h4 id="support"><span uk-icon="icon: heart"></span> Support MC Emojis</h4>
        <p>Creating the resource pack and developing the Emoji Drawer takes a lot of time.
            If you'd like to support MC Emojis, have a look at the possibilities below. Any help is appreciated 
            <span uk-icon="icon: happy"></span></p>
        <div class="uk-flex-inline uk-flex-column uk-flex-stretched" uk-margin>
            <button class="uk-button uk-button-default">Do not re-distribute</button>
            <button class="uk-button uk-button-default">Tell your friends about it!</button>
            <button class="uk-button uk-button-primary" id="notify-support" {{$has_supported ? 'disabled' : ''}}>Notify me of your support!</button>
        </div>
        {{-- 
            TODO:
            Donation. And explanation of costs
            PMC?
        --}}
    </div>
    <div class="uk-flex uk-flex-row uk-flex-center">
        <a href="#cover" uk-icon="icon: chevron-up; ratio: 2" uk-scroll></a>
    </div>
@endsection