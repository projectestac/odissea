import {getTinyMCE} from 'editor_tiny/loader';
import {component} from './common';
import * as Configuration from './configuration';
import * as Config from 'core/config';

export const baseUrl = `${Config.wwwroot}/lib/editor/tiny/plugins/wiris/js`;

// eslint-disable-next-line no-async-promise-executor
export default new Promise(async(resolve, reject) => {
    // eslint-disable-next-line no-unused-vars
    const [tinyMCE] = await Promise.all([
        getTinyMCE(),
    ]);

    // This uses editorUpload.addFilter(), which is TinyMCE's
    // built-in mechanism to exclude specific images from the scan/upload pipeline.
    // This filter runs at the ImageScanner level, so it prevents MathType images
    // from being touched by scanForImages(), uploadImagesAuto(), and uploadImages().
    tinyMCE.on('AddEditor', (event) => {
        const editor = event.editor;

        editor.on('PreInit', () => {
            if (editor.editorUpload?.addFilter) {
                editor.editorUpload.addFilter((img) => {
                    // Exclude wiris formula images from the upload pipeline.
                    return !img.classList.contains('Wirisformula') && !('mathml' in img.dataset);
                });
            }
        });
    });

    const head = document.querySelector('head');
    let script = head.querySelector('script[data-mathtype="mathtype"]');

    // If plugin.min.js file is already loaded, execute the init and resolve the promise
    if (script) {
        resolve([`${component}/plugin`, Configuration]);
        return;
    }

    script = document.createElement('script');
    script.dataset.mathtype = 'mathtype';
    script.src = `${baseUrl}/plugin.min.js`;
    script.async = true;

    script.addEventListener('load', () => {
        resolve([`${component}/plugin`, Configuration]);
    }, false);

    script.addEventListener('error', (err) => {
        reject(err);
    }, false);

    head.append(script);
});