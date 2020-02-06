<!-- row -->
<div class="row">
    <div class="white-box">
        <div class="row">
            @include('admin.dentists.show_fields2')
        </div>
        <br>
        <div class="row">
            <div class="white-box" style="border: 1px solid black;">
                <h4>
                    Documents
                    <div class="text-right pull-right">
                        <div class="btn-group">
                            <button
                                    type="button"
                                    data-class-toggle="documents-list"
                                    class="btn btn-primary document-add-button">
                                Add document
                            </button>
                        </div>
                    </div>
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="documents-list list-unstyled">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="document-form" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="document-form-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="document-edit-form-label">Add document</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <form enctype="multipart/form-data"
                                          role="form" id="document-edit">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Document name</label>
                                                <input type="text" name="name" id="document-edit-name"
                                                       class="form-control" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="type">Document type</label>
                                                <select data-placeholder="Select document type" name="type_id"
                                                        id="document-edit-type" class="form-control chosen-select-width">
                                                    <option value="">Select document type</option>
                                                    <option value="" class="fly-add-option">Add new document type</option>
                                                </select>
                                                <input
                                                        data-role="fly-add"
                                                        data-target="#document-edit-type"
                                                        data-source=""
                                                        data-on-success="addOption"
                                                        type="button"
                                                        class="btn btn-success fly-add hidden"
                                                        value="Add New">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attachment">Attachment</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" readonly="">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default btn-file">
                                                            Browse… <input type="file" name="attachment"
                                                                           id="document-edit-file">
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>&nbsp;</label><br>
                                                <input type="button"
                                                       data-url=""
                                                       data-type=""
                                                       class="form-control btn btn-primary"
                                                       id="save-document" value="Add document">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-form" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="modal-form-content">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="white-box" style="border: 1px solid black;">
                <h4>
                    Notes
                    <div class="text-right pull-right">
                        <div class="btn-group">
                            <button
                                    type="button"
                                    data-class-toggle="documents-list"
                                    class="btn btn-primary document-add-button">
                                Add note
                            </button>
                        </div>
                    </div>
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="documents-list list-unstyled">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="document-form" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="document-form-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="document-edit-form-label">Add document</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <form enctype="multipart/form-data"
                                          role="form" id="document-edit">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Document name</label>
                                                <input type="text" name="name" id="document-edit-name"
                                                       class="form-control" placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="type">Document type</label>
                                                <select data-placeholder="Select document type" name="type_id"
                                                        id="document-edit-type" class="form-control chosen-select-width">
                                                    <option value="">Select document type</option>
                                                    <option value="" class="fly-add-option">Add new document type</option>
                                                </select>
                                                <input
                                                        data-role="fly-add"
                                                        data-target="#document-edit-type"
                                                        data-source=""
                                                        data-on-success="addOption"
                                                        type="button"
                                                        class="btn btn-success fly-add hidden"
                                                        value="Add New">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="attachment">Attachment</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" readonly="">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-default btn-file">
                                                            Browse… <input type="file" name="attachment"
                                                                           id="document-edit-file">
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>&nbsp;</label><br>
                                                <input type="button"
                                                       data-url=""
                                                       data-type=""
                                                       class="form-control btn btn-primary"
                                                       id="save-document" value="Add document">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-form" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="modal-form-content">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <a href="/dentist" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
</div>