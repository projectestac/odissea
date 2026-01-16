define(['jquery'], function($) {
    // Preserve the original public API but use the local $ (jQuery) reference.

    function filemanager_openFileInfo(fileid, filename, owner, context, filearea, component, filesize, contenthash, pathnamehash, filepath, mimetype, timemodified) {
        $('#fileModal_fileid').text(fileid);
        $('#fileModal_filename').text(decodeURIComponent(filename));
        $('#fileModal_owner').text(decodeURIComponent(owner));
        $('#fileModal_context').text(decodeURIComponent(context));
        $('#fileModal_filearea').text(filearea);
        $('#fileModal_component').text(component);
        $('#fileModal_filesize').text(filesize);
        $('#fileModal_contenthash').text(contenthash);
        $('#fileModal_pathnamehash').text(pathnamehash);
        $('#fileModal_filepath').text(decodeURIComponent(filepath));
        $('#fileModal_mimetype').text(mimetype);
        $('#fileModal_timemodified').text(timemodified);
        var href = $('#fileModal_similar').attr('original-href');
        $('#fileModal_similar').attr('href', href + contenthash);
    }

    function filemanager_deleteFile() {
        var filename = $('#fileModal_filename').text();
        $('#deleteModal_filename').text(filename);
    }

    function filemanager_deleteFileDirect(fileid, filename) {
        $('#fileModal_fileid').text(fileid);
        $('#deleteModal_filename').text(filename);
    }

    function filemanager_deleteFile_confirm() {
        return filemanager_request('delete');
    }

    function filemanager_downloadFile() {
        return filemanager_request('download');
    }

    function filemanager_request(action) {
        var fileid = $('#fileModal_fileid').text();
        var wwwroot = $('#fileModal_urlroot').text();
        window.location = wwwroot + '/report/coursequotas/filemanager_action.php?action='+action+'&fileid='+fileid;
    }

    // Init function: expose legacy globals for backward compatibility with inline handlers.
    function init() {
        // Only attach if not already defined to avoid overwriting other definitions.
        if (typeof window.filemanager_openFileInfo !== 'function') {
            window.filemanager_openFileInfo = filemanager_openFileInfo;
        }
        if (typeof window.filemanager_deleteFile !== 'function') {
            window.filemanager_deleteFile = filemanager_deleteFile;
        }
        if (typeof window.filemanager_deleteFileDirect !== 'function') {
            window.filemanager_deleteFileDirect = filemanager_deleteFileDirect;
        }
        if (typeof window.filemanager_deleteFile_confirm !== 'function') {
            window.filemanager_deleteFile_confirm = filemanager_deleteFile_confirm;
        }
        if (typeof window.filemanager_downloadFile !== 'function') {
            window.filemanager_downloadFile = filemanager_downloadFile;
        }
        if (typeof window.filemanager_request !== 'function') {
            window.filemanager_request = filemanager_request;
        }
    }

    // Return the public interface for AMD consumers and allow explicit init call.
    return {
        init: init,
        openFileInfo: filemanager_openFileInfo,
        deleteFile: filemanager_deleteFile,
        deleteFileDirect: filemanager_deleteFileDirect,
        deleteFile_confirm: filemanager_deleteFile_confirm,
        downloadFile: filemanager_downloadFile,
        request: filemanager_request
    };
});
