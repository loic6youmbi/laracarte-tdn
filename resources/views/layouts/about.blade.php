@extends('layouts.default',['title'=>'About'])
@section('contenu')
<div class="container">
    <h1 class="text-center">What is Laracarte? </h1>
    <p>Laracarte is a clone app of <a href="https://laramap.com" target=" blanc">Laramap.com</a></p>
    <div class="row">
      <div class="col-md-6">
         <p class="alaert alert-warning">
           <strong><i class="fa fa-exclamation-triangle"></i> This class has been built by <a href="https://web.facebook.com/?_rdc=1&_rdr">@loic365</a> learning purposes.</strong>
         </div>
      </div>
    </div>
    <p>Feel free to help improve the <a href="#">source code.</a> </p>
    <hr>
    <h2> What is Laramap? </h2>
    <p> Laramap is the website by which Laracarte was inspired:).</p>
    <p>More infos <a href="https://laramap.com/p/about"> here. </a></p>
    <hr>
    <h2>Which tools and services are used in Laracarte?</h2>
    <p> Basically it's built on mlaravel &amp; bootstrap. But there's a bunch of services used for email other sections.</p>
    <ul>
      <li>Laravel</li>
      <li>Bootstrap</li>
      <li>Amazon s3</li>
      <li>Mandrill</li>
      <li>Googlme Maps</li>
      <li>Gravatar</li>
      <li>Antony Martin's Geolocation Package</li>
      <li>Michel Fortin's Markdown Parser Package</li>
      <li>Heroku</li>
    </ul>
</div>
@endsection
