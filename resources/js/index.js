import UIkit from 'uikit';

const selectedVersions = document.getElementsByClassName('version-selector');
const rpButtons = document.getElementsByClassName('dl-rp');
const edButtons = document.getElementsByClassName('dl-ed');
const edButtonGroups = document.getElementsByClassName('dl-ed-group');
const edButtonsWindows = document.getElementsByClassName('dl-ed-windows');
const edButtonsMac = document.getElementsByClassName('dl-ed-mac');
const edButtonsLinux = document.getElementsByClassName('dl-ed-linux');
const notifySupportButton = document.getElementById('notify-support');

function setup() {
    for (let e of selectedVersions) e.addEventListener('change', () => updateDownloadButtons(e));
    for (let e of edButtonGroups) e.style.display = 'none';
    // If any download button is clicked, show group
    for (let e of edButtons) {
        e.addEventListener('click', () => {
            for (let edGroup of edButtonGroups) {
                edGroup.style.display = null
                edGroup.classList.add('uk-animation-fade');
                setTimeout(((edGroup) => () => { //see bottom of page
                    edGroup.classList.remove('uk-animation-fade');
                })(edGroup), 150);
            }
            event.stopPropagation();
        });
    }
    document.addEventListener('click', () => {
        for (let e of edButtonGroups) {
            e.classList.add('uk-animation-fade');
            e.classList.add('uk-animation-reverse');
            setTimeout(((e) => () => {
                e.classList.remove('uk-animation-fade');
                e.classList.remove('uk-animation-reverse');
                e.style.display = 'none';
            })(e), 150);
        };
    });
    updateDownloadButtons(selectedVersions[0]);


    notifySupportButton.addEventListener('click', () => notifySupport());
}

function updateDownloadButtons(selectElement) {
    const version = JSON.parse(selectElement.options[selectElement.selectedIndex].value);
    for (let e of rpButtons) e.href = version.resource_pack;
    for (let e of edButtonsWindows) e.href = version.drawer.windows;
    for (let e of edButtonsMac) e.href = version.drawer.macOS;
    for (let e of edButtonsLinux) e.href = version.drawer.linux;
}

setup();

function notifySupport() {
    notifySupportButton.setAttribute('disabled', '');
    UIkit.notification({
        message: 'Thank you!',
        pos: 'bottom-center',
        timeout: 1000
    });
    fetch('/api/support/notifications', {method: 'POST'});
}


/**
 * Note about variables in loops
 * 
 * The syntax within the setTimeout means: Create a lambda, that returns a lambda and call the outer lambda immediately.
 * This way, the inner lambda always has the current loop value, instead of the last value when it's called.
 */