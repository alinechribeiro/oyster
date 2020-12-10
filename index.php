<?php include 'header.php'; ?>
<div class="container">
	<div class="breadcrumbs">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">About us</li>
			</ol>
		</nav>
	</div>
	<div>
		<!-- accordion -->
		<div class="accordion d-inline-block" id="accordionExample">
			<div class="card">
				<div class="card-aboutus">About us</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Page title one
						</div>
					</h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page one</span>
						</div>
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page two</span>
						</div>
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page three</span>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Page title two
						</button>
					</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page one</span>
						</div>
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page two</span>
						</div>
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page three</span>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
						<button class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Page title three
						</button>
					</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page one</span>
						</div>
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page two</span>
						</div>
						<div>
							<span class="fa fa-chevron-right"></span><span>Sub page three</span>
						</div>
					</div>
				</div>
			</div>
		</div><div class="content d-inline-block">
			<h2 class="light-green">H2 Title here</h2>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut mattis sapien, a ullamcorper enim. Ut at felis et libero consequat varius. Fusce sit amet urna nec odio tempor suscipit. Sed quis nisl ut orci finibus varius vitae vel diam. Pellentesque bibendum, purus et accumsan gravida, dolor nulla iaculis ligula, in sollicitudin est nibh et felis. </p>
			</div>
			<h3 class="light-green">H3 Title here</h3>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut mattis sapien, a ullamcorper enim. Ut at felis et libero consequat varius. Fusce sit amet urna nec odio tempor suscipit. Sed quis nisl ut orci finibus varius vitae vel diam. Pellentesque bibendum, purus et accumsan gravida, dolor nulla iaculis ligula, in sollicitudin est nibh et felis. </p>
			</div>
			<h4 class="light-green">H4 Title here</h4>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut mattis sapien, a ullamcorper enim. Ut at felis et libero consequat varius. Fusce sit amet urna nec odio tempor suscipit. Sed quis nisl ut orci finibus varius vitae vel diam. Pellentesque bibendum, purus et accumsan gravida, dolor nulla iaculis ligula, in sollicitudin est nibh et felis. </p>
			</div>
			<h5 class="light-green">H5 Title here</h5>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut mattis sapien, a ullamcorper enim. Ut at felis et libero consequat varius. Fusce sit amet urna nec odio tempor suscipit. Sed quis nisl ut orci finibus varius vitae vel diam. Pellentesque bibendum, purus et accumsan gravida, dolor nulla iaculis ligula, in sollicitudin est nibh et felis. </p>
			</div>
			<h6 class="dark-blue">H6 Title here</h6>
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut mattis sapien, a ullamcorper enim. Ut at felis et libero consequat varius. Fusce sit amet urna nec odio tempor suscipit. Sed quis nisl ut orci finibus varius vitae vel diam. Pellentesque bibendum, purus et accumsan gravida, dolor nulla iaculis ligula, in sollicitudin est nibh et felis. </p>
			</div>
			<h6 class="dark-blue">This is a bulleted list(H6)</h6>
			<ul class="oyster-bulleted-list">
				<li>Lorem ipsum dolor sit ame</li>
				<li>Consectetur adipiscing elit</li>
				<li>Quisque gravida mattis</li>
				<li>Maecenas commodo</li>
			</ul>
			<h6 class="dark-blue">This is a numbered list(H6)</h6>
			<ol class="oyster-numbered-list">
				<li>Lorem ipsum dolor sit ame</li>
				<li>Consectetur adipiscing elit</li>
				<li>Quisque gravida mattis</li>
				<li>Maecenas commodo</li>
			</ol>


			<hr>

			<!-- accordion posts -->
			<div class="accordion accordion-posts d-inline-block" id="posts">
				<div class="card">
					<div class="card-header" id="headingOne">
						<div class="mb-0">
							<div class="btn btn-block text-left collapsed acc" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<div class="post-title">Cras accumsan posuere dolor, vel mattis sem dapibus</div>
								<i class="fa fa-chevron-right accordion-posts-arrow-right rotate"></i>
							</div>
						</div>
					</div>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#posts">
						<div class="card-body">
							<p class="font-weight-bold">Lorem ipsum dolar.</p>
							<p>LLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan posuere dolor, vel mattis sem dapibus ut. Duis vestibulum massa at quam consequat, quis euismod nulla aliquam. Phasellus elementum, massa sed maximus semper, diam diam condimentum erat, a mollis urna lectus quis eros. Pellentesque porttitor lobortis metus. In cursus, ante at scelerisque tristique, enim felis rhoncus nibh, nec vehicula turpis diam vitae felis. Aliquam erat volutpat. Nunc nec placerat lorem, vitae tempus nisi. Aliquam erat volutpat. Cras diam ligula, dapibus in mollis at, commodo a nunc. Duis quis mauris laoreet, pharetra massa at, pharetra tellus. Quisque et nunc purus. Ut nisl ipsum, luctus sed lorem non, rutrum sollicitudin neque.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<div class="mb-0">
							<div class="btn btn-block text-left collapsed acc" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<div class="post-title">Dolar sit amet sum foar sit amet aller?</div>
								<i class="fa fa-chevron-right accordion-posts-arrow-right rotate"></i>
							</div>
						</div>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#posts">
						<div class="card-body">
							<p class="font-weight-bold">Lorem ipsum dolar.</p>
							<p>LLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan posuere dolor, vel mattis sem dapibus ut. Duis vestibulum massa at quam consequat, quis euismod nulla aliquam. Phasellus elementum, massa sed maximus semper, diam diam condimentum erat, a mollis urna lectus quis eros. Pellentesque porttitor lobortis metus. In cursus, ante at scelerisque tristique, enim felis rhoncus nibh, nec vehicula turpis diam vitae felis. Aliquam erat volutpat. Nunc nec placerat lorem, vitae tempus nisi. Aliquam erat volutpat. Cras diam ligula, dapibus in mollis at, commodo a nunc. Duis quis mauris laoreet, pharetra massa at, pharetra tellus. Quisque et nunc purus. Ut nisl ipsum, luctus sed lorem non, rutrum sollicitudin neque.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<div class="mb-0">
							<div class="btn btn-block text-left collapsed acc" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<div class="post-title">Dolar sit amet sum foar sit amet aller olar sit amet sum foar sit amet allet?</div>
								<i class="fa fa-chevron-right accordion-posts-arrow-right rotate"></i>
							</div>
						</div>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#posts">
						<div class="card-body">
							<p class="font-weight-bold">Lorem ipsum dolar.</p>
							<p>LLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan posuere dolor, vel mattis sem dapibus ut. Duis vestibulum massa at quam consequat, quis euismod nulla aliquam. Phasellus elementum, massa sed maximus semper, diam diam condimentum erat, a mollis urna lectus quis eros. Pellentesque porttitor lobortis metus. In cursus, ante at scelerisque tristique, enim felis rhoncus nibh, nec vehicula turpis diam vitae felis. Aliquam erat volutpat. Nunc nec placerat lorem, vitae tempus nisi. Aliquam erat volutpat. Cras diam ligula, dapibus in mollis at, commodo a nunc. Duis quis mauris laoreet, pharetra massa at, pharetra tellus. Quisque et nunc purus. Ut nisl ipsum, luctus sed lorem non, rutrum sollicitudin neque.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<div class="mb-0">
							<div class="btn btn-block text-left collapsed acc" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<div class="post-title">Lorem ipsum foar sit amet under?</div>
								<i class="fa fa-chevron-right accordion-posts-arrow-right rotate"></i>
							</div>
						</div>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#posts">
						<div class="card-body">
							<p class="font-weight-bold">Lorem ipsum dolar.</p>
							<p>LLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan posuere dolor, vel mattis sem dapibus ut. Duis vestibulum massa at quam consequat, quis euismod nulla aliquam. Phasellus elementum, massa sed maximus semper, diam diam condimentum erat, a mollis urna lectus quis eros. Pellentesque porttitor lobortis metus. In cursus, ante at scelerisque tristique, enim felis rhoncus nibh, nec vehicula turpis diam vitae felis. Aliquam erat volutpat. Nunc nec placerat lorem, vitae tempus nisi. Aliquam erat volutpat. Cras diam ligula, dapibus in mollis at, commodo a nunc. Duis quis mauris laoreet, pharetra massa at, pharetra tellus. Quisque et nunc purus. Ut nisl ipsum, luctus sed lorem non, rutrum sollicitudin neque.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFive">
						<div class="mb-0">
							<div class="btn btn-block text-left collapsed acc" data-toggle="collapse" data-target="#headingFive" aria-expanded="false" aria-controls="headingFive">
								<div class="post-title">Dolar sit amet sum foar sit amet aller?</div>
								<i class="fa fa-chevron-right accordion-posts-arrow-right rotate"></i>
							</div>
						</div>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#posts">
						<div class="card-body">
							<p class="font-weight-bold">Lorem ipsum dolar.</p>
							<p>LLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan posuere dolor, vel mattis sem dapibus ut. Duis vestibulum massa at quam consequat, quis euismod nulla aliquam. Phasellus elementum, massa sed maximus semper, diam diam condimentum erat, a mollis urna lectus quis eros. Pellentesque porttitor lobortis metus. In cursus, ante at scelerisque tristique, enim felis rhoncus nibh, nec vehicula turpis diam vitae felis. Aliquam erat volutpat. Nunc nec placerat lorem, vitae tempus nisi. Aliquam erat volutpat. Cras diam ligula, dapibus in mollis at, commodo a nunc. Duis quis mauris laoreet, pharetra massa at, pharetra tellus. Quisque et nunc purus. Ut nisl ipsum, luctus sed lorem non, rutrum sollicitudin neque.</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Slick Slider -->
			<div class="slider-oyster">
				<div><span class="slick-content">1</span></div>
				<div><span class="slick-content">2</span></div>
				<div><span class="slick-content">3</span></div>
				<div><span class="slick-content">4</span></div>
				<div><span class="slick-content">5</span></div>
			</div>

			<div class="video"><div class="video-player"><span class="fa fa-caret-right"></span></div></div>

			<table class="table table-striped table-bordered">
				<thead class="dark-blue">
					<tr>
						<th scope="col">Table heading</th>
						<th scope="col">Table heading</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Lorem Ipsum</td>
						<td>Lorem Ipsum</td>
					</tr>
					<tr>
						<td>Lorem Ipsum</td>
						<td>Lorem Ipsum</td>
					</tr>
					<tr>
						<td>Lorem Ipsum</td>
						<td>Lorem Ipsum</td>
					</tr>
					<tr>
						<td>Lorem Ipsum</td>
						<td>Lorem Ipsum</td>
					</tr>
				</tbody>
			</table>

			<div class="downloads">Downloads</div>
			<div class="donwload-files">
				<a href="#" class="pdf-file">
					<img src="src/images/pdf.png" class="pdf-file-image">
					<p class="text-center">Document title</p>
					<p class="text-center">lorem ipsum.pdf</p>
				</a>				
				<a href="#" class="pdf-file">
					<img src="src/images/pdf.png" class="pdf-file-image">
					<p class="text-center">Document title</p>
					<p class="text-center">lorem ipsum.pdf</p>
				</a>
				<a href="#" class="pdf-file">
					<img src="src/images/pdf.png" class="pdf-file-image">
					<p class="text-center">Document title</p>
					<p class="text-center">lorem ipsum.pdf</p>
				</a>
				<a href="#" class="pdf-file">
					<img src="src/images/pdf.png" class="pdf-file-image">
					<p class="text-center">Document title</p>
					<p class="text-center">lorem ipsum.pdf</p>
				</a>
			</div>

			<hr>

			<div class="testimony">
				<img src="src/images/quotes.png">
				<div class="testimony-quotes">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
				<div class="testimony-author">Nam Surname</div>
			</div>

			<hr>

			<div class="bg-dark-blue msg-action">
				<span class="call-title">Call to action title</span>
				<span class="call-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				<div class="btn btn-green">Read more</div>
			</div>
	</div>

</div>
</body>
<?php include 'footer.php'; ?>
</html> 