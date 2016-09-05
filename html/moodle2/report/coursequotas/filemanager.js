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
    console.log(context, decodeURIComponent(context));
}

function filemanager_deleteFile() {
    var filename = $('#fileModal_filename').text();
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
