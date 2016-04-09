<?php namespace App; use App\Blog; use URL; use Form;?>
@extends('layout.public')
@section('content')
<div class="row">
        <div class="col-lg-8">
<div class="jumbotron" style="background-color: white">
   <p style="text-align:center">     
I can be reached via email at <br><b>sa (SHIFT+2) sysaxiom (period) com | allaudeen (period) s (SHIFT+2) gmail (period) com </b>*
</p>
<br>

* If you are a human, you should be able to decipher the email address.
      </div>
      <div class="well" style="background-color: white">
      <div class="alert alert-success" id="mailSentSucess" style="display:none"><span id="mailResultSuccess"</span></div>
      <div class="alert alert-danger" id="mailSentFailure" style="display:none"><span id="mailResultFailure"</span></div>
    <div id="formContent">
    {!! Form::open(array('class' => 'form-horizontal' )) !!}
    <input type="hidden", "_token"  name="_token" value="{{ csrf_token()}}" >
            <h2>Email Me</h2>
        <input type="text" id="userEmail" class="form-control" placeholder="Email address">
        <textarea class="form-control" id="userMessage" rows="3" placeholder="Message"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="sendMail">Send</button>
      {!! Form::close() !!}
      </div>
      </div>
            

            </div>
        <div class="col-md-4">

              <div class="box clearfix">
            <h2>Contact</h2>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
              <div class="title only pull-right">904 244 5010</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
              <div class="title only pull-right">hello@sulthanallaudeen.com</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
              <div class="title pull-right">Twitter</div>
              <div class="description pull-right">https://twitter.com/allaudeens</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
              <div class="title pull-right">Facebook</div>
              <div class="description pull-right">https://www.facebook.com/allaudeens</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
              <div class="title pull-right">Skype</div>
              <div class="description pull-right">allaudeens</div>
            </div>
          </div>
          <!-- SKILLS -->
          <div class="box">
            <h2>Skills</h2>
            <div class="skills">
              <div class="item-skills" data-percent="1.00">Laravel (framework)</div>
              <div class="item-skills" data-percent="0.90">PHP</div>
              <div class="item-skills" data-percent="0.70">HTML</div>
              <div class="skills-legend clearfix">
                <div class="legend-left legend">Beginner</div>
                <div class="legend-left legend"><span>Proficient</span></div>
                <div class="legend-right legend"><span>Expert</span></div>
                <div class="legend-right legend">Master</div>
              </div>
            </div>
          </div>
          <!-- LANGUAGES -->
          <div class="box">
            <h2>Languages</h2>
            <div id="language-skills">
              <div class="skill">Polish <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">English <div class="icons pull-right"><div style="width: 60%;" class="icons-red"></div></div></div>
            </div>
          </div>
          <!-- HOBBIES -->
          <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">Photography</div>
            <div class="hobby">Fitness</div>
            <div class="hobby">Programming</div>
          </div>

            </div>
      </div>
    </div>
<script>
$(document).ready(function() {

  
  $( "#sendMail" ).click(function() {
  event.preventDefault();
  var _token = $("input[name=_token]").val();
  var userEmail = $("#userEmail").val();
  var userMessage = $("#userMessage").val();
  $.post( "sendMail", { _token : _token, userEmail : userEmail, userMessage : userMessage })
  .done(function( data ) {
    var result = jQuery.parseJSON(JSON.stringify(data));
    if (result.success==1)
    { 
     $("#mailSentFailure").hide();
     $("#formContent").hide();
     $("#mailResultSuccess").html("Mail Sent Succesfully.. Mail Id : "+result.mailId);
     $("#mailSentSucess").show();

    }
    else
    {
    
     $("#mailResultFailure").html("");
     $("#mailResultFailure").html(result.error.userEmail);
     $("#mailResultFailure").append(result.error.userMessage);
     $("#mailSentFailure").show();

    }

  });
});


} );

</script>
<script>
$( document ).ready(function() {
  $( "#s" ).click(function() {
    var _token = $("input[name=_token]").val();
    event.preventDefault();
var emailSender = $("#userEmail").val();
var userMessage = $("#userMessage").val();
alert(_token);
alert(emailSender);
alert(userMessage);
$.post( "postTag", { _token : _token, userEmail : userEmail, userMessage : userMessage })
  .done(function( data ) {
    alert(data);
    $(".well").html("");
    $(".mailResult").html("Mail Sent Succesfully");
  });


    
});
});
</script>
@stop