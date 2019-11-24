<?php
$phoneno = $_GET['phoneno'];


?>

<form action="../index.php" method="POST" class="form-horizontal form-bordered">

    <div class="modal-header">
        <h4 class="title">Create SMS</h4>
    </div>
    <div class="modal-body">

        <div class="form-body">
            <input type="hidden" name="sendsms" value="sendsms">

            <div class="form-group">
                <label for="recipient" class="control-label ">To</label>
                <div class="">

                    <input id="recipient" name="recipient" type="text" class="form-control" value="<?php echo $phoneno; ?>" readonly required />
                </div>
            </div>

            <div class="form-group">
                <label for="sender" class="control-label ">From *</label>
                <div class="">

                    <input id="sender" name="sender" type="text" class="form-control" placeholder="Your Name: e.g Ayeni Jeremiah" required />
                </div>
            </div>

            <div class="form-group">
                <label for="message" class="control-label ">Message *</label>
                <div class="">
                    <textarea id="message" name="message" required type="text" maxlength="160" rows="2" class="form-control" required>Hi, i'm from your constituency, my name is [name], and i want to ask, [content]</textarea>
                </div>
            </div>

        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" class="btn btn-success waves-effect" disabled>Send</button>
    </div>

</form>

<script>
    $(document).on('focus', '#sender', function() {

        if ($("#recipient").val().trim() !== '') {
            document.querySelector('#submit').disabled = false;
        }
    });
</script>