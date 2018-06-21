@extends('main')

@section('title', 'Contact')


@section('content')
  <div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form>
            <div class="form-group">
                <label for="name">Your name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Type your full name...">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Your email here...">
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Title of your message....">
            </div>

            <div class="form-group">
                <label for="message">Content:</label>
                <textarea type="text" class="form-control" id="message" name="namessageme" placeholder="Type something you want to contact us..."></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Send Message">
        </form>
    </div>
  </div> <!-- end contact block -->
@stop