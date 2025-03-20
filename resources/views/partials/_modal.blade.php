<!-- modal.blade.php -->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    @if($modalType === 'cgpa')
                        CGPA Information
                    @elseif($modalType === 'module_tracker')
                        Module Tracker
                    @else
                        Default Modal
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if($modalType === 'cgpa')
                    <p>Your CGPA: {{ $cgpa }}</p>
                    <!-- Any additional CGPA-related content -->
                @elseif($modalType === 'module_tracker')
                    <p>Track your modules here...</p>
                    <!-- Any additional module tracker-related content -->
                @else
                    <p>Default content goes here...</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>