
const selectedVersion = document.getElementById('version-selector');
const rpButton = document.getElementById('dl-rp');
const edButton = document.getElementById('dl-ed');
const edButtonGroup = document.getElementById('dl-ed-group');
const edButtonWindows = document.getElementById('dl-ed-windows');
const edButtonMac = document.getElementById('dl-ed-mac');
const edButtonLinux = document.getElementById('dl-ed-linux');
const routePrefix = '/downloads/mc-emojis/';

function setup() {
    selectedVersion.addEventListener('change', () => updateDownloadButtons());
    edButtonGroup.style.display = 'none';
    edButton.addEventListener('click', () => {
        edButtonGroup.style.display = null;
        edButtonGroup.classList.add('uk-animation-fade');
        setTimeout(() => {   
            edButtonGroup.classList.remove('uk-animation-fade');
        }, 150);
        event.stopPropagation();
    });
    document.addEventListener('click', () => {
        edButtonGroup.classList.add('uk-animation-fade');
        edButtonGroup.classList.add('uk-animation-reverse');
        setTimeout(() => {   
            edButtonGroup.classList.remove('uk-animation-fade');
            edButtonGroup.classList.remove('uk-animation-reverse');
            edButtonGroup.style.display = 'none';
        }, 150);
    });
    updateDownloadButtons();
}

function updateDownloadButtons() {
    const version = JSON.parse(selectedVersion.options[selectedVersion.selectedIndex].value);
    rpButton.href = version.resource_pack;
    edButtonWindows.href = version.drawer.windows;
    edButtonMac.href = version.drawer.macOS;
    edButtonLinux.href = version.drawer.linux;
}

setup();