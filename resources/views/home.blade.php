@extends('app')

@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Laravel Media Upload Demo</h1>
		<p class="">By <a href="http://triasrahman.com" target="_blank">Trias Nur Rahman</a></p>
		<p>
		This is a package to make AJAX upload process easy and simple! Enhance your customer experience and improve your system performance.
		</p>
		<a class="btn btn-primary btn-lg" href="http://triasrahman.github.io/laravel-media-upload/">Get Started</a>
		<a class="btn btn-default btn-lg" href="https://github.com/triasrahman/laravel-media-upload">Github</a>
		<a class="btn btn-default btn-lg" href="https://packagist.org/packages/triasrahman/media-upload">Packagist</a>
	</div>
</div>
<div class="container">
	<p class="lead">
		Try it by uploading an image.
	</p>
	<div class="row">
		<div class="col-md-6">
			<form>
				<div class="fileupload" data-url="{{ route('media-upload') }}">
					<div class="form-group">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<a class="btn btn-primary upload-btn btn-lg btn-block">
							<span>Upload</span>
							<input type="file" name="file">
						</a>
					</div>
					<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="display:none">
						<div class="progress-bar progress-bar-default"></div>
					</div>
					<a href="#" class="thumbnail" style="display:none">
						<img src="" class="img-responsive">
					</a>

					<input type="text" class="form-control input-block" name="file_path" value="" readonly>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<div class="well">
				Output:
				<pre class="output">
				</pre>
			</div>
		</div>
	</div>

	<div>
		<hr>
		Copyright 2015. Trias Nur Rahman.
	</div>
</div>
@endsection

@section('scripts')
@parent
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.5.7/jquery.fileupload.js"></script>
<script>

var buttonUpload = '.upload-btn';
var progress = '.progress';
var progressBar = '.progress-bar';
var message = '.message';
var messageText = '.message-text'


var settings = {
	autoUpload : true,
	progressall : function (e, data) {
		// update progress bar
		var progress = parseInt(data.loaded / data.total * 100, 10);
		$(this).find(progressBar).css('width', progress + '%');
	},

	add : function (e, data) {
		data.submit();
	},

	submit : function (e, data) {
		// hide the upload button
		$(this).find(buttonUpload).attr('disabled', true);

	},

	start : function (e) {      
		// show and reset progress bar
		$(this).find(progress).show();
		$(this).find(progressBar).css('width', 0);
	},

	done : function (e, data) {

		$('pre.output').html(JSON.stringify(data.result, null, 4));

		if(data.result.error) {
			alert('ERROR:'+data.result.error);
			return false;
		}

		if(data.result.format == 'image') {
			$(this).find('.thumbnail').show().find('img').attr('src','/'+data.result.path);
		}
		else {
			$(this).find('.thumbnail').hide()
		}

		$(this).find('input[name=file_path]').val(data.result.path);
	},

	stop : function (e) {
		$(this).find(buttonUpload).removeAttr('disabled');

		// hide the progress bar
		$(this).find(progress).hide();

		filesList = null;
	}
}

$('.fileupload').fileupload(settings);
	
</script>
@stop
