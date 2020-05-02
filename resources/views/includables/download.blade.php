<div id="download-card" class="uk-card uk-card-body uk-card-default uk-card-hover uk-card-small">
    <h3 class="uk-card-title">Download</h3>
    <form <form class="uk-form-stacked">
        <div>
            <label class="uk-form-label">Version:</label>
            <div class="uk-form-controls">
                <select class="uk-select version-selector">
                    @foreach ($versions as $version)
                    <option value="{{json_encode($version)}}">{{$version["version"]}}</option>   
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <div class="uk-form-label"></div>
            <div class="uk-form-controls"></div>
        </div>
    </form>
    <a class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top dl-rp" href="#">
        <span uk-icon="icon: paint-bucket" class="uk-margin-small-right"></span>
        Resource Pack
    </a>
    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top dl-ed" type="button">
        <span uk-icon="icon: thumbnails" class="uk-margin-small-right"></span>
        Emoji Drawer
    </button>
    <div>
        <div class="uk-button-group uk-width-1-1 uk-animation-fast dl-ed-group">
            <a class="uk-button uk-button-default uk-flex-auto uk-padding-remove dl-ed-windows" href="#">Windows</a>
            <a class="uk-button uk-button-default uk-flex-auto uk-padding-remove dl-ed-mac" href="#">MacOS</a>
            <a class="uk-button uk-button-default uk-flex-auto uk-padding-remove dl-ed-linux" href="#">Linux</a>
        </div>
    </div>
    <a class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-top" href="#support">
        <span uk-icon="icon: heart" class="uk-margin-small-right"></span>
        Support Me
    </a>
</div>