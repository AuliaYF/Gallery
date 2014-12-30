<div class="col-md-12">
	<div class="wrapper">
		<button type="button" class="btn btn-default pull-left"><span class="glyphicon glyphicon-chevron-left"></span></button>
		<button type="button" class="btn btn-default pull-right"><span class="glyphicon glyphicon-chevron-right"></span></button>
	</div>
</div>
<div class="clearfix"></div>
<div class="col-md-12">

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img red-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right active">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img pink-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img purple-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right active">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img deep-purple-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img indigo-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img blue-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right active">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img light-blue-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 photo">
		<div class="wrapper">
			<div class="refer">
				<p>Refer to: <a href="#">Album</a></p>
			</div>
			<div class="img cyan-500"></div>
			<div class="info">
				<p class="pull-left">test</p>
				<a href="#" class="pull-right active">
					<span class="glyphicon glyphicon-heart"></span>
				</a>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="link"></a>
		</div>
	</div>

</div>
<script>
	$(document).ready(function(){
		$(".info a").click(function(){
			if($(this).hasClass('active')) {
				$(this).removeClass('active')
			}else{
				$(this).addClass('active')
			};
		});
	});
</script>