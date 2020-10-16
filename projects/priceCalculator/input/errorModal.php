




    <div class="modal errorModal" tabindex="-1" role="dialog" style="display: none; margin-top: 300px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Input fejl</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Der er fejl i dit input. Du skal udfylde alle felterne, og
                        de skal udfyldes som anvist.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeErrorModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".closeErrorModal").click(function () {
            $(".errorModal").hide();
        });
    </script>