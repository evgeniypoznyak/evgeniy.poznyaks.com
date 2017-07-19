<style>


</style>


<div class="modal fade" id="contactModalBody" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" id="modalClose" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">New message for Evgeniy</h4>
            </div>
            <div class="modal-body">


                <div class="ajax-process-container">
                    <img src="{{url('/img/loader.gif')}}" id="ajax-process">
                </div>

                <h1 id="ajax-successes"> Thank you! </h1>

                <form id="contactModalForm">

                    @include('layouts.errors')

                    <div class="form-group" id="errorFromAjaxForm" style="display: none">
                    <div class="alert alert-danger">

                        <ul>
                                <li id="errorFromAjax"></li>

                        </ul>

                    </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input  required type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label>Email Address:</label>
                        <input required class="form-control"
                               type="email" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="company">Company Name (optional):</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message:</label>
                        <textarea required rows="5" cols="50"
                                  class="form-control" id="message" name="message"
                                  style="resize:none"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="sendMessage" type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </form>
                </div>

        </div>
    </div>
</div>